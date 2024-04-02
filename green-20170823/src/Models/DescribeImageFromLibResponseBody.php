<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageFromLibResponseBody\imageFromLibList;
use AlibabaCloud\Tea\Model;

class DescribeImageFromLibResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var imageFromLibList[]
     */
    public $imageFromLibList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'imageFromLibList' => 'ImageFromLibList',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->imageFromLibList) {
            $res['ImageFromLibList'] = [];
            if (null !== $this->imageFromLibList && \is_array($this->imageFromLibList)) {
                $n = 0;
                foreach ($this->imageFromLibList as $item) {
                    $res['ImageFromLibList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageFromLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageFromLibList'])) {
            if (!empty($map['ImageFromLibList'])) {
                $model->imageFromLibList = [];
                $n                       = 0;
                foreach ($map['ImageFromLibList'] as $item) {
                    $model->imageFromLibList[$n++] = null !== $item ? imageFromLibList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
