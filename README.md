# bellserver
COW Bell: Compact-Over-Web school bell system. Web-based bell scheduling and ringing system for Linux servers; designed to run on minimal specs (Raspberry Pi), connected to PA system via standard RCA to 3.5mm audio

The system is designed to be installed in the default web root on a standalone web server. Most of the scripts are written with relative paths to make running them easier with the exception of the PHP scripts to be run in the command line during initial installation, which do not tend to run properly without the absolute path. Scripts, sound files (in .wav format) and the images are stored in sub-directories from the web pages, titled scripts, sounds, and images, respectively.
