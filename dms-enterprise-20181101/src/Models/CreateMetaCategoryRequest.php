<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateMetaCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $name;

    /**
     * @example 30000322682
     *
     * @var int
     */
    public $parentCategoryId;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'name' => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMetaCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
