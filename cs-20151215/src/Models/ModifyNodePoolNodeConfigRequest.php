<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest\osConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest\rollingPolicy;

class ModifyNodePoolNodeConfigRequest extends Model
{
    /**
     * @var ContainerdConfig
     */
    public $containerdConfig;

    /**
     * @var KubeletConfig
     */
    public $kubeletConfig;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var osConfig
     */
    public $osConfig;

    /**
     * @var rollingPolicy
     */
    public $rollingPolicy;
    protected $_name = [
        'containerdConfig' => 'containerd_config',
        'kubeletConfig' => 'kubelet_config',
        'nodeNames' => 'node_names',
        'osConfig' => 'os_config',
        'rollingPolicy' => 'rolling_policy',
    ];

    public function validate()
    {
        if (null !== $this->containerdConfig) {
            $this->containerdConfig->validate();
        }
        if (null !== $this->kubeletConfig) {
            $this->kubeletConfig->validate();
        }
        if (\is_array($this->nodeNames)) {
            Model::validateArray($this->nodeNames);
        }
        if (null !== $this->osConfig) {
            $this->osConfig->validate();
        }
        if (null !== $this->rollingPolicy) {
            $this->rollingPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerdConfig) {
            $res['containerd_config'] = null !== $this->containerdConfig ? $this->containerdConfig->toArray($noStream) : $this->containerdConfig;
        }

        if (null !== $this->kubeletConfig) {
            $res['kubelet_config'] = null !== $this->kubeletConfig ? $this->kubeletConfig->toArray($noStream) : $this->kubeletConfig;
        }

        if (null !== $this->nodeNames) {
            if (\is_array($this->nodeNames)) {
                $res['node_names'] = [];
                $n1 = 0;
                foreach ($this->nodeNames as $item1) {
                    $res['node_names'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->osConfig) {
            $res['os_config'] = null !== $this->osConfig ? $this->osConfig->toArray($noStream) : $this->osConfig;
        }

        if (null !== $this->rollingPolicy) {
            $res['rolling_policy'] = null !== $this->rollingPolicy ? $this->rollingPolicy->toArray($noStream) : $this->rollingPolicy;
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
        if (isset($map['containerd_config'])) {
            $model->containerdConfig = ContainerdConfig::fromMap($map['containerd_config']);
        }

        if (isset($map['kubelet_config'])) {
            $model->kubeletConfig = KubeletConfig::fromMap($map['kubelet_config']);
        }

        if (isset($map['node_names'])) {
            if (!empty($map['node_names'])) {
                $model->nodeNames = [];
                $n1 = 0;
                foreach ($map['node_names'] as $item1) {
                    $model->nodeNames[$n1] = $item1;
                    ++$n1;
                }
            }
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
