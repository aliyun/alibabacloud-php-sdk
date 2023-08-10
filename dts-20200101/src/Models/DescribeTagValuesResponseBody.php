<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeTagValuesResponseBody extends Model
{
    /**
     * @description The type of the tag key.
     *
     * @example Custom
     *
     * @var string
     */
    public $category;

    /**
     * @description The start page of the returned pages.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of tag values returned on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example AD110813-9AD6-5F07-BFC8-4C841309****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag values that are associated with the tag key.
     *
     * @var string[]
     */
    public $tagValues;

    /**
     * @description The total number of tag values that are associated with the tag key.
     *
     * @example 13
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'category'   => 'Category',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'tagValues'  => 'TagValues',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagValues) {
            $res['TagValues'] = $this->tagValues;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagValuesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = $map['TagValues'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
