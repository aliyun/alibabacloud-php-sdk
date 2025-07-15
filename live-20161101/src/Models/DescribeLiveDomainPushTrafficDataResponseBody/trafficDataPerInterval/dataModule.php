<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPushTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The timestamp of the data returned.
     *
     * @example 2017-12-10T20:05:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The traffic. Unit: bytes.
     *
     * @example 1288111
     *
     * @var string
     */
    public $trafficValue;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'trafficValue' => 'TrafficValue',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataModule
     */
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
