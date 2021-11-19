<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\interconnectConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\management;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\status;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\teeConfig;
use AlibabaCloud\Tea\Model;

class nodepools extends Model
{
    /**
     * @description 自动伸缩配置详情
     *
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @description 边缘节点池网络相关的配置。该值只对edge类型的节点池有意义
     *
     * @var interconnectConfig
     */
    public $interconnectConfig;

    /**
     * @description 边缘节点池的网络类型。basic：基础型；improved：增强型。该值只对edge类型的节点池有意义
     *
     * @var string
     */
    public $interconnectMode;

    /**
     * @description 集群配置信息
     *
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @description 托管节点池配置
     *
     * @var management
     */
    public $management;

    /**
     * @description 边缘节点池允许容纳的最大节点数量. 节点池内可以容纳的最大节点数量，该参数大于等于0。0表示无额外限制(仅受限于集群整体可以容纳的节点数，节点池本身无额外限制)。边缘节点池该参数值往往大于0；ess类型节点池和默认的edge类型节点池该参数值为0
     *
     * @var int
     */
    public $maxNodes;

    /**
     * @description 节点池配置详情
     *
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @description 扩容组配置详情
     *
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @description 节点池状态详情
     *
     * @var status
     */
    public $status;

    /**
     * @description 加密计算配置详情
     *
     * @var teeConfig
     */
    public $teeConfig;
    protected $_name = [
        'autoScaling'        => 'auto_scaling',
        'interconnectConfig' => 'interconnect_config',
        'interconnectMode'   => 'interconnect_mode',
        'kubernetesConfig'   => 'kubernetes_config',
        'management'         => 'management',
        'maxNodes'           => 'max_nodes',
        'nodepoolInfo'       => 'nodepool_info',
        'scalingGroup'       => 'scaling_group',
        'status'             => 'status',
        'teeConfig'          => 'tee_config',
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
        if (null !== $this->interconnectConfig) {
            $res['interconnect_config'] = null !== $this->interconnectConfig ? $this->interconnectConfig->toMap() : null;
        }
        if (null !== $this->interconnectMode) {
            $res['interconnect_mode'] = $this->interconnectMode;
        }
        if (null !== $this->kubernetesConfig) {
            $res['kubernetes_config'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toMap() : null;
        }
        if (null !== $this->management) {
            $res['management'] = null !== $this->management ? $this->management->toMap() : null;
        }
        if (null !== $this->maxNodes) {
            $res['max_nodes'] = $this->maxNodes;
        }
        if (null !== $this->nodepoolInfo) {
            $res['nodepool_info'] = null !== $this->nodepoolInfo ? $this->nodepoolInfo->toMap() : null;
        }
        if (null !== $this->scalingGroup) {
            $res['scaling_group'] = null !== $this->scalingGroup ? $this->scalingGroup->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->teeConfig) {
            $res['tee_config'] = null !== $this->teeConfig ? $this->teeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodepools
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_scaling'])) {
            $model->autoScaling = autoScaling::fromMap($map['auto_scaling']);
        }
        if (isset($map['interconnect_config'])) {
            $model->interconnectConfig = interconnectConfig::fromMap($map['interconnect_config']);
        }
        if (isset($map['interconnect_mode'])) {
            $model->interconnectMode = $map['interconnect_mode'];
        }
        if (isset($map['kubernetes_config'])) {
            $model->kubernetesConfig = kubernetesConfig::fromMap($map['kubernetes_config']);
        }
        if (isset($map['management'])) {
            $model->management = management::fromMap($map['management']);
        }
        if (isset($map['max_nodes'])) {
            $model->maxNodes = $map['max_nodes'];
        }
        if (isset($map['nodepool_info'])) {
            $model->nodepoolInfo = nodepoolInfo::fromMap($map['nodepool_info']);
        }
        if (isset($map['scaling_group'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['scaling_group']);
        }
        if (isset($map['status'])) {
            $model->status = status::fromMap($map['status']);
        }
        if (isset($map['tee_config'])) {
            $model->teeConfig = teeConfig::fromMap($map['tee_config']);
        }

        return $model;
    }
}
