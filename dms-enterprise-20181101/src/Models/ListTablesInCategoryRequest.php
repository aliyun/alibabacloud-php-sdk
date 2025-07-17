<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListTablesInCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30000235593
     *
     * @var int
     */
    public $categoryId;

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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTablesInCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
