<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models\E2BVolume;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FCSandbox\V20260509\Models\E2BVolume\mountConfig\vpcConfig;

class mountConfig extends Model
{
    /**
     * @var string
     */
    public $role;

    /**
     * @var vpcConfig
     */
    public $vpcConfig;
    protected $_name = [
        'role' => 'role',
        'vpcConfig' => 'vpcConfig',
    ];

    public function validate()
    {
        if (null !== $this->vpcConfig) {
            $this->vpcConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->vpcConfig) {
            $res['vpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toArray($noStream) : $this->vpcConfig;
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
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['vpcConfig'])) {
            $model->vpcConfig = vpcConfig::fromMap($map['vpcConfig']);
        }

        return $model;
    }
}
