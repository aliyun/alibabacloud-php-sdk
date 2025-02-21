<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeTagValuesResponseBody extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $tagValues;
    /**
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
        if (\is_array($this->tagValues)) {
            Model::validateArray($this->tagValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tagValues)) {
                $res['TagValues'] = [];
                $n1               = 0;
                foreach ($this->tagValues as $item1) {
                    $res['TagValues'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->tagValues = [];
                $n1               = 0;
                foreach ($map['TagValues'] as $item1) {
                    $model->tagValues[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
