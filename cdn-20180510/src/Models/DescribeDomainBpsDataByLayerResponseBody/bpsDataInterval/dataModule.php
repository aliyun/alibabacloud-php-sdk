<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainBpsDataByLayerResponseBody\bpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 2020-05-06T07:10:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 2838
     *
     * @var string
     */
    public $trafficValue;

    /**
     * @example 75.68
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'timeStamp'    => 'TimeStamp',
        'trafficValue' => 'TrafficValue',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
