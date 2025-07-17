<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table\businessMetadata;

use AlibabaCloud\Tea\Model;

class categories extends Model
{
    /**
     * @example CATEGORY.456
     *
     * @var string
     */
    public $id;

    /**
     * @example 测试类目
     *
     * @var string
     */
    public $name;

    /**
     * @example CATEGORY.123
     *
     * @var string
     */
    public $parentId;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'parentId' => 'ParentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
