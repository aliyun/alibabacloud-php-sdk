<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetCategoriesRequest extends Model
{
    /**
     * @description The ID of the category. Default value: **-1**, which indicates the parent category ID of a level 1 category.
     *
     * @example 49339****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The number of the page where the subcategories to be returned are listed. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page of the subcategory list. Default value: **10**. Maximum value: **100**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The method for sorting the results. Valid values:
     *
     *   **CreationTime:Desc** (default): The results are sorted in reverse chronological order based on the creation time.
     *   **CreationTime:Asc**: The results are sorted in chronological order based on the creation time.
     *
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The type of the category. Valid values:
     *
     *   **default** (default): default category
     *   **material**: material category
     *
     * @example default
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cateId'   => 'CateId',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy'   => 'SortBy',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCategoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
