<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\teeConfig;
use AlibabaCloud\Tea\Model;

class CreateClusterNodePoolRequest extends Model
{
    /**
     * @description 自动伸缩节点池配置。
     *
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @description 节点数量。
     *
     * @var int
     */
    public $count;

    /**
     * @description 集群配置
     *
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @description 托管节点池配置。
     *
     * @var management
     */
    public $management;

    /**
     * @description 节点池配置
     *
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @description 伸缩组配置
     *
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @description 加密计算节点池配置。
     *
     * @var teeConfig
     */
    public $teeConfig;
    protected $_name = [
        'autoScaling'      => 'auto_scaling',
        'count'            => 'count',
        'kubernetesConfig' => 'kubernetes_config',
        'management'       => 'management',
        'nodepoolInfo'     => 'nodepool_info',
        'scalingGroup'     => 'scaling_group',
        'teeConfig'        => 'tee_config',
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
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->kubernetesConfig) {
            $res['kubernetes_config'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toMap() : null;
        }
        if (null !== $this->management) {
            $res['management'] = null !== $this->management ? $this->management->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterNodePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_scaling'])) {
            $model->autoScaling = autoScaling::fromMap($map['auto_scaling']);
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
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

        return $model;
    }
}
