<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoResponseBody\inTrafficInfo;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoResponseBody\outTrafficInfo;
use AlibabaCloud\Tea\Model;

class DescribeUserAssetIPTrafficInfoResponseBody extends Model
{
    /**
     * @description 结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 入方向流量信息
     *
     * @var inTrafficInfo
     */
    public $inTrafficInfo;

    /**
     * @description 出方向流量信息
     *
     * @var outTrafficInfo
     */
    public $outTrafficInfo;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'inTrafficInfo'  => 'InTrafficInfo',
        'outTrafficInfo' => 'OutTrafficInfo',
        'requestId'      => 'RequestId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->inTrafficInfo) {
            $res['InTrafficInfo'] = null !== $this->inTrafficInfo ? $this->inTrafficInfo->toMap() : null;
        }
        if (null !== $this->outTrafficInfo) {
            $res['OutTrafficInfo'] = null !== $this->outTrafficInfo ? $this->outTrafficInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserAssetIPTrafficInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InTrafficInfo'])) {
            $model->inTrafficInfo = inTrafficInfo::fromMap($map['InTrafficInfo']);
        }
        if (isset($map['OutTrafficInfo'])) {
            $model->outTrafficInfo = outTrafficInfo::fromMap($map['OutTrafficInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
