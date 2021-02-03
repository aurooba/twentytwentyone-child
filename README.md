# Twenty Twenty One child theme

If you choose to use SCSS in this project, here's the helpful command to generate the new CSS file and sourcemap, while watching for new changes and giving you helpful error information:

Now that we have TWO main stylesheets, the command to compile them correctly has changed to:

```
sass --style=compressed --error-css --watch --color  scss/style.scss:style.css scss/editor.scss:editor.css
```
