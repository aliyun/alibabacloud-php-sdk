<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeIpTrafficResponseBody\ipTrafficPoints;

class DescribeIpTrafficResponseBody extends Model
{
    /**
     * @var int
     */
    public $avgInBps;

    /**
     * @var int
     */
    public $avgOutBps;

    /**
     * @var ipTrafficPoints[]
     */
    public $ipTrafficPoints;

    /**
     * @var int
     */
    public $maxInBps;

    /**
     * @var int
     */
    public $maxOutBps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'avgInBps' => 'AvgInBps',
        'avgOutBps' => 'AvgOutBps',
        'ipTrafficPoints' => 'IpTrafficPoints',
        'maxInBps' => 'MaxInBps',
        'maxOutBps' => 'MaxOutBps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ipTrafficPoints)) {
            Model::validateArray($this->ipTrafficPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgInBps) {
            $res['AvgInBps'] = $this->avgInBps;
        }

        if (null !== $this->avgOutBps) {
            $res['AvgOutBps'] = $this->avgOutBps;
        }

        if (null !== $this->ipTrafficPoints) {
            if (\is_array($this->ipTrafficPoints)) {
                $res['IpTrafficPoints'] = [];
                $n1 = 0;
                foreach ($this->ipTrafficPoints as $item1) {
                    $res['IpTrafficPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['IpTrafficPoints'] as $item1) {
                    $model->ipTrafficPoints[$n1] = ipTrafficPoints::fromMap($item1);
                    ++$n1;
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
