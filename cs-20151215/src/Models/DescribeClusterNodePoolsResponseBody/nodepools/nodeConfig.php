<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig;
use AlibabaCloud\Tea\Model;

class nodeConfig extends Model
{
    /**
     * @description Kubelet参数配置。
     *
     * @var KubeletConfig
     */
    public $kubeletConfiguration;
    protected $_name = [
        'kubeletConfiguration' => 'kubelet_configuration',
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
            $model->kubeletConfiguration = KubeletConfig::fromMap($map['kubelet_configuration']);
        }

        return $model;
    }
}
