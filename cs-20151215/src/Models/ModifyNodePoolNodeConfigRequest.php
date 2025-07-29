<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest\osConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest\rollingPolicy;
use AlibabaCloud\Tea\Model;

class ModifyNodePoolNodeConfigRequest extends Model
{
    /**
     * @description The containerd runtime configuration.
     *
     * @var ContainerdConfig
     */
    public $containerdConfig;

    /**
     * @description The kubelet configurations.
     *
     * @var KubeletConfig
     */
    public $kubeletConfig;

    /**
     * @description The OS configuration.
     *
     * @var osConfig
     */
    public $osConfig;

    /**
     * @description The rolling policy configuration.
     *
     * @var rollingPolicy
     */
    public $rollingPolicy;
    protected $_name = [
        'containerdConfig' => 'containerd_config',
        'kubeletConfig' => 'kubelet_config',
        'osConfig' => 'os_config',
        'rollingPolicy' => 'rolling_policy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerdConfig) {
            $res['containerd_config'] = null !== $this->containerdConfig ? $this->containerdConfig->toMap() : null;
        }
        if (null !== $this->kubeletConfig) {
            $res['kubelet_config'] = null !== $this->kubeletConfig ? $this->kubeletConfig->toMap() : null;
        }
        if (null !== $this->osConfig) {
            $res['os_config'] = null !== $this->osConfig ? $this->osConfig->toMap() : null;
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
        if (isset($map['containerd_config'])) {
            $model->containerdConfig = ContainerdConfig::fromMap($map['containerd_config']);
        }
        if (isset($map['kubelet_config'])) {
            $model->kubeletConfig = KubeletConfig::fromMap($map['kubelet_config']);
        }
        if (isset($map['os_config'])) {
            $model->osConfig = osConfig::fromMap($map['os_config']);
        }
        if (isset($map['rolling_policy'])) {
            $model->rollingPolicy = rollingPolicy::fromMap($map['rolling_policy']);
        }

        return $model;
    }
}
