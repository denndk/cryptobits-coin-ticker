System.register('cryptobits/cointicker/main', [], function (_export) {
    'use strict';

    return {
        setters: [],
        execute: function () {
            app.initializers.add('cryptobits-cointicker', function (app) {
                console.log('DPG123');
            });
        }
    };
});