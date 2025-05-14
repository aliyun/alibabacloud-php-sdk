<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterV2UserKubeconfigRequest extends Model
{
    /**
     * @var bool
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $temporaryDurationMinutes;
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
        'temporaryDurationMinutes' => 'TemporaryDurationMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->temporaryDurationMinutes) {
            $res['TemporaryDurationMinutes'] = $this->temporaryDurationMinutes;
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
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['TemporaryDurationMinutes'])) {
            $model->temporaryDurationMinutes = $map['TemporaryDurationMinutes'];
        }

        return $model;
    }
}
