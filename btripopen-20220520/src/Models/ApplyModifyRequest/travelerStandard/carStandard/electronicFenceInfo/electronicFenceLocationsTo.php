<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest\travelerStandard\carStandard\electronicFenceInfo;

use AlibabaCloud\Dara\Model;

class electronicFenceLocationsTo extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var int
     */
    public $radius;
    protected $_name = [
        'address' => 'address',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'radius' => 'radius',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }

        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
        }

        if (null !== $this->radius) {
            $res['radius'] = $this->radius;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }

        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }

        if (isset($map['radius'])) {
            $model->radius = $map['radius'];
        }

        return $model;
    }
}
