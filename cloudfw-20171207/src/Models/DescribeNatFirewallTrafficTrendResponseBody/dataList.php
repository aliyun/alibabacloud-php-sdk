<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallTrafficTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $maxInBps;

    /**
     * @var int
     */
    public $maxOutBps;

    /**
     * @var int
     */
    public $maxTotalBps;

    /**
     * @var int
     */
    public $trafficTime;
    protected $_name = [
        'maxInBps' => 'MaxInBps',
        'maxOutBps' => 'MaxOutBps',
        'maxTotalBps' => 'MaxTotalBps',
        'trafficTime' => 'TrafficTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxInBps) {
            $res['MaxInBps'] = $this->maxInBps;
        }

        if (null !== $this->maxOutBps) {
            $res['MaxOutBps'] = $this->maxOutBps;
        }

        if (null !== $this->maxTotalBps) {
            $res['MaxTotalBps'] = $this->maxTotalBps;
        }

        if (null !== $this->trafficTime) {
            $res['TrafficTime'] = $this->trafficTime;
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
        if (isset($map['MaxInBps'])) {
            $model->maxInBps = $map['MaxInBps'];
        }

        if (isset($map['MaxOutBps'])) {
            $model->maxOutBps = $map['MaxOutBps'];
        }

        if (isset($map['MaxTotalBps'])) {
            $model->maxTotalBps = $map['MaxTotalBps'];
        }

        if (isset($map['TrafficTime'])) {
            $model->trafficTime = $map['TrafficTime'];
        }

        return $model;
    }
}
