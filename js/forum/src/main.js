import { extend } from 'flarum/extend';
import Post from 'flarum/components/Post';
app.initializers.add('cryptobits-cointicker', function(app) {
    extend(Post.prototype, 'view', function(vdom) {
        vdom.children.push(':D');
        vdom.attrs.style = 'background-color: yellow';
    });
});