<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\autoMode;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\interconnectConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\nodeComponents;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\nodeConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\status;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\teeConfig;

class DescribeClusterNodePoolDetailResponseBody extends Model
{
    /**
     * @var autoMode
     */
    public $autoMode;

    /**
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @var bool
     */
    public $hostNetwork;

    /**
     * @var interconnectConfig
     */
    public $interconnectConfig;

    /**
     * @var string
     */
    public $interconnectMode;

    /**
     * @var bool
     */
    public $intranet;

    /**
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @var management
     */
    public $management;

    /**
     * @var int
     */
    public $maxNodes;

    /**
     * @var nodeComponents[]
     */
    public $nodeComponents;

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
     * @var status
     */
    public $status;

    /**
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
        'nodeComponents' => 'node_components',
        'nodeConfig' => 'node_config',
        'nodepoolInfo' => 'nodepool_info',
        'scalingGroup' => 'scaling_group',
        'status' => 'status',
        'teeConfig' => 'tee_config',
    ];

    public function validate()
    {
        if (null !== $this->autoMode) {
            $this->autoMode->validate();
        }
        if (null !== $this->autoScaling) {
            $this->autoScaling->validate();
        }
        if (null !== $this->interconnectConfig) {
            $this->interconnectConfig->validate();
        }
        if (null !== $this->kubernetesConfig) {
            $this->kubernetesConfig->validate();
        }
        if (null !== $this->management) {
            $this->management->validate();
        }
        if (\is_array($this->nodeComponents)) {
            Model::validateArray($this->nodeComponents);
        }
        if (null !== $this->nodeConfig) {
            $this->nodeConfig->validate();
        }
        if (null !== $this->nodepoolInfo) {
            $this->nodepoolInfo->validate();
        }
        if (null !== $this->scalingGroup) {
            $this->scalingGroup->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        if (null !== $this->teeConfig) {
            $this->teeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoMode) {
            $res['auto_mode'] = null !== $this->autoMode ? $this->autoMode->toArray($noStream) : $this->autoMode;
        }

        if (null !== $this->autoScaling) {
            $res['auto_scaling'] = null !== $this->autoScaling ? $this->autoScaling->toArray($noStream) : $this->autoScaling;
        }

        if (null !== $this->hostNetwork) {
            $res['host_network'] = $this->hostNetwork;
        }

        if (null !== $this->interconnectConfig) {
            $res['interconnect_config'] = null !== $this->interconnectConfig ? $this->interconnectConfig->toArray($noStream) : $this->interconnectConfig;
        }

        if (null !== $this->interconnectMode) {
            $res['interconnect_mode'] = $this->interconnectMode;
        }

        if (null !== $this->intranet) {
            $res['intranet'] = $this->intranet;
        }

        if (null !== $this->kubernetesConfig) {
            $res['kubernetes_config'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toArray($noStream) : $this->kubernetesConfig;
        }

        if (null !== $this->management) {
            $res['management'] = null !== $this->management ? $this->management->toArray($noStream) : $this->management;
        }

        if (null !== $this->maxNodes) {
            $res['max_nodes'] = $this->maxNodes;
        }

        if (null !== $this->nodeComponents) {
            if (\is_array($this->nodeComponents)) {
                $res['node_components'] = [];
                $n1 = 0;
                foreach ($this->nodeComponents as $item1) {
                    $res['node_components'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeConfig) {
            $res['node_config'] = null !== $this->nodeConfig ? $this->nodeConfig->toArray($noStream) : $this->nodeConfig;
        }

        if (null !== $this->nodepoolInfo) {
            $res['nodepool_info'] = null !== $this->nodepoolInfo ? $this->nodepoolInfo->toArray($noStream) : $this->nodepoolInfo;
        }

        if (null !== $this->scalingGroup) {
            $res['scaling_group'] = null !== $this->scalingGroup ? $this->scalingGroup->toArray($noStream) : $this->scalingGroup;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->teeConfig) {
            $res['tee_config'] = null !== $this->teeConfig ? $this->teeConfig->toArray($noStream) : $this->teeConfig;
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

        if (isset($map['node_components'])) {
            if (!empty($map['node_components'])) {
                $model->nodeComponents = [];
                $n1 = 0;
                foreach ($map['node_components'] as $item1) {
                    $model->nodeComponents[$n1] = nodeComponents::fromMap($item1);
                    ++$n1;
                }
            }
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
