<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallTrafficTrendResponseBody\dataList;
use AlibabaCloud\Tea\Model;

class DescribeNatFirewallTrafficTrendResponseBody extends Model
{
    /**
     * @description The statistics on traffic.
     *
     * @var dataList[]
     */
    public $dataList;

    /**
     * @description The maximum inbound network throughput, which indicates the maximum number of bits that are sent inbound per second. Unit: bit/s.
     *
     * @example 18038632
     *
     * @var int
     */
    public $maxInBps;

    /**
     * @description The maximum outbound network throughput, which indicates the maximum number of bits that are sent outbound per second. Unit: bit/s.
     *
     * @example 122596487
     *
     * @var int
     */
    public $maxOutBps;

    /**
     * @description The total maximum inbound and outbound network throughput, which indicates the maximum number of bits that are sent inbound and outbound per second. Unit: bit/s.
     *
     * @example 66953194
     *
     * @var int
     */
    public $maxTotalBps;

    /**
     * @description Id of the request
     *
     * @example 87F23A3A-6F57-59C3-8237-A090D0613D71
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataList' => 'DataList',
        'maxInBps' => 'MaxInBps',
        'maxOutBps' => 'MaxOutBps',
        'maxTotalBps' => 'MaxTotalBps',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataList) {
            $res['DataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['DataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxInBps) {
            $res['MaxInBps'] = $this->maxInBps;
        }
        if (null !== $this->maxOutBps) {
            $res['MaxOutBps'] = $this->maxOutBps;
        }
        if (null !== $this->maxTotalBps) {
            $res['MaxTotalBps'] = $this->maxTotalBps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNatFirewallTrafficTrendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n = 0;
                foreach ($map['DataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxInBps'])) {
            $model->maxInBps = $map['MaxInBps'];
        }
        if (isset($map['MaxOutBps'])) {
            $model->maxOutBps = $map['MaxOutBps'];
        }
        if (isset($map['MaxTotalBps'])) {
            $model->maxTotalBps = $map['MaxTotalBps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
