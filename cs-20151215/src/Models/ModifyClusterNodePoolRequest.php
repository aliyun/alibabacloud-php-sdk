<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\management;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\nodeConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\teeConfig;
use AlibabaCloud\Tea\Model;

class ModifyClusterNodePoolRequest extends Model
{
    /**
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @var management
     */
    public $management;

    /**
     * @var nodeConfig
     */
    public $nodeConfig;

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
        'autoScaling'      => 'auto_scaling',
        'kubernetesConfig' => 'kubernetes_config',
        'management'       => 'management',
        'nodeConfig'       => 'node_config',
        'nodepoolInfo'     => 'nodepool_info',
        'scalingGroup'     => 'scaling_group',
        'teeConfig'        => 'tee_config',
        'updateNodes'      => 'update_nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScaling) {
            $res['auto_scaling'] = null !== $this->autoScaling ? $this->autoScaling->toMap() : null;
        }
        if (null !== $this->kubernetesConfig) {
            $res['kubernetes_config'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toMap() : null;
        }
        if (null !== $this->management) {
            $res['management'] = null !== $this->management ? $this->management->toMap() : null;
        }
        if (null !== $this->nodeConfig) {
            $res['node_config'] = null !== $this->nodeConfig ? $this->nodeConfig->toMap() : null;
        }
        if (null !== $this->nodepoolInfo) {
            $res['nodepool_info'] = null !== $this->nodepoolInfo ? $this->nodepoolInfo->toMap() : null;
        }
        if (null !== $this->scalingGroup) {
            $res['scaling_group'] = null !== $this->scalingGroup ? $this->scalingGroup->toMap() : null;
        }
        if (null !== $this->teeConfig) {
            $res['tee_config'] = null !== $this->teeConfig ? $this->teeConfig->toMap() : null;
        }
        if (null !== $this->updateNodes) {
            $res['update_nodes'] = $this->updateNodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterNodePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_scaling'])) {
            $model->autoScaling = autoScaling::fromMap($map['auto_scaling']);
        }
        if (isset($map['kubernetes_config'])) {
            $model->kubernetesConfig = kubernetesConfig::fromMap($map['kubernetes_config']);
        }
        if (isset($map['management'])) {
            $model->management = management::fromMap($map['management']);
        }
        if (isset($map['node_config'])) {
            $model->nodeConfig = nodeConfig::fromMap($map['node_config']);
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
