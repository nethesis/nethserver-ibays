==============
Shared folders
==============

A shared folder (also known as I-bay) is a resource which can be
accessed on the services installed on the system and permissions set
by this module.

Create new / edit
-----------------

Depending on the services installed on your system you will see
several tabs.

General
^^^^^^^

Name
    The name of the shared folder can only contain letters a
    letter. The maximum length of the name is 12 characters.

Description
    Optional field for a brief description of the shared folder .

Group owner
    The group owner of the shared folder , only members of the
    group can access .

Allow writing to the group owner
    Allow write access to members of the owning group.

Allow read access to all
    Read access to anyone who connects to the system, as well as
    public networks.

.. raw:: html

   {{{INCLUDE NethServer_Module_SharedFolder_Plugin_*.html}}}

ACL
^^^

The Access Control List allows specifing access permissions to the
shared folder for each users or groups, in addition to those of the
group owner.

Read
    Allow or deny read access to the user or group is selected.

Write 
    Allow or deny the access in writing to the user or group is
    selected.


Delete
------

Removes the folder and all its contents. *The action is not
reversible!* The only way to recover the contents of a folder shared
is removed to restore a backup.

Reset permissions
-----------------

Set the values configured using this module group
owner and ACLs. The operation will be performed recursively on
all files and subfolders in the shared folder.

