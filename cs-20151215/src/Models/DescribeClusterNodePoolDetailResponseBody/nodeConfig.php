<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig;

class nodeConfig extends Model
{
    /**
     * @var KubeletConfig
     */
    public $kubeletConfiguration;
    protected $_name = [
        'kubeletConfiguration' => 'kubelet_configuration',
    ];

    public function validate()
    {
        if (null !== $this->kubeletConfiguration) {
            $this->kubeletConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kubeletConfiguration) {
            $res['kubelet_configuration'] = null !== $this->kubeletConfiguration ? $this->kubeletConfiguration->toArray($noStream) : $this->kubeletConfiguration;
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

        return $model;
    }
}
