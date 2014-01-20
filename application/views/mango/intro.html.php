<b>MangoDB - Mango</b><Br><br>

<i>MangoDB</i><br>
A wrapper for Mongo / MongoDb / MongoCollection - used in Mango, but can also be used separately if you don't need the features of Mango<br><br>

<i>Mango</i><br>
A ORM/ActiveRecord like library adding some relational features to MongoDB (more info below).<br><br>

<b>Mango</b><br>
This is a simple demo showing some features of the Mango library.<br><br>

Mango is a ORM/ActiveRecord like library for <a href="http://www.mongodb.org">MongoDB</a>; a document-based schema-less database. Although
MongoDB is schema-less, the Mango library provides some features you're used to from relational databases.<br><Br>

Mango supports:<br>
<ul>
	<li>Related objects - has_one, belongs_to, has_many, has_and_belongs_to_many</li>
	<li>Embedded objects (something new in MongoDB)</li>
	<li>Cascading deletes - if you delete ObjectA that 'has_many' ObjectB, all ObjectB's will be deleted aswell</li>
	<li>Atomic updates - all updates made to an object are atomic using modifiers like $set/$inc/$push, no concurrency issues</li>
	<li>Allows multiple keys to load objects - overload the unique_key method, and (for example) allow users to be loaded by ID and by Email address</li>
</ul><br>

<b>Limitations:</b><br>
MongoDB !== RDBMS. Not all features can be replicated in MongoDB. Please take note of the following:
<ul>
	<li>You cannot add AND remove values from a set (set column type, embedded has_many relation, has_and_belongs_to_many relation) at the same time.</li>
	<li>If an value is pushed to/pulled from an array, you CANNOT edit anything else in that array (Mongo does not support $set and $push modifiers accessing the same array.)</li>
	<li>Always run save() after your edits. Only when you save, things are actually written to the DB. When adding/removing HABTM relations, you also have to save the added/removed object.</li>
	<li>You cannot (yet) run modifiers on indexed fields. This should be fixed from 1.1.0</li>
	<li>The $pull modifier is already implemented, but is only supported from Mongo 0.9.7 (now 0.9.6)</li>
	<li>You have to create the indexes for foreign key fields yourself (recommended are OBJECT_ID columns in objects with a belongs_to relation, and any additional fields (besides _ID) that are used to load items from DB (like the email field in the User model)</li>
</ul>
<hr>
<b>Demos</b> (note: you don't have to create any database/collections to run these demos, mongo creates dbs/collections automatically whenever something is added to them,
however, if you use MongoDB in production, don't forget to set appropriate indexes, and when done playing with these demos, you might want to drop all collections/clean the database).<br><br>
<i>Mango</i>
<ol>
	<li><?php echo html::anchor('mangoDemo/demo0','Column definition : how to');?></li>
	<li><?php echo html::anchor('mangoDemo/demo1','Creating objects ');?></li>
	<li><?php echo html::anchor('mangoDemo/demo2','Creating objects and adding relations');?></li>
	<li><?php echo html::anchor('mangoDemo/demo3','Atomic updates');?></li>
	<li><?php echo html::anchor('mangoDemo/demo4','Embedded has_many relation');?></li>
	<li><?php echo html::anchor('mangoDemo/demo5','Has_and_belongs_to_many relations');?></li>
	<li><?php echo html::anchor('mangoDemo/demo6','Array management');?></li>
	<li><?php echo html::anchor('mangoDemo/demo7','Some more atomic examples');?></li>
	<li><?php echo html::anchor('mangoDemo/demo8','Multidimensional array of counters');?></li>
	<li><?php echo html::anchor('mangoDemo/demo9','Class Table Inheritance like functionality');?></li>
	<li><?php echo html::anchor('mangoDemo/demo10','Recursive validation (validating object data including embedded object data)');?></li>
	<li><?php echo html::anchor('mangoDemo/demo11','Multiple updates');?></li>
	<li><?php echo html::anchor('mangoDemo/demo12','$unset and $set with array indices (MongoDB 1.3 features)');?></li>
</ol>