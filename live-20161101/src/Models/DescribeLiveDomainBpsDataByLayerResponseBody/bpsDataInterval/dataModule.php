<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainBpsDataByLayerResponseBody\bpsDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The timestamp of the data returned.
     *
     * @example 2022-03-15T16:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total traffic. Unit: bytes.
     *
     * @example 331
     *
     * @var string
     */
    public $trafficValue;

    /**
     * @description The peak bandwidth. Unit: bit/s.
     *
     * @example 0.56
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'trafficValue' => 'TrafficValue',
        'value' => 'Value',
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
