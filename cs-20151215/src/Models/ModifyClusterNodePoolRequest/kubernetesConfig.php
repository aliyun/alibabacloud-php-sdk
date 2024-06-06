<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\SDK\CS\V20151215\Models\Taint;
use AlibabaCloud\Tea\Model;

class kubernetesConfig extends Model
{
    /**
     * @description Specifies whether to install the CloudMonitor agent on ECS nodes. After the CloudMonitor agent is installed on ECS nodes, you can view monitoring information about the instances in the CloudMonitor console. We recommend that you install the CloudMonitor agent. Valid values:
     *
     *   `true`: installs the CloudMonitor agent on ECS nodes.
     *   `false`: does not install the CloudMonitor agent on ECS nodes.
     *
     * Default value: `false`.
     * @example true
     *
     * @var bool
     */
    public $cmsEnabled;

    /**
     * @description The CPU management policy of the nodes in the node pool. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later:
     *
     *   `static`: allows pods with specific resource characteristics on the node to be granted enhanced CPU affinity and exclusivity.
     *   `none`: specifies that the default CPU affinity is used.
     *
     * Default value: `none`.
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description The labels of the nodes in the node pool. You can add labels to the nodes in the cluster. You must add labels based on the following rules:
     *
     *   A tag is a case-sensitive key-value pair. You can add up to 20 tags.
     *   The key must be unique and cannot exceed 64 characters in length. The value can be empty and cannot exceed 128 characters in length. Keys and values cannot start with `aliyun`, `acs:`, `https://`, or `http://`. For more information, see [Labels and Selectors](https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/#syntax-and-character-set).
     *
     * @var Tag[]
     */
    public $labels;

    /**
     * @description The name of the container runtime.
     *
     * @example docker
     *
     * @var string
     */
    public $runtime;

    /**
     * @description The version of the container runtime.
     *
     * @example 19.03.5
     *
     * @var string
     */
    public $runtimeVersion;

    /**
     * @description The configuration of a node taint.
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @description Specifies whether the nodes are unschedulable after a scale-out activity is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $unschedulable;

    /**
     * @description The user-defined data of the node pool. For more information, see [Prepare user data](https://help.aliyun.com/document_detail/49121.html).
     *
     * @example IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFDSyEi
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'cmsEnabled'     => 'cms_enabled',
        'cpuPolicy'      => 'cpu_policy',
        'labels'         => 'labels',
        'runtime'        => 'runtime',
        'runtimeVersion' => 'runtime_version',
        'taints'         => 'taints',
        'unschedulable'  => 'unschedulable',
        'userData'       => 'user_data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmsEnabled) {
            $res['cms_enabled'] = $this->cmsEnabled;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->labels) {
            $res['labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }
        if (null !== $this->runtimeVersion) {
            $res['runtime_version'] = $this->runtimeVersion;
        }
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unschedulable) {
            $res['unschedulable'] = $this->unschedulable;
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kubernetesConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cms_enabled'])) {
            $model->cmsEnabled = $map['cms_enabled'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }
        if (isset($map['runtime_version'])) {
            $model->runtimeVersion = $map['runtime_version'];
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? Taint::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['unschedulable'])) {
            $model->unschedulable = $map['unschedulable'];
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        return $model;
    }
}
