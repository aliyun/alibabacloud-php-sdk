<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListAreaHotSpotMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example (22,10)
     *
     * @var string
     */
    public $coordinates;

    /**
     * @example 77010000991327001639
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 0.003
     *
     * @var string
     */
    public $intervalTime;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @example 3
     *
     * @var string
     */
    public $times;
    protected $_name = [
        'coordinates'  => 'Coordinates',
        'deviceId'     => 'DeviceId',
        'intervalTime' => 'IntervalTime',
        'personId'     => 'PersonId',
        'times'        => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->intervalTime) {
            $res['IntervalTime'] = $this->intervalTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coordinates'])) {
            $model->coordinates = $map['Coordinates'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['IntervalTime'])) {
            $model->intervalTime = $map['IntervalTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
