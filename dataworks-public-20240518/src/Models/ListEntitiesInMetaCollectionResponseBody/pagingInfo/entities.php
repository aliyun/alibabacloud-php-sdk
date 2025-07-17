<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListEntitiesInMetaCollectionResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class entities extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @example 1737078994080
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @description The entity ID. Entities can only be tables. This parameter is left empty if the entity is deleted.
     *
     * @example dlf-table:123456789:test_catalog:test_database::test_table
     *
     * @var string
     */
    public $id;

    /**
     * @example 1737078994080
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example test_table
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the entity.
     *
     * @example dlf-table
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'id' => 'Id',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
