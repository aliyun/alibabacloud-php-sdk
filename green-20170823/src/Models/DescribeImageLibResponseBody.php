<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeImageLibResponseBody\imageLibList;
use AlibabaCloud\Tea\Model;

class DescribeImageLibResponseBody extends Model
{
    /**
     * @var imageLibList[]
     */
    public $imageLibList;

    /**
     * @example 6CF2815C-C8C7-4A01-B52E-FF6E24F53492
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'imageLibList' => 'ImageLibList',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageLibList) {
            $res['ImageLibList'] = [];
            if (null !== $this->imageLibList && \is_array($this->imageLibList)) {
                $n = 0;
                foreach ($this->imageLibList as $item) {
                    $res['ImageLibList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeImageLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageLibList'])) {
            if (!empty($map['ImageLibList'])) {
                $model->imageLibList = [];
                $n                   = 0;
                foreach ($map['ImageLibList'] as $item) {
                    $model->imageLibList[$n++] = null !== $item ? imageLibList::fromMap($item) : $item;
                }
            }
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
