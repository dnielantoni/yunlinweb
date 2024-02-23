module.exports = {
    apps: [
        {
            name: 'yunlin1',
            script: 'yunlin1.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'yunlin2',
            script: 'yunlin2.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'yunlin3',
            script: 'yunlin3.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'chiayi1',
            script: 'chiayi1.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'chiayi2',
            script: 'chiayi2.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'chiayi3',
            script: 'chiayi3.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'server',
            script: 'server.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'uploadtest',
            script: 'uploadtest.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'river',
            script: 'river.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'hsr',
            script: 'hsr.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'monitor',
            script: 'monitor.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'shp1',
            script: 'shp1.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'shp2',
            script: 'shp2.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        },
        {
            name: 'shp3',
            script: 'shp3.js',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        }
        // Add more configurations for additional applications as needed
    ]
};
