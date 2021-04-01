<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponse\ipTrafficPoints;
use AlibabaCloud\Tea\Model;

class DescribeIpTrafficResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxInBps;

    /**
     * @var int
     */
    public $avgInBps;

    /**
     * @var int
     */
    public $maxOutBps;

    /**
     * @var int
     */
    public $avgOutBps;

    /**
     * @var ipTrafficPoints[]
     */
    public $ipTrafficPoints;
    protected $_name = [
        'requestId'       => 'RequestId',
        'maxInBps'        => 'MaxInBps',
        'avgInBps'        => 'AvgInBps',
        'maxOutBps'       => 'MaxOutBps',
        'avgOutBps'       => 'AvgOutBps',
        'ipTrafficPoints' => 'IpTrafficPoints',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('maxInBps', $this->maxInBps, true);
        Model::validateRequired('avgInBps', $this->avgInBps, true);
        Model::validateRequired('maxOutBps', $this->maxOutBps, true);
        Model::validateRequired('avgOutBps', $this->avgOutBps, true);
        Model::validateRequired('ipTrafficPoints', $this->ipTrafficPoints, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxInBps) {
            $res['MaxInBps'] = $this->maxInBps;
        }
        if (null !== $this->avgInBps) {
            $res['AvgInBps'] = $this->avgInBps;
        }
        if (null !== $this->maxOutBps) {
            $res['MaxOutBps'] = $this->maxOutBps;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpTrafficResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxInBps'])) {
            $model->maxInBps = $map['MaxInBps'];
        }
        if (isset($map['AvgInBps'])) {
            $model->avgInBps = $map['AvgInBps'];
        }
        if (isset($map['MaxOutBps'])) {
            $model->maxOutBps = $map['MaxOutBps'];
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

        return $model;
    }
}
