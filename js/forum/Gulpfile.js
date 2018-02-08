var gulp = require('flarum-gulp');

gulp({
    modules: {
        'cryptobits/cointicker': [
            'src/**/*.js'
        ]
    }
});