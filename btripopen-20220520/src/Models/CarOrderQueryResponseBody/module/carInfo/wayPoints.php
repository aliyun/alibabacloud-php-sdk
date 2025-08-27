<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarOrderQueryResponseBody\module\carInfo;

use AlibabaCloud\Dara\Model;

class wayPoints extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;
    protected $_name = [
        'address' => 'address',
        'index' => 'index',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
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

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->latitude) {
            $res['latitude'] = $this->latitude;
        }

        if (null !== $this->longitude) {
            $res['longitude'] = $this->longitude;
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

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }

        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }

        return $model;
    }
}
