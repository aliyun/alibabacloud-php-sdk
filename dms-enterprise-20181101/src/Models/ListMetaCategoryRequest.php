<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListMetaCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

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
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'parentCategoryId' => 'ParentCategoryId',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListMetaCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
