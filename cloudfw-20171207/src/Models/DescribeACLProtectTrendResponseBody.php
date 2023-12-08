<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendResponseBody\trendList;
use AlibabaCloud\Tea\Model;

class DescribeACLProtectTrendResponseBody extends Model
{
    /**
     * @description The number of internal requests that are blocked by the ACL feature.
     *
     * @example 100
     *
     * @var int
     */
    public $inProtectCnt;

    /**
     * @description This parameter is deprecated.
     *
     * @example 0
     *
     * @var int
     */
    public $interVPCProtectCnt;

    /**
     * @description The interval for returning data. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $interval;

    /**
     * @description The number of external requests that are blocked by the ACL feature.
     *
     * @example 200
     *
     * @var int
     */
    public $outProtectCnt;

    /**
     * @description The request ID.
     *
     * @example 9063AB86-6FFA-5B2D-A16D-697C966DECA3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of requests that are blocked by the ACL feature.
     *
     * @example 300
     *
     * @var int
     */
    public $totalProtectCnt;

    /**
     * @description The statistics on the requests that are blocked by the ACL feature.
     *
     * @var trendList[]
     */
    public $trendList;
    protected $_name = [
        'inProtectCnt'       => 'InProtectCnt',
        'interVPCProtectCnt' => 'InterVPCProtectCnt',
        'interval'           => 'Interval',
        'outProtectCnt'      => 'OutProtectCnt',
        'requestId'          => 'RequestId',
        'totalProtectCnt'    => 'TotalProtectCnt',
        'trendList'          => 'TrendList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inProtectCnt) {
            $res['InProtectCnt'] = $this->inProtectCnt;
        }
        if (null !== $this->interVPCProtectCnt) {
            $res['InterVPCProtectCnt'] = $this->interVPCProtectCnt;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->outProtectCnt) {
            $res['OutProtectCnt'] = $this->outProtectCnt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalProtectCnt) {
            $res['TotalProtectCnt'] = $this->totalProtectCnt;
        }
        if (null !== $this->trendList) {
            $res['TrendList'] = [];
            if (null !== $this->trendList && \is_array($this->trendList)) {
                $n = 0;
                foreach ($this->trendList as $item) {
                    $res['TrendList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeACLProtectTrendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InProtectCnt'])) {
            $model->inProtectCnt = $map['InProtectCnt'];
        }
        if (isset($map['InterVPCProtectCnt'])) {
            $model->interVPCProtectCnt = $map['InterVPCProtectCnt'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OutProtectCnt'])) {
            $model->outProtectCnt = $map['OutProtectCnt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalProtectCnt'])) {
            $model->totalProtectCnt = $map['TotalProtectCnt'];
        }
        if (isset($map['TrendList'])) {
            if (!empty($map['TrendList'])) {
                $model->trendList = [];
                $n                = 0;
                foreach ($map['TrendList'] as $item) {
                    $model->trendList[$n++] = null !== $item ? trendList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
