<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterNodepoolRequest\rollingPolicy;
use AlibabaCloud\Tea\Model;

class UpgradeClusterNodepoolRequest extends Model
{
    /**
     * @description The ID of the OS image that is used by the nodes.
     *
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The Kubernetes version that is used by the nodes. You can call the [DescribeKubernetesVersionMetadata](https://help.aliyun.com/document_detail/2667899.html) operation to query the Kubernetes version of the cluster returned in the current_version parameter.
     *
     * @example 1.22.15-aliyun.1
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @description The nodes that you want to update. If you do not specify this parameter, all nodes in the node pool are updated by default.
     *
     * @var string[]
     */
    public $nodeNames;

    /**
     * @description The rotation configuration.
     *
     * @var rollingPolicy
     */
    public $rollingPolicy;

    /**
     * @description The runtime type. You can call the [DescribeKubernetesVersionMetadata](https://help.aliyun.com/document_detail/2667899.html) operation to query the runtime information returned in the runtime parameter.
     *
     * @example containerd
     *
     * @var string
     */
    public $runtimeType;

    /**
     * @description The version of the container runtime that is used by the nodes. You can call the [DescribeKubernetesVersionMetadata](https://help.aliyun.com/document_detail/2667899.html) operation to query the runtime version returned in the runtime parameter.
     *
     * @example 1.5.10
     *
     * @var string
     */
    public $runtimeVersion;

    /**
     * @description Specifies whether to perform the update by replacing the system disk. Valid values:
     *
     *   true: updates by replacing the system disk.
     *   false: does not update by replacing the system disk.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $useReplace;
    protected $_name = [
        'imageId' => 'image_id',
        'kubernetesVersion' => 'kubernetes_version',
        'nodeNames' => 'node_names',
        'rollingPolicy' => 'rolling_policy',
        'runtimeType' => 'runtime_type',
        'runtimeVersion' => 'runtime_version',
        'useReplace' => 'use_replace',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->kubernetesVersion) {
            $res['kubernetes_version'] = $this->kubernetesVersion;
        }
        if (null !== $this->nodeNames) {
            $res['node_names'] = $this->nodeNames;
        }
        if (null !== $this->rollingPolicy) {
            $res['rolling_policy'] = null !== $this->rollingPolicy ? $this->rollingPolicy->toMap() : null;
        }
        if (null !== $this->runtimeType) {
            $res['runtime_type'] = $this->runtimeType;
        }
        if (null !== $this->runtimeVersion) {
            $res['runtime_version'] = $this->runtimeVersion;
        }
        if (null !== $this->useReplace) {
            $res['use_replace'] = $this->useReplace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeClusterNodepoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['kubernetes_version'])) {
            $model->kubernetesVersion = $map['kubernetes_version'];
        }
        if (isset($map['node_names'])) {
            if (!empty($map['node_names'])) {
                $model->nodeNames = $map['node_names'];
            }
        }
        if (isset($map['rolling_policy'])) {
            $model->rollingPolicy = rollingPolicy::fromMap($map['rolling_policy']);
        }
        if (isset($map['runtime_type'])) {
            $model->runtimeType = $map['runtime_type'];
        }
        if (isset($map['runtime_version'])) {
            $model->runtimeVersion = $map['runtime_version'];
        }
        if (isset($map['use_replace'])) {
            $model->useReplace = $map['use_replace'];
        }

        return $model;
    }
}
