(function() {
    tinymce.PluginManager.add( 'slack_attendance_button', function( editor, url ) {
        editor.addButton( 'slack_attendance_button', {
            tooltip : slack_attendance.labels.tooltip,
            icon    : 'slack-attendance',
            onclick : function() {
                editor.windowManager.open( {
                    title : slack_attendance.labels.modal,
                    body  : [
                        {
                            type   : 'textbox',
                            name   : 'slack_start',
                            label  : slack_attendance.labels.start
                        },
                        {
                            type   : 'textbox',
                            name   : 'slack_end',
                            label  : slack_attendance.labels.end
                        },
                        {
                            type   : 'listbox',
                            name   : 'slack_channel',
                            label  : slack_attendance.labels.channel,
                            values : slack_attendance.channels
                        },
                        {
                            type   : 'listbox',
                            name   : 'slack_reactions',
                            label  : slack_attendance.labels.reactions,
                            values : slack_attendance.show_reactions
                        }
                    ],
                    onsubmit: function ( e ) {
                        editor.insertContent( '[slack-attendees channel="' + e.data.slack_channel + '" start="' + e.data.slack_start + '" end="' + e.data.slack_end + '" reactions="' + e.data.slack_reactions + '"]' );
                    }
                } );
            }
        });
    });
})();