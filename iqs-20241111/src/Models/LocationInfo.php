<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class LocationInfo extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'city' => 'city',
        'ip' => 'ip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
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
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        return $model;
    }
}
