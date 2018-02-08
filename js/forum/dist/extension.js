System.register('cryptobits/cointicker/main', ['flarum/extend', 'flarum/components/Post'], function (_export) {
    'use strict';

    var extend, Post;
    return {
        setters: [function (_flarumExtend) {
            extend = _flarumExtend.extend;
        }, function (_flarumComponentsPost) {
            Post = _flarumComponentsPost['default'];
        }],
        execute: function () {
            app.initializers.add('cryptobits-cointicker', function (app) {
                extend(Post.prototype, 'view', function (vdom) {
                    vdom.children.push(':D');
                    vdom.attrs.style = 'background-color: yellow';
                });
            });
        }
    };
});