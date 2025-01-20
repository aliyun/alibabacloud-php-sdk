<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody\data;

use AlibabaCloud\Dara\Model;

class streetNumber extends Model
{
    /**
     * @var string
     */
    public $direction;
    /**
     * @var string
     */
    public $distanceMeter;
    /**
     * @var string
     */
    public $latitude;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
