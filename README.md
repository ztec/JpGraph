This is a port for Symfony2 to put JpGraph as a Vendor library

Original Source
===============
JpGraph from http://jpgraph.net/

Installation
==============
Install with composer and add the following to your bundles array in AppKernel.php:

new \JpGraph\JpGraph()

Usage
======
use JpGraph\JpGraph::load(); and JpGraph\JpGraph::module('moduleName'); to load required modules
