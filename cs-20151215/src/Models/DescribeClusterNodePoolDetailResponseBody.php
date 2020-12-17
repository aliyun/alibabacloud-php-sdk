<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\status;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\teeConfig;
use AlibabaCloud\Tea\Model;

class DescribeClusterNodePoolDetailResponseBody extends Model
{
    /**
     * @description 节点池自动伸缩信息。
     *
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @description 节点池所属集群配置。
     *
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @description 节点池详情。
     *
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @description 节点池扩容组信息。
     *
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @description 节点池状态。
     *
     * @var status
     */
    public $status;

    /**
     * @description 加密计算节点池信息。
     *
     * @var teeConfig
     */
    public $teeConfig;

    /**
     * @description 托管版节点池配置。
     *
     * @var management
     */
    public $management;
    protected $_name = [
        'autoScaling'      => 'auto_scaling',
        'kubernetesConfig' => 'kubernetes_config',
        'nodepoolInfo'     => 'nodepool_info',
        'scalingGroup'     => 'scaling_group',
        'status'           => 'status',
        'teeConfig'        => 'tee_config',
        'management'       => 'management',
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
        if (null !== $this->management) {
            $res['management'] = null !== $this->management ? $this->management->toMap() : null;
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
        if (isset($map['auto_scaling'])) {
            $model->autoScaling = autoScaling::fromMap($map['auto_scaling']);
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
        if (isset($map['status'])) {
            $model->status = status::fromMap($map['status']);
        }
        if (isset($map['tee_config'])) {
            $model->teeConfig = teeConfig::fromMap($map['tee_config']);
        }
        if (isset($map['management'])) {
            $model->management = management::fromMap($map['management']);
        }

        return $model;
    }
}
