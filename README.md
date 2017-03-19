# Slack Web API Wrapper

Client interface for accessing [Slack Web API](https://api.slack.com/web).

[![Latest Stable Version](https://poser.pugx.org/wrapi/slack/v/stable)](https://packagist.org/packages/wrapi/slack)
[![License](https://poser.pugx.org/wrapi/slack/license)](https://github.com/palanik/slack-php/blob/master/LICENSE)

## Usage
Create a client object to connect to Slack Web API [methods](https://api.slack.com/methods).

```PHP
$client = new wrapi\slack\slack(SLACK_API_TOKEN);

// Now you are ready to make API calls to Slack.
```

Provide API parameters to the calls.

API calls follow this syntax:

`$client->apigroup->action($queryString);`

* `queryString` - (*as required*) API method parameters as key-value pairs.

### Examples

#### Lists custom emoji for a team.
```PHP
$emojis = $client->emoji->list();
```

#### Lists all channels in a Slack team.
```PHP
$channels = $client->channels->list(array("exclude_archived" => 1));
```

#### Gets information about a private group.
```PHP
$myGroup = $client->groups->info(array("channel" => "G1234567890"));
```

#### Adds a reaction to an item.
```PHP
$client->reactions->add(array(
    "name" => "thumbsup",
    "file" => "F1234567890",
    "file_comment" => "Fc1234567890",
    "channel" => "G1234567890",
    "timestamp" => "1234567890.123456"
  )
);
```

#### Gets information about a user.
```PHP
$user = $client->users->info(array("user" => "U1234567890"));
```

#### Post chat messages to Slack.
```PHP
$response = $client->chat->postMessage(array(
    "channel" => "#general",
    "text" => "Hello <@u12345678|world>!",
    "username" => "Wrapi Bot",
    "as_user" => false,
    "parse" => "full",
    "link_names" => 1,
    "unfurl_links" => true,
    "unfurl_media" => false
  )
)
```

## API Functions

### api
* [api->test](https://api.slack.com/methods/api.test)

### auth
* [auth->revoke](https://api.slack.com/methods/auth.revoke)
* [auth->test](https://api.slack.com/methods/auth.test)

### bots
* [bots->info](https://api.slack.com/methods/bots.info)

### channels
* [channels->archive](https://api.slack.com/methods/channels.archive)
* [channels->create](https://api.slack.com/methods/channels.create)
* [channels->history](https://api.slack.com/methods/channels.history)
* [channels->info](https://api.slack.com/methods/channels.info)
* [channels->invite](https://api.slack.com/methods/channels.invite)
* [channels->join](https://api.slack.com/methods/channels.join)
* [channels->kick](https://api.slack.com/methods/channels.kick)
* [channels->leave](https://api.slack.com/methods/channels.leave)
* [channels->list](https://api.slack.com/methods/channels.list)
* [channels->mark](https://api.slack.com/methods/channels.mark)
* [channels->rename](https://api.slack.com/methods/channels.rename)
* [channels->replies](https://api.slack.com/methods/channels.replies)
* [channels->setPurpose](https://api.slack.com/methods/channels.setPurpose)
* [channels->setTopic](https://api.slack.com/methods/channels.setTopic)
* [channels->unarchive](https://api.slack.com/methods/channels.unarchive)

### chat
* [chat->delete](https://api.slack.com/methods/chat.delete)
* [chat->meMessage](https://api.slack.com/methods/chat.meMessage)
* [chat->postMessage](https://api.slack.com/methods/chat.postMessage)
* [chat->unfurl](https://api.slack.com/methods/chat.unfurl)
* [chat->update](https://api.slack.com/methods/chat.update)

### dnd
* [dnd->endDnd](https://api.slack.com/methods/dnd.endDnd)
* [dnd->endSnooze](https://api.slack.com/methods/dnd.endSnooze)
* [dnd->info](https://api.slack.com/methods/dnd.info)
* [dnd->setSnooze](https://api.slack.com/methods/dnd.setSnooze)
* [dnd->teamInfo](https://api.slack.com/methods/dnd.teamInfo)

### emoji
* [emoji->list](https://api.slack.com/methods/emoji.list)

### files.comments
* [files->comments->add](https://api.slack.com/methods/files.comments.add)
* [files->comments->delete](https://api.slack.com/methods/files.comments.delete)
* [files->comments->edit](https://api.slack.com/methods/files.comments.edit)

### files
* [files->delete](https://api.slack.com/methods/files.delete)
* [files->info](https://api.slack.com/methods/files.info)
* [files->list](https://api.slack.com/methods/files.list)
* [files->revokePublicURL](https://api.slack.com/methods/files.revokePublicURL)
* [files->sharedPublicURL](https://api.slack.com/methods/files.sharedPublicURL)
* [files->upload](https://api.slack.com/methods/files.upload)

### groups
* [groups->archive](https://api.slack.com/methods/groups.archive)
* [groups->close](https://api.slack.com/methods/groups.close)
* [groups->create](https://api.slack.com/methods/groups.create)
* [groups->createChild](https://api.slack.com/methods/groups.createChild)
* [groups->history](https://api.slack.com/methods/groups.history)
* [groups->info](https://api.slack.com/methods/groups.info)
* [groups->invite](https://api.slack.com/methods/groups.invite)
* [groups->kick](https://api.slack.com/methods/groups.kick)
* [groups->leave](https://api.slack.com/methods/groups.leave)
* [groups->list](https://api.slack.com/methods/groups.list)
* [groups->mark](https://api.slack.com/methods/groups.mark)
* [groups->open](https://api.slack.com/methods/groups.open)
* [groups->rename](https://api.slack.com/methods/groups.rename)
* [groups->replies](https://api.slack.com/methods/groups.replies)
* [groups->setPurpose](https://api.slack.com/methods/groups.setPurpose)
* [groups->setTopic](https://api.slack.com/methods/groups.setTopic)
* [groups->unarchive](https://api.slack.com/methods/groups.unarchive)

### im
* [im->close](https://api.slack.com/methods/im.close)
* [im->history](https://api.slack.com/methods/im.history)
* [im->list](https://api.slack.com/methods/im.list)
* [im->mark](https://api.slack.com/methods/im.mark)
* [im->open](https://api.slack.com/methods/im.open)
* [im->replies](https://api.slack.com/methods/im.replies)

### mpim
* [mpim->close](https://api.slack.com/methods/mpim.close)
* [mpim->history](https://api.slack.com/methods/mpim.history)
* [mpim->list](https://api.slack.com/methods/mpim.list)
* [mpim->mark](https://api.slack.com/methods/mpim.mark)
* [mpim->open](https://api.slack.com/methods/mpim.open)
* [mpim->replies](https://api.slack.com/methods/mpim.replies)

### oauth
* [oauth->access](https://api.slack.com/methods/oauth.access)

### pins
* [pins->add](https://api.slack.com/methods/pins.add)
* [pins->list](https://api.slack.com/methods/pins.list)
* [pins->remove](https://api.slack.com/methods/pins.remove)

### reactions
* [reactions->add](https://api.slack.com/methods/reactions.add)
* [reactions->get](https://api.slack.com/methods/reactions.get)
* [reactions->list](https://api.slack.com/methods/reactions.list)
* [reactions->remove](https://api.slack.com/methods/reactions.remove)

### reminders
* [reminders->add](https://api.slack.com/methods/reminders.add)
* [reminders->complete](https://api.slack.com/methods/reminders.complete)
* [reminders->delete](https://api.slack.com/methods/reminders.delete)
* [reminders->info](https://api.slack.com/methods/reminders.info)
* [reminders->list](https://api.slack.com/methods/reminders.list)

#### rtm
* [rtm->start](https://api.slack.com/methods/rtm.start)

### search
* [search->all](https://api.slack.com/methods/search.all)
* [search->files](https://api.slack.com/methods/search.files)
* [search->messages](https://api.slack.com/methods/search.messages)

### stars
* [stars->add](https://api.slack.com/methods/stars.add)
* [stars->list](https://api.slack.com/methods/stars.list)
* [stars->remove](https://api.slack.com/methods/stars.remove)

#### team
* [team->accessLogs](https://api.slack.com/methods/team.accessLogs)
* [team->billableInfo](https://api.slack.com/methods/team.billableInfo)
* [team->info](https://api.slack.com/methods/team.info)
* [team->integrationLogs](https://api.slack.com/methods/team.integrationLogs)

### team.profile
* [team->profile->get](https://api.slack.com/methods/team.profile.get)

#### usergroups
* [usergroups->create](https://api.slack.com/methods/usergroups.create)
* [usergroups->disable](https://api.slack.com/methods/usergroups.disable)
* [usergroups->enable](https://api.slack.com/methods/usergroups.enable)
* [usergroups->list](https://api.slack.com/methods/usergroups.list)
* [usergroups->update](https://api.slack.com/methods/usergroups.update)

### usergroups.users
* [usergroups->users->list](https://api.slack.com/methods/usergroups.users.list)
* [usergroups->users->update](https://api.slack.com/methods/usergroups.users.update)

### users
* [users->deletePhoto](https://api.slack.com/methods/users.deletePhoto)
* [users->getPresence](https://api.slack.com/methods/users.getPresence)
* [users->identity](https://api.slack.com/methods/users.identity)
* [users->info](https://api.slack.com/methods/users.info)
* [users->list](https://api.slack.com/methods/users.list)
* [users->setActive](https://api.slack.com/methods/users.setActive)
* [users->setPhoto](https://api.slack.com/methods/users.setPhoto)
* [users->setPresence](https://api.slack.com/methods/users.setPresence)

### users.profile
* [users->profile->get](https://api.slack.com/methods/users.profile.get)
* [users->profile->set](https://api.slack.com/methods/users.profile.set)

## License

  [MIT](LICENSE)
