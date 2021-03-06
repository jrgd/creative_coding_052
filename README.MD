# Simple logging app

This is a basic experiments of a logging app. It takes no argument but one: the text content of the log. The content could use eventually be parsed ansd so we could/should use meta, commands and status in there. The script is executed locally via php.

Further research/experimentations:
1. make it working for both CLI and web by analysing the context it's run in.
  $_GET or $argv
2. if it was to run on the web, what is the real point?
  → The main idea here is to have a way to log notes simply from a phone or any devices.
  whart are the alternatives here?