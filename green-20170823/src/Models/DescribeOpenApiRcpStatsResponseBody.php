<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiRcpStatsResponseBody\statList;
use AlibabaCloud\Tea\Model;

class DescribeOpenApiRcpStatsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statList[]
     */
    public $statList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'statList'   => 'StatList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statList) {
            $res['StatList'] = [];
            if (null !== $this->statList && \is_array($this->statList)) {
                $n = 0;
                foreach ($this->statList as $item) {
                    $res['StatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpenApiRcpStatsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatList'])) {
            if (!empty($map['StatList'])) {
                $model->statList = [];
                $n               = 0;
                foreach ($map['StatList'] as $item) {
                    $model->statList[$n++] = null !== $item ? statList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
