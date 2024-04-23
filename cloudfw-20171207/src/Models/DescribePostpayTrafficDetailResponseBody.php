<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficDetailResponseBody\trafficList;
use AlibabaCloud\Tea\Model;

class DescribePostpayTrafficDetailResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0525EADE-C112-5702-A5BC-0E2F6F94DB23
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 132
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The traffic statistics.
     *
     * @var trafficList[]
     */
    public $trafficList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
        'trafficList' => 'TrafficList',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trafficList) {
            $res['TrafficList'] = [];
            if (null !== $this->trafficList && \is_array($this->trafficList)) {
                $n = 0;
                foreach ($this->trafficList as $item) {
                    $res['TrafficList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePostpayTrafficDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrafficList'])) {
            if (!empty($map['TrafficList'])) {
                $model->trafficList = [];
                $n                  = 0;
                foreach ($map['TrafficList'] as $item) {
                    $model->trafficList[$n++] = null !== $item ? trafficList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
