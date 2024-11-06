<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class DrivingDirectionNovaRequest extends Model
{
    /**
     * @var string
     */
    public $carType;

    /**
     * @example 43.345456
     *
     * @var string
     */
    public $destinationLatitude;

    /**
     * @example 116.46424
     *
     * @var string
     */
    public $destinationLongitude;

    /**
     * @example 39.995197
     *
     * @var string
     */
    public $originLatitude;

    /**
     * @example 116.466485
     *
     * @var string
     */
    public $originLongitude;

    /**
     * @var string
     */
    public $plate;
    protected $_name = [
        'carType'              => 'carType',
        'destinationLatitude'  => 'destinationLatitude',
        'destinationLongitude' => 'destinationLongitude',
        'originLatitude'       => 'originLatitude',
        'originLongitude'      => 'originLongitude',
        'plate'                => 'plate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carType) {
            $res['carType'] = $this->carType;
        }
        if (null !== $this->destinationLatitude) {
            $res['destinationLatitude'] = $this->destinationLatitude;
        }
        if (null !== $this->destinationLongitude) {
            $res['destinationLongitude'] = $this->destinationLongitude;
        }
        if (null !== $this->originLatitude) {
            $res['originLatitude'] = $this->originLatitude;
        }
        if (null !== $this->originLongitude) {
            $res['originLongitude'] = $this->originLongitude;
        }
        if (null !== $this->plate) {
            $res['plate'] = $this->plate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DrivingDirectionNovaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carType'])) {
            $model->carType = $map['carType'];
        }
        if (isset($map['destinationLatitude'])) {
            $model->destinationLatitude = $map['destinationLatitude'];
        }
        if (isset($map['destinationLongitude'])) {
            $model->destinationLongitude = $map['destinationLongitude'];
        }
        if (isset($map['originLatitude'])) {
            $model->originLatitude = $map['originLatitude'];
        }
        if (isset($map['originLongitude'])) {
            $model->originLongitude = $map['originLongitude'];
        }
        if (isset($map['plate'])) {
            $model->plate = $map['plate'];
        }

        return $model;
    }
}
