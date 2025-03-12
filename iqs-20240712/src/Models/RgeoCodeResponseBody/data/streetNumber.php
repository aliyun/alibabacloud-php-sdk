<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody\data;

use AlibabaCloud\Tea\Model;

class streetNumber extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @example 289.832
     *
     * @var string
     */
    public $distanceMeter;

    /**
     * @example 39.986542
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 116.311943
     *
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $street;
    protected $_name = [
        'direction'     => 'direction',
        'distanceMeter' => 'distanceMeter',
        'latitude'      => 'latitude',
        'longitude'     => 'longitude',
        'number'        => 'number',
        'street'        => 'street',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->distanceMeter) {
            $res['distanceMeter'] = $this->distanceMeter;
        }
        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->street) {
            $res['street'] = $this->street;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streetNumber
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['distanceMeter'])) {
            $model->distanceMeter = $map['distanceMeter'];
        }
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }
        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }
        if (isset($map['street'])) {
            $model->street = $map['street'];
        }

        return $model;
    }
}
