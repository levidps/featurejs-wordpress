# FeatureJS WordPress Plugin
I've had the need for awhile for a browser feature based WordPress plugin to warn users about outdated/unsupported browsers. Generally all design decisions take into consideration a mix of graceful degradation and progressive enhancement. Though I find myself having to draw the line in the sand at some point. This initial version is simply to help with a project where I support nearly everything from ie8 forward. Heaps of further development to come....

### Setup
The project is built using gulp to compile JS/CSS into the distribution folder, all JS is vanilla JS, FeatureJS is also included as a minified file so that the plugin is entirely self contained. Gulp's default task is `build` which will move all php files, compile JS/CSS and copy them to the `dist` directory. The `watch` command is also available and will run the `build` command as well. 

### What's Missing?!
A lot...still to add is links to download modern browsers, icons, and some other little bits to round this baby out!

### Future Development
• Connect features to BE page so that feature support can be toggled on / off
• Potentially add custom styling

### Credits
Seriously inspired and motivated and thankful for [@viljamis](https://github.com/viljamis) for the development of featureJS, if it wasn't for this useful bit-o-scripting this plugin would look totally different.
http://featurejs.com/