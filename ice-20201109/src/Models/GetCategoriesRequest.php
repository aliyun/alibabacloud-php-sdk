<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetCategoriesRequest extends Model
{
    /**
     * @description The category ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [Intelligent Media Services (IMS) console](https://ims.console.aliyun.com) and choose **Media Asset Management** > **Category Management** to view the category ID.
     *   View the value of CateId returned by the AddCategory operation that you called to create a category.
     *   View the value of CateId returned by the GetCategories operation that you called to query a category.
     *
     * @example 33
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The page number. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 10 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sorting rule of results. Valid values:
     *
     * \\- CreationTime:Asc: The results are sorted in chronological order based on the creation time.
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The type of the category. Valid values: default and material. A value of default indicates audio, video, and image files. This is the default value. A value of material indicates short video materials.
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
