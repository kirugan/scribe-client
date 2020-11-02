# FAQ

### What is this?
It's thin wrapper on scribe thrift API.

### What is scribe?
[Scribe](https://github.com/facebookarchive/scribe) is a scalable solution for log transferring developed at Facebook.

### Why do I care about the package?
Well, since you asked: this library provide you with psr-4 logger implementation that writes directly to scribe (using Thrift interface).

Chances that you will be able to inject this logger into your favorite php framework is very high.
 