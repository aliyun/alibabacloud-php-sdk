<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\management;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\teeConfig;

class ModifyClusterNodePoolRequest extends Model
{
    /**
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @var bool
     */
    public $concurrency;

    /**
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @var management
     */
    public $management;

    /**
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @var teeConfig
     */
    public $teeConfig;

    /**
     * @var bool
     */
    public $updateNodes;
    protected $_name = [
        'autoScaling' => 'auto_scaling',
        'concurrency' => 'concurrency',
        'kubernetesConfig' => 'kubernetes_config',
        'management' => 'management',
        'nodepoolInfo' => 'nodepool_info',
        'scalingGroup' => 'scaling_group',
        'teeConfig' => 'tee_config',
        'updateNodes' => 'update_nodes',
    ];

    public function validate()
    {
        if (null !== $this->autoScaling) {
            $this->autoScaling->validate();
        }
        if (null !== $this->kubernetesConfig) {
            $this->kubernetesConfig->validate();
        }
        if (null !== $this->management) {
            $this->management->validate();
        }
        if (null !== $this->nodepoolInfo) {
            $this->nodepoolInfo->validate();
        }
        if (null !== $this->scalingGroup) {
            $this->scalingGroup->validate();
        }
        if (null !== $this->teeConfig) {
            $this->teeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoScaling) {
            $res['auto_scaling'] = null !== $this->autoScaling ? $this->autoScaling->toArray($noStream) : $this->autoScaling;
        }

        if (null !== $this->concurrency) {
            $res['concurrency'] = $this->concurrency;
        }

        if (null !== $this->kubernetesConfig) {
            $res['kubernetes_config'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toArray($noStream) : $this->kubernetesConfig;
        }

        if (null !== $this->management) {
            $res['management'] = null !== $this->management ? $this->management->toArray($noStream) : $this->management;
        }

        if (null !== $this->nodepoolInfo) {
            $res['nodepool_info'] = null !== $this->nodepoolInfo ? $this->nodepoolInfo->toArray($noStream) : $this->nodepoolInfo;
        }

        if (null !== $this->scalingGroup) {
            $res['scaling_group'] = null !== $this->scalingGroup ? $this->scalingGroup->toArray($noStream) : $this->scalingGroup;
        }

        if (null !== $this->teeConfig) {
            $res['tee_config'] = null !== $this->teeConfig ? $this->teeConfig->toArray($noStream) : $this->teeConfig;
        }

        if (null !== $this->updateNodes) {
            $res['update_nodes'] = $this->updateNodes;
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
        if (isset($map['auto_scaling'])) {
            $model->autoScaling = autoScaling::fromMap($map['auto_scaling']);
        }

        if (isset($map['concurrency'])) {
            $model->concurrency = $map['concurrency'];
        }

        if (isset($map['kubernetes_config'])) {
            $model->kubernetesConfig = kubernetesConfig::fromMap($map['kubernetes_config']);
        }

        if (isset($map['management'])) {
            $model->management = management::fromMap($map['management']);
        }

        if (isset($map['nodepool_info'])) {
            $model->nodepoolInfo = nodepoolInfo::fromMap($map['nodepool_info']);
        }

        if (isset($map['scaling_group'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['scaling_group']);
        }

        if (isset($map['tee_config'])) {
            $model->teeConfig = teeConfig::fromMap($map['tee_config']);
        }

        if (isset($map['update_nodes'])) {
            $model->updateNodes = $map['update_nodes'];
        }

        return $model;
    }
}
