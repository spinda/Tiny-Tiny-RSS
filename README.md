This Fork
=========

This is my personal collection of modifications to [Tiny Tiny
RSS](http://tt-rss.org). It's here mainly so that I don't have to keep track of
these changes manually, but there might be some bits in here that someone else
will find useful. Each individual change is in [its own
branch](https://github.com/spinda/Tiny-Tiny-RSS/branches) that you can pull
into your copy of TTRSS.

```
git add remote spinda https://github.com/spinda/Tiny-Tiny-RSS.git
git fetch spinda
git merge spinda/<branch>
```

The `master` branch also has some [additional
plugins](https://github.com/spinda/Tiny-Tiny-RSS/blob/master/.gitmodules)
installed as git submodules. Use

```
git submodule init
git submodule update
```

to set them up and `git submodule update` afterwards to update to their latest
versions.
___

Tiny Tiny RSS
=============

Web-based news feed aggregator, designed to allow you to read news from 
any location, while feeling as close to a real desktop application as possible.

http://tt-rss.org (http://mirror.tt-rss.org)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

Copyright (c) 2005 Andrew Dolgov (unless explicitly stated otherwise).

Uses Silk icons by Mark James: http://www.famfamfam.com/lab/icons/silk/

## Requirements

* Compatible web browser (http://tt-rss.org/wiki/CompatibleBrowsers)
* Web server, for example Apache
* PHP (with support for mbstring functions)
* PostgreSQL (tested on 8.3) or MySQL (InnoDB and version 4.1+ required)
		
## Installation Notes

http://tt-rss.org/wiki/InstallationNotes

## See also

* FAQ: http://tt-rss.org/wiki/FrequentlyAskedQuestions
* Forum: http://tt-rss.org/forum
* Wiki: http://tt-rss.org/wiki/WikiStart
