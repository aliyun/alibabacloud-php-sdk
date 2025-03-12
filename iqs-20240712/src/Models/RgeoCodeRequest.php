<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class RgeoCodeRequest extends Model
{
    /**
     * @example 39.989027
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 116.310918
     *
     * @var string
     */
    public $longitude;
    protected $_name = [
        'latitude'  => 'latitude',
        'longitude' => 'longitude',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RgeoCodeRequest
     */
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
