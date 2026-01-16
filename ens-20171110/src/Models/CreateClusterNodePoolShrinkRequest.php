<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterNodePoolShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $kubernetesConfigShrink;

    /**
     * @var string
     */
    public $nodepoolInfoShrink;

    /**
     * @var string
     */
    public $scalingGroupShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'kubernetesConfigShrink' => 'KubernetesConfig',
        'nodepoolInfoShrink' => 'NodepoolInfo',
        'scalingGroupShrink' => 'ScalingGroup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->kubernetesConfigShrink) {
            $res['KubernetesConfig'] = $this->kubernetesConfigShrink;
        }

        if (null !== $this->nodepoolInfoShrink) {
            $res['NodepoolInfo'] = $this->nodepoolInfoShrink;
        }

        if (null !== $this->scalingGroupShrink) {
            $res['ScalingGroup'] = $this->scalingGroupShrink;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['KubernetesConfig'])) {
            $model->kubernetesConfigShrink = $map['KubernetesConfig'];
        }

        if (isset($map['NodepoolInfo'])) {
            $model->nodepoolInfoShrink = $map['NodepoolInfo'];
        }

        if (isset($map['ScalingGroup'])) {
            $model->scalingGroupShrink = $map['ScalingGroup'];
        }

        return $model;
    }
}
