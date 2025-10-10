<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\nodeConfig\nodeOsConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig;

class nodeConfig extends Model
{
    /**
     * @var KubeletConfig
     */
    public $kubeletConfiguration;

    /**
     * @var nodeOsConfig
     */
    public $nodeOsConfig;
    protected $_name = [
        'kubeletConfiguration' => 'kubelet_configuration',
        'nodeOsConfig' => 'node_os_config',
    ];

    public function validate()
    {
        if (null !== $this->kubeletConfiguration) {
            $this->kubeletConfiguration->validate();
        }
        if (null !== $this->nodeOsConfig) {
            $this->nodeOsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kubeletConfiguration) {
            $res['kubelet_configuration'] = null !== $this->kubeletConfiguration ? $this->kubeletConfiguration->toArray($noStream) : $this->kubeletConfiguration;
        }

        if (null !== $this->nodeOsConfig) {
            $res['node_os_config'] = null !== $this->nodeOsConfig ? $this->nodeOsConfig->toArray($noStream) : $this->nodeOsConfig;
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
        if (isset($map['kubelet_configuration'])) {
            $model->kubeletConfiguration = KubeletConfig::fromMap($map['kubelet_configuration']);
        }

        if (isset($map['node_os_config'])) {
            $model->nodeOsConfig = nodeOsConfig::fromMap($map['node_os_config']);
        }

        return $model;
    }
}
