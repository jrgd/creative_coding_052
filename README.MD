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
### Change log
  19 Jan 2022
    - logs contain the single and double quotes from the input
    - log file is consolidated in one single file
    - not a single software can replace self discpline
    - adds human-readable date after the timestamp
### Install with Alfred.app
  - create a keyword trigger
  - create a 'Run Script' Action
    - '/bin/zsh'
    - php /Users/jrgd/tools/logger/log.php "{query}"
  - link the trigger to the action
### Use form CLI
```php ./log.php I'm also able to invoke the "software" from the command line```
* but there is still an escape error and the single quote gets crushed 
### Current issue
  - to make it work in Alfred, I had to swap in the script the relative path for an absolute path
  - in Alfred: ideally I should be able to use /usr/bin/php as the language instead of running it through zsh to reach php.
