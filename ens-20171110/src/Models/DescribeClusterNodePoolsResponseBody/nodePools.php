<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody\nodePools\kubernetesConfig;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody\nodePools\nodepoolInfo;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody\nodePools\scalingGroup;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody\nodePools\status;

class nodePools extends Model
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

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'kubernetesConfig' => 'KubernetesConfig',
        'nodepoolInfo' => 'NodepoolInfo',
        'scalingGroup' => 'ScalingGroup',
        'status' => 'Status',
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
        if (null !== $this->status) {
            $this->status->validate();
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

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
