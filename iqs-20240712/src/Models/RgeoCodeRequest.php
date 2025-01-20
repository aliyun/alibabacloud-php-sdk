<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Dara\Model;

class RgeoCodeRequest extends Model
{
    /**
     * @var string
     */
    public $latitude;
    /**
     * @var string
     */
    public $longitude;
    protected $_name = [
        'latitude'  => 'latitude',
        'longitude' => 'longitude',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['latitude'])) {
            $model->latitude = $map['latitude'];
        }

        if (isset($map['longitude'])) {
            $model->longitude = $map['longitude'];
        }

        return $model;
    }
}
