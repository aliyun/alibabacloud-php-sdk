<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest\kubeletConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest\rollingPolicy;
use AlibabaCloud\Tea\Model;

class ModifyNodePoolNodeConfigRequest extends Model
{
    /**
     * @var kubeletConfig
     */
    public $kubeletConfig;

    /**
     * @var rollingPolicy
     */
    public $rollingPolicy;
    protected $_name = [
        'kubeletConfig' => 'kubelet_config',
        'rollingPolicy' => 'rolling_policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kubeletConfig) {
            $res['kubelet_config'] = null !== $this->kubeletConfig ? $this->kubeletConfig->toMap() : null;
        }
        if (null !== $this->rollingPolicy) {
            $res['rolling_policy'] = null !== $this->rollingPolicy ? $this->rollingPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNodePoolNodeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['kubelet_config'])) {
            $model->kubeletConfig = kubeletConfig::fromMap($map['kubelet_config']);
        }
        if (isset($map['rolling_policy'])) {
            $model->rollingPolicy = rollingPolicy::fromMap($map['rolling_policy']);
        }

        return $model;
    }
}
