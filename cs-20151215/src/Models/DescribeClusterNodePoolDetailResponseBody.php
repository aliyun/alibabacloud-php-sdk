<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\autoMode;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\interconnectConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\nodeConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\status;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\teeConfig;
use AlibabaCloud\Tea\Model;

class DescribeClusterNodePoolDetailResponseBody extends Model
{
    /**
     * @var autoMode
     */
    public $autoMode;

    /**
     * @description The auto scaling configuration of the node pool.
     *
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @description Indicates whether the pods in the edge node pool can use the host network.
     *
     * `true`: sets to host network.
     *
     * `false`: sets to container network.
     *
     * @example true
     *
     * @var bool
     */
    public $hostNetwork;

    /**
     * @description The network configuration of the edge node pool. This parameter takes effect only for edge node pools.
     *
     * @var interconnectConfig
     */
    public $interconnectConfig;

    /**
     * @description The network type of the edge node pool. This parameter takes effect only if you set the type parameter of the node pool to edge. Valid values:
     *
     * `basic`: Internet.
     *
     * `private`: private network.
     *
     * @example improved
     *
     * @var string
     */
    public $interconnectMode;

    /**
     * @description Specifies whether all nodes in the edge node pool can communicate with each other at Layer 3.
     *
     * `true`: The nodes in the edge node pool can communicate with each other at Layer 3.
     *
     * `false`: The nodes in the edge node pool cannot communicate with each other at Layer 3.
     *
     * @example true
     *
     * @var bool
     */
    public $intranet;

    /**
     * @description The configurations of the cluster in which the node pool is deployed.
     *
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @description The configuration of the managed node pool feature.
     *
     * @var management
     */
    public $management;

    /**
     * @description This parameter is deprecated.
     *
     * The maximum number of nodes allowed in an edge node pool.
     *
     * @example 10
     *
     * @var int
     */
    public $maxNodes;

    /**
     * @description The node configurations.
     *
     * @var nodeConfig
     */
    public $nodeConfig;

    /**
     * @description The configuration of the node pool.
     *
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @description The configurations of the scaling group that is used by the node pool.
     *
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @description The status details about the node pool.
     *
     * @var status
     */
    public $status;

    /**
     * @description The configuration of confidential computing.
     *
     * @var teeConfig
     */
    public $teeConfig;
    protected $_name = [
        'autoMode' => 'auto_mode',
        'autoScaling' => 'auto_scaling',
        'hostNetwork' => 'host_network',
        'interconnectConfig' => 'interconnect_config',
        'interconnectMode' => 'interconnect_mode',
        'intranet' => 'intranet',
        'kubernetesConfig' => 'kubernetes_config',
        'management' => 'management',
        'maxNodes' => 'max_nodes',
        'nodeConfig' => 'node_config',
        'nodepoolInfo' => 'nodepool_info',
        'scalingGroup' => 'scaling_group',
        'status' => 'status',
        'teeConfig' => 'tee_config',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoMode) {
            $res['auto_mode'] = null !== $this->autoMode ? $this->autoMode->toMap() : null;
        }
        if (null !== $this->autoScaling) {
            $res['auto_scaling'] = null !== $this->autoScaling ? $this->autoScaling->toMap() : null;
        }
        if (null !== $this->hostNetwork) {
            $res['host_network'] = $this->hostNetwork;
        }
        if (null !== $this->interconnectConfig) {
            $res['interconnect_config'] = null !== $this->interconnectConfig ? $this->interconnectConfig->toMap() : null;
        }
        if (null !== $this->interconnectMode) {
            $res['interconnect_mode'] = $this->interconnectMode;
        }
        if (null !== $this->intranet) {
            $res['intranet'] = $this->intranet;
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
        if (null !== $this->nodeConfig) {
            $res['node_config'] = null !== $this->nodeConfig ? $this->nodeConfig->toMap() : null;
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
     * @return DescribeClusterNodePoolDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_mode'])) {
            $model->autoMode = autoMode::fromMap($map['auto_mode']);
        }
        if (isset($map['auto_scaling'])) {
            $model->autoScaling = autoScaling::fromMap($map['auto_scaling']);
        }
        if (isset($map['host_network'])) {
            $model->hostNetwork = $map['host_network'];
        }
        if (isset($map['interconnect_config'])) {
            $model->interconnectConfig = interconnectConfig::fromMap($map['interconnect_config']);
        }
        if (isset($map['interconnect_mode'])) {
            $model->interconnectMode = $map['interconnect_mode'];
        }
        if (isset($map['intranet'])) {
            $model->intranet = $map['intranet'];
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
        if (isset($map['node_config'])) {
            $model->nodeConfig = nodeConfig::fromMap($map['node_config']);
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
