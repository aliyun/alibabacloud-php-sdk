<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $trafficValue;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'trafficValue' => 'TrafficValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }

        return $model;
    }
}
