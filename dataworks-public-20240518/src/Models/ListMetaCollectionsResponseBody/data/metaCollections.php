<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMetaCollectionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class metaCollections extends Model
{
    /**
     * @var string[]
     */
    public $administrators;

    /**
     * @description The time when the collection was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1668568601000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 456789
     *
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $description;

    /**
     * @description The ID of the collection.
     *
     * @example category.123
     *
     * @var string
     */
    public $id;

    /**
     * @description The time when the collection was modified. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1668568601000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example test_category
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the collection of the ancestor node. This parameter can be left empty.
     *
     * @example category.1
     *
     * @var string
     */
    public $parentId;

    /**
     * @example Category
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'administrators' => 'Administrators',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'description' => 'Description',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'parentId' => 'ParentId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->administrators) {
            $res['Administrators'] = $this->administrators;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaCollections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Administrators'])) {
            if (!empty($map['Administrators'])) {
                $model->administrators = $map['Administrators'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
