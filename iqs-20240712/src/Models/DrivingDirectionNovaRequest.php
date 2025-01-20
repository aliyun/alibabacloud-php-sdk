<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class DrivingDirectionNovaRequest extends Model
{
    /**
     * @var string
     */
    public $carType;
    /**
     * @var string
     */
    public $destinationLatitude;
    /**
     * @var string
     */
    public $destinationLongitude;
    /**
     * @var string
     */
    public $originLatitude;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
