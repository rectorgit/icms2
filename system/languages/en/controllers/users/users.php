<?php

    define('LANG_USERS_CONTROLLER',         'User Profiles');

    define('LANG_USERS_LIST',               'User List');
    define('LANG_USERS_PROFILE',            'User Profile');
    define('LANG_USERS_SOCIALITY',          'Sociality');
    define('LANG_USERS_EDIT_PROFILE',       'Edit profile');
    define('LANG_USERS_EDIT_USER',          'Edit user');

    define('LANG_USERS_EDIT_PROFILE_MAIN',  'Info');
    define('LANG_USERS_EDIT_PROFILE_THEME', 'Theme');
    define('LANG_USERS_EDIT_PROFILE_NOTICES', 'Notifications');
    define('LANG_USERS_EDIT_PROFILE_PRIVACY', 'Privacy');

    define('LANG_USERS_CFG_FIELDS',         'Profile Fields');
    define('LANG_USERS_CFG_TABS',           'Profile Tabs');
    define('LANG_USERS_CFG_OPTIONS',        'Options');
    define('LANG_USERS_CFG_MIGRATION',      'Migration');

    define('LANG_USERS_OPT_FRIENDSHIP',     'Allow to add friends');
    define('LANG_USERS_OPT_THEME',          'Allow to edit profile design');
    define('LANG_USERS_OPT_THEME_HINT',     'only if theme supports this function');
    define('LANG_USERS_OPT_MAX_TABS',       'Maximum number of tabs');
    define('LANG_USERS_OPT_MAX_TABS_HINT',  'Other tabs will be hidden under the «More...» item<br>0 — unlimited number');
    define('LANG_USERS_OPT_AUTH_ONLY',      'Allow to view profiles only to authorized users');
    define('LANG_USERS_OPT_WALL_ENABLED',   'Enable profile wall');
    define('LANG_USERS_OPT_STATUSES_ENABLED',   'Enable profile status');
    define('LANG_USERS_OPT_KARMA_COMMENTS', 'Explain reputation vote');
    define('LANG_USERS_OPT_KARMA_TIME',     'Reputation voting period, days');
    define('LANG_USERS_OPT_KARMA_TIME_HINT','A user will be able to vote for other user’s reputation only once in a specified period');

    define('LANG_USERS_MIG_TITLE',              'Rule title');
    define('LANG_USERS_MIG_IS_ACTIVE',          'Rule is active');
    define('LANG_USERS_MIG_ADD',                'New Migration Rule');
    define('LANG_USERS_MIG_DELETE_CONFIRM',     'Delete the "{title}” rule?');
    define('LANG_USERS_MIG_ACTION',             'Action type');
    define('LANG_USERS_MIG_ACTION_CHANGE',      'Change group');
    define('LANG_USERS_MIG_ACTION_ADD',         'Add to group');
    define('LANG_USERS_MIG_FROM',               'Initial group');
    define('LANG_USERS_MIG_TO',                 'Target group');
    define('LANG_USERS_MIG_COND_DATE',          'Date conditions');
    define('LANG_USERS_MIG_PASSED_DAYS',        'Days');
    define('LANG_USERS_MIG_PASSED',             'Not less than, days');
    define('LANG_USERS_MIG_PASSED_FROM',        'From');
    define('LANG_USERS_MIG_PASSED_REG',         'registration');
    define('LANG_USERS_MIG_PASSED_MIG',         'last migration');
    define('LANG_USERS_MIG_COND_RATING',        'Rating conditions');
    define('LANG_USERS_MIG_COND_KARMA',         'Reputation conditions');
    define('LANG_USERS_MIG_RATING',             'Rating higher than');
    define('LANG_USERS_MIG_KARMA',              'Reputation higher than');
    define('LANG_USERS_MIG_NOTIFY',             'Send migration notification');
    define('LANG_USERS_MIG_NOTIFY_TEXT',        'Notification text');

    define('LANG_USERS_KARMA_COMMENT',      'Please, explain your vote');

    define('LANG_USERS_OPT_DS_SHOW',        'Show the "%s” tab');
    define('LANG_USERS_DS_LATEST',          'New');
    define('LANG_USERS_DS_POPULAR',         'Popular');
    define('LANG_USERS_DS_ONLINE',          'Online');
    define('LANG_USERS_DS_RATED',           'Rating');
    define('LANG_USERS_DS_DATE_LOG',        'Last visit');

    define('LANG_USERS_OPT_FILTER_SHOW',    'Show filter');

    define('LANG_USERS_FIELD_PRIVATE',      'Show field only to the profile owner');

    define('LANG_USERS_PROFILE_INDEX',      'Profile');
    define('LANG_USERS_PROFILE_CONTENT',    'Content');
    define('LANG_USERS_PROFILE_FRIENDS',    'Friends');
    define('LANG_USERS_PROFILE_ACTIVITY',   'Activity');
    define('LANG_USERS_PROFILE_FEED',       'Feed');

    define('LANG_USERS_PROFILE_WALL',       'User Wall');

    define('LANG_USERS_PROFILE_REGDATE',    'Registered');
    define('LANG_USERS_PROFILE_INVITED_BY', 'Invited by');

    define('LANG_USERS_PROFILE_IS_HIDDEN',  'Private information is hidden in privacy settings');

    define('LANG_USERS_FRIENDS',            'Friends');
    define('LANG_USERS_FRIENDS_ADD',        'Add to friends');
    define('LANG_USERS_FRIENDS_DELETE',     'Remove from friends');
    define('LANG_USERS_FRIENDS_CONFIRM',    'Send friendship request to user %s?');
    define('LANG_USERS_FRIENDS_DELETE_CONFIRM', 'Delete user <b>%s</b> from your friends list?');
    define('LANG_USERS_FRIENDS_SENT',       'Friendship request was sent');
    define('LANG_USERS_FRIENDS_DELETED',    '%s was removed from your friend list');
    define('LANG_USERS_FRIENDS_DECLINED',   '%s declined your friendship request');
    define('LANG_USERS_FRIENDS_NOTICE',     '%s invites you to become friends');
    define('LANG_USERS_FRIENDS_DONE',       '%s became your friend');
    define('LANG_USERS_FRIENDS_UNDONE',     '%s stopped being your friend');

    define('LANG_USERS_NOTIFY_VIA_NONE',    'Don‘t notify');
    define('LANG_USERS_NOTIFY_VIA_EMAIL',   'By e-mail');
    define('LANG_USERS_NOTIFY_VIA_PM',      'By PM');
    define('LANG_USERS_NOTIFY_VIA_BOTH',    'By e-mail and PM');

    define('LANG_USERS_PRIVACY_FOR_ANYONE',  'Anyone');
    define('LANG_USERS_PRIVACY_FOR_FRIENDS', 'Only friends');
    define('LANG_USERS_PRIVACY_FOR_NOBODY',  'Nobody');

    define('LANG_USERS_NOTIFY_FRIEND_ADD',     'Notify on friendship requests');
    define('LANG_USERS_NOTIFY_FRIEND_ACCEPT',  'Notify on friendship request acceptance');
    define('LANG_USERS_NOTIFY_FRIEND_DELETE',  'Notify on cancelled friendship');

    define('LANG_USERS_PRIVACY_PROFILE_VIEW',  'Who can view your profile?');
    define('LANG_USERS_PRIVACY_PROFILE_WALL',  'Who can write on your wall?');

    define('LANG_USERS_FRIENDS_SPELLCOUNT', 'friend|friends|friends');

    define('LANG_USERS_ACTIVITY_FRIENDS',   'and %s become friends');

    define('LANG_USERS_LOCKED_NOTICE',          'Your profile was blocked.');
    define('LANG_USERS_LOCKED_NOTICE_PUBLIC',   'Blocked');
    define('LANG_USERS_LOCKED_NOTICE_UNTIL',    'Blocking expires: %s');
    define('LANG_USERS_LOCKED_NOTICE_REASON',   'Blocking reason: %s');

    define('LANG_USERS_WHAT_HAPPENED',          'What’s new, %s?');
    define('LANG_USERS_DELETE_STATUS_CONFIRM',   'Delete current status?');

    define('LANG_RULE_USERS_VOTE_KARMA',   'Vote for reputation');

    define('LANG_USERS_KARMA_LOG',          'Reputation history');
    define('LANG_USERS_KARMA_LOG_EMPTY',    'No votes yet');

    define('LANG_USERS_MY_INVITES',         'My invitations');
    define('LANG_USERS_INVITES_COUNT',      'You can send %s');
    define('LANG_USERS_INVITES_SPELLCOUNT', 'invite|invites|invites');
    define('LANG_USERS_INVITES_EMAIL',      'E-mail that is used to send an invitation');
    define('LANG_USERS_INVITES_EMAILS',     'E-mails that are used to send invitations');
    define('LANG_USERS_INVITES_EMAILS_HINT','One address per line');
    define('LANG_USERS_INVITES_SENT_TO',    'Invatations were successfully sent');
    define('LANG_USERS_INVITES_FAILED_TO',  'Failed to send invitations');