<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateMetaCollectionRequest extends Model
{
    /**
     * @example test comment
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example test_album
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the collection of an ancestor node.
     *
     * @example category.123
     *
     * @var string
     */
    public $parentId;

    /**
     * @description This parameter is required.
     *
     * @example Category
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'parentId' => 'ParentId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return CreateMetaCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
