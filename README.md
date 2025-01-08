# PHP Foreach Loop with unset() Unexpected Behavior

This repository demonstrates an uncommon but important bug in PHP related to using `unset()` within a `foreach` loop on arrays.  When you `unset()` an element during iteration, the loop's internal pointer might not be correctly updated, leading to skipped elements or other unexpected results.

The `bug.php` file shows the buggy code. The `bugSolution.php` file illustrates a corrected approach using alternative techniques like `array_filter`. 

This example highlights the need to carefully manage array changes within loops in PHP and shows how seemingly simple code can lead to subtle errors. 