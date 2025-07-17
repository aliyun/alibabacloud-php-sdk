<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMetaCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30000235594
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMetaCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
