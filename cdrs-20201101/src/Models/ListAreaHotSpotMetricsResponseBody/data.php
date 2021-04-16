<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListAreaHotSpotMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $coordinates;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $times;

    /**
     * @var string
     */
    public $intervalTime;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'coordinates'  => 'Coordinates',
        'deviceId'     => 'DeviceId',
        'times'        => 'Times',
        'intervalTime' => 'IntervalTime',
        'personId'     => 'PersonId',
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
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->intervalTime) {
            $res['IntervalTime'] = $this->intervalTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['IntervalTime'])) {
            $model->intervalTime = $map['IntervalTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
