<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\nodeConfig\kubeletConfiguration;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\nodeConfig\rolloutPolicy;
use AlibabaCloud\Tea\Model;

class nodeConfig extends Model
{
    /**
     * @var kubeletConfiguration
     */
    public $kubeletConfiguration;

    /**
     * @var rolloutPolicy
     */
    public $rolloutPolicy;
    protected $_name = [
        'kubeletConfiguration' => 'kubelet_configuration',
        'rolloutPolicy'        => 'rollout_policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kubeletConfiguration) {
            $res['kubelet_configuration'] = null !== $this->kubeletConfiguration ? $this->kubeletConfiguration->toMap() : null;
        }
        if (null !== $this->rolloutPolicy) {
            $res['rollout_policy'] = null !== $this->rolloutPolicy ? $this->rolloutPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['kubelet_configuration'])) {
            $model->kubeletConfiguration = kubeletConfiguration::fromMap($map['kubelet_configuration']);
        }
        if (isset($map['rollout_policy'])) {
            $model->rolloutPolicy = rolloutPolicy::fromMap($map['rollout_policy']);
        }

        return $model;
    }
}
