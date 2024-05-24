<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

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
     * @description The CPU management policy of nodes in the node pool. The following policies are supported if the Kubernetes version of the cluster is 1.12.6 or later:
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
     * @description The labels that you want to add to the nodes in the cluster.
     *
     * @var Tag[]
     */
    public $labels;

    /**
     * @description A custom node name consists of a prefix, a node IP address, and a suffix.
     *
     *   The prefix and suffix can contain multiple parts that are separated by periods (.). Each part can contain lowercase letters, digits, and hyphens (-). A custom node name must start and end with a digit or lowercase letter.
     *   The node IP address in a custom node name is the private IP address of the node.
     *
     * Set the value in the customized,aliyun,ip,com format. The value consists of four parts that are separated by commas (,). customized and ip are fixed content. aliyun is the prefix and com is the suffix. Example: aliyun.192.168.xxx.xxx.com.
     * @example customized,aliyun,ip,com
     *
     * @var string
     */
    public $nodeNameMode;

    /**
     * @description The container runtime.
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
     * @description The configuration of taints.
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @description Specifies whether the nodes are schedulable after a scale-out activity is performed.
     *
     * @example true
     *
     * @var bool
     */
    public $unschedulable;

    /**
     * @description The user-defined data on nodes.
     *
     * @example dGhpcyBpcyBhIGV4YW1wbGU=
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'cmsEnabled'     => 'cms_enabled',
        'cpuPolicy'      => 'cpu_policy',
        'labels'         => 'labels',
        'nodeNameMode'   => 'node_name_mode',
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
        if (null !== $this->nodeNameMode) {
            $res['node_name_mode'] = $this->nodeNameMode;
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
        if (isset($map['node_name_mode'])) {
            $model->nodeNameMode = $map['node_name_mode'];
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
