<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponseBody\ipTrafficPoints;
use AlibabaCloud\Tea\Model;

class DescribeIpTrafficResponseBody extends Model
{
    /**
     * @example 10000
     *
     * @var int
     */
    public $avgInBps;

    /**
     * @example 10000
     *
     * @var int
     */
    public $avgOutBps;

    /**
     * @var ipTrafficPoints[]
     */
    public $ipTrafficPoints;

    /**
     * @example 10000
     *
     * @var int
     */
    public $maxInBps;

    /**
     * @example 10000
     *
     * @var int
     */
    public $maxOutBps;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'avgInBps'        => 'AvgInBps',
        'avgOutBps'       => 'AvgOutBps',
        'ipTrafficPoints' => 'IpTrafficPoints',
        'maxInBps'        => 'MaxInBps',
        'maxOutBps'       => 'MaxOutBps',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgInBps) {
            $res['AvgInBps'] = $this->avgInBps;
        }
        if (null !== $this->avgOutBps) {
            $res['AvgOutBps'] = $this->avgOutBps;
        }
        if (null !== $this->ipTrafficPoints) {
            $res['IpTrafficPoints'] = [];
            if (null !== $this->ipTrafficPoints && \is_array($this->ipTrafficPoints)) {
                $n = 0;
                foreach ($this->ipTrafficPoints as $item) {
                    $res['IpTrafficPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxInBps) {
            $res['MaxInBps'] = $this->maxInBps;
        }
        if (null !== $this->maxOutBps) {
            $res['MaxOutBps'] = $this->maxOutBps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgInBps'])) {
            $model->avgInBps = $map['AvgInBps'];
        }
        if (isset($map['AvgOutBps'])) {
            $model->avgOutBps = $map['AvgOutBps'];
        }
        if (isset($map['IpTrafficPoints'])) {
            if (!empty($map['IpTrafficPoints'])) {
                $model->ipTrafficPoints = [];
                $n                      = 0;
                foreach ($map['IpTrafficPoints'] as $item) {
                    $model->ipTrafficPoints[$n++] = null !== $item ? ipTrafficPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxInBps'])) {
            $model->maxInBps = $map['MaxInBps'];
        }
        if (isset($map['MaxOutBps'])) {
            $model->maxOutBps = $map['MaxOutBps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
