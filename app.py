# To add a new cell, type '# %%'
# To add a new markdown cell, type '# %% [markdown]'
# %%
from IPython import get_ipython


# %%
get_ipython().system('pip3 install -U git+https://github.com/PYFTS/PYFTS')

import warnings
warnings.filterwarnings('ignore')

import matplotlib.pyplot as plt
get_ipython().run_line_magic('pylab', 'inline')

import pickle

# %%
import pandas as pd
from pyFTS.partitioners import Grid
from pyFTS.models import chen
from pyFTS.common import FLR
from pyFTS.common import Util
import numpy as np


# %%
data = pd.read_csv('4.csv')

data.head()


# %%
data = data['4h'].values


# %%
fuzzy = Grid.GridPartitioner(data = data, npart = 11)

fuzzyfied = fuzzy.fuzzyfy(data, method = 'maximum', mode = 'sets')


# %%
model = chen.ConventionalFTS(partitioner = fuzzy)

model.fit(data)
print(model)


# %%
patterns = FLR.generate_non_recurrent_flrs(fuzzyfied)

print([str(k) for k in patterns])


# %%
fig, ax = plt.subplots(nrows=1, ncols=1, figsize=[15,5])

fuzzy.plot(ax)


# %%
Util.plot_rules(model, size=[15,5], rules_by_axis=12)


# %%
import numpy as np

def mean_absolute_percentage_error(te, forecasts): 
    return np.mean(np.abs(((te - forecasts) / te)) * 100 )/len(dt)


# %%
dt = pd.read_csv('test.csv')
dt.drop(["t1", "t2", "t3", "t5", "t6", "t7"], axis=1, inplace=True)
dt = dt.dropna()
dt.head()


# %%
pre = model.predict(dt['t4'].values)


# %%
mean_absolute_percentage_error(dt['t4'].values, pre)


# %%
pickle.dump(model, open('fts.pkl', 'wb'))