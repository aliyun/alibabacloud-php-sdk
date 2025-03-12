<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class GeoCodeRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $city;
    protected $_name = [
        'address' => 'address',
        'city'    => 'city',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GeoCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        return $model;
    }
}
