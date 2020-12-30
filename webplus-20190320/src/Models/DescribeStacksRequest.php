<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeStacksRequest extends Model
{
    /**
     * @var bool
     */
    public $recommendedOnly;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'recommendedOnly' => 'RecommendedOnly',
        'categoryName'    => 'CategoryName',
        'pageSize'        => 'PageSize',
        'pageNumber'      => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendedOnly) {
            $res['RecommendedOnly'] = $this->recommendedOnly;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStacksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendedOnly'])) {
            $model->recommendedOnly = $map['RecommendedOnly'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
