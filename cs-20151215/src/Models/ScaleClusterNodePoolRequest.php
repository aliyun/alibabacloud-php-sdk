<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolRequest\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolRequest\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolRequest\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\ScaleClusterNodePoolRequest\teeConfig;
use AlibabaCloud\Tea\Model;

class ScaleClusterNodePoolRequest extends Model
{
    /**
     * @description 扩容节点数量
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
     * @description 节点池信息
     *
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @description 扩容组配置
     *
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @description 加密计算配置
     *
     * @var teeConfig
     */
    public $teeConfig;

    /**
     * @description 同步更新节点标签及污点
     *
     * @var bool
     */
    public $updateNodes;
    protected $_name = [
        'count'            => 'count',
        'kubernetesConfig' => 'kubernetes_config',
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
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->kubernetesConfig) {
            $res['kubernetes_config'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toMap() : null;
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
     * @return ScaleClusterNodePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['kubernetes_config'])) {
            $model->kubernetesConfig = kubernetesConfig::fromMap($map['kubernetes_config']);
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
