<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models;

use AlibabaCloud\Tea\Model;

class RoadTrafficStatusRequest extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @example HIGHWAY
     *
     * @var string
     */
    public $roadLevel;

    /**
     * @var string
     */
    public $roadName;
    protected $_name = [
        'city'      => 'city',
        'roadLevel' => 'roadLevel',
        'roadName'  => 'roadName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->roadLevel) {
            $res['roadLevel'] = $this->roadLevel;
        }
        if (null !== $this->roadName) {
            $res['roadName'] = $this->roadName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RoadTrafficStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['roadLevel'])) {
            $model->roadLevel = $map['roadLevel'];
        }
        if (isset($map['roadName'])) {
            $model->roadName = $map['roadName'];
        }

        return $model;
    }
}
