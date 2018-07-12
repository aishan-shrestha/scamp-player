jQuery(document).ready(function($) {
    // console.log(sessionStorage.getItem("scamp_player_list"));
     //sessionStorage.removeItem("scamp_player_list");
    /* Init Scamp Player
     ---------------------------------------------------------------------- */
    scamp_player = new $.ScampPlayer( $( '#scamp_player' ), {

        // Default Scamp Player options
        volume : 0, // Start volume level
        autoplay : true, // Autoplay track
        no_track_image : 'img/no-track-image.png', // Placeholder image for track cover
        path: 'js/swf/',
        loop : true, // Loop tracklist
        // load_first_track : scamp_vars.load_first_track, // Load First track
        random : true, // Random playing
        titlebar : true, // Replace browser title on track title
        check_files : false, // Checks whether a track file exists
        client_id : 'aeb4ef2f24d76bedddbb46e209d7fada', // Soundcloud Client ID
        labels : {
            play : 'Play',
            cover : 'Cover',
            title : 'Title\/Artist',
            /* buy : scamp_vars.buy_label,*/
            buy : '',
            remove : 'Remove',
            empty_queue : 'Empty Queue'
        },
        debug : false,
        onReady : function() {
            // Callback function

        },
        // Soundmanager2 options
        sm_options : {
            url: 'js/swf/',
            flashVersion: 9,
            preferFlash: false,
            useHTML5Audio: true,
            allowScriptAccess: 'always',
            debugMode: true,
            debugFlash: false,
            useConsole: true
        },
        onTrackEnd: function() {
             Text = $('#scamp_player tr.playing td.sp-title a.sp-title-button').text()
             Text = Text.toLowerCase();
             var regExp = /\s+/g;
             Text = Text.replace(regExp,'-');
        }

    });

});
