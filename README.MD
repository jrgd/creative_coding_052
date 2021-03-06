# Simple logging app

This is a basic experiments of a logging app. It takes no argument but one: the text content of the log. The content could use eventually be parsed ansd so we could/should use meta, commands and status in there. The script is executed locally via php.

Further research/experimentations:

1. make it working for both CLI and web by analysing the context it's run in.
  $_GET or $argv
2. if it was to run on the web, what is the real point?
  → The main idea here is to have a way to log notes simply from a phone or any devices.
  what are the alternatives here?

:+todo How make it work with a relative path for the log-files folder?

## Documentation
### Install with Alfred.app
  - create a keyword trigger
  - create a 'Run Script' Action
    - '/bin/zsh'
    - php /Users/jrgd/tools/logger/log.php "{query}"
  - link the trigger to the action
### Current issue
  - to make it work in Alfred, I had to swap in the script the relative path for an absolute path
  - in ALfred: ideally I should be able to use /usr/bin/php as the language instead of running it through zsh to reach php.