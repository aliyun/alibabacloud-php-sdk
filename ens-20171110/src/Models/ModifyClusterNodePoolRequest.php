<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyClusterNodePoolRequest\kubernetesConfig;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyClusterNodePoolRequest\nodepoolInfo;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyClusterNodePoolRequest\scalingGroup;

class ModifyClusterNodePoolRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @var scalingGroup
     */
    public $scalingGroup;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'kubernetesConfig' => 'KubernetesConfig',
        'nodepoolInfo' => 'NodepoolInfo',
        'scalingGroup' => 'ScalingGroup',
    ];

    public function validate()
    {
        if (null !== $this->kubernetesConfig) {
            $this->kubernetesConfig->validate();
        }
        if (null !== $this->nodepoolInfo) {
            $this->nodepoolInfo->validate();
        }
        if (null !== $this->scalingGroup) {
            $this->scalingGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->kubernetesConfig) {
            $res['KubernetesConfig'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toArray($noStream) : $this->kubernetesConfig;
        }

        if (null !== $this->nodepoolInfo) {
            $res['NodepoolInfo'] = null !== $this->nodepoolInfo ? $this->nodepoolInfo->toArray($noStream) : $this->nodepoolInfo;
        }

        if (null !== $this->scalingGroup) {
            $res['ScalingGroup'] = null !== $this->scalingGroup ? $this->scalingGroup->toArray($noStream) : $this->scalingGroup;
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
            $model->kubernetesConfig = kubernetesConfig::fromMap($map['KubernetesConfig']);
        }

        if (isset($map['NodepoolInfo'])) {
            $model->nodepoolInfo = nodepoolInfo::fromMap($map['NodepoolInfo']);
        }

        if (isset($map['ScalingGroup'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['ScalingGroup']);
        }

        return $model;
    }
}
