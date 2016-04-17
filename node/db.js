var mongoose = require('mongoose');
mongoose.connect("mongodb://stelert:1029384756@ds019980.mlab.com:19980/expence");
module.exports = mongoose.connection;