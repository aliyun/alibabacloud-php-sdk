<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\SDK\CS\V20151215\Models\Taint;
use AlibabaCloud\Tea\Model;

class kubernetesConfig extends Model
{
    /**
     * @description Specifies whether to install the CloudMonitor agent on ECS nodes. After the CloudMonitor agent is installed on ECS nodes, you can view the monitoring information about the instances in the CloudMonitor console. We recommend that you install the CloudMonitor agent. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $cmsEnabled;

    /**
     * @description The CPU management policy of the nodes in the node pool. The following policies are supported if the version of the cluster is Kubernetes 1.12.6 or later:
     *
     *   `static`: allows pods with specific resource characteristics on the node to be granted enhanced CPU affinity and exclusivity.
     *   `none`: specifies that the default CPU affinity is used.
     *
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description The node labels.
     *
     * @var Tag[]
     */
    public $labels;

    /**
     * @description The name of the custom node.
     *
     * The custom node name. A custom node name consists of a prefix, an IP substring, and a suffix.
     *
     *   The prefix and suffix can contain multiple parts that are separated by periods (.). Each part can contain lowercase letters, digits, and hyphens (-). A custom node name must start and end with a digit or lowercase letter.
     *   The IP substring length specifies the number of digits to be truncated from the end of the node IP address. The IP substring length ranges from 5 to 12.
     *
     * For example, if the node IP address is 192.168.0.55, the prefix is aliyun.com, the IP substring length is 5, and the suffix is test, the node name will aliyun.com00055test.
     *
     * @example customized,test.,5,.com
     *
     * @var string
     */
    public $nodeNameMode;

    /**
     * @description The user-defined script that is executed before nodes are initialized. For more information, see [Generate user-defined data](https://help.aliyun.com/document_detail/49121.html).
     *
     * @example IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFD
     *
     * @var string
     */
    public $preUserData;

    /**
     * @description The name of the container runtime. The following types of runtime are supported by ACK:
     *
     *   containerd: containerd is the recommended runtime and supports all Kubernetes versions.
     *   Sandboxed-Container.runv: The Sandbox-Container runtime provides improved isolation and supports Kubernetes 1.31 and earlier.
     *   Docker (deprecated): supports Kubernetes 1.22 and earlier.
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
     * @description The taint. Taints can be used together with tolerations to avoid scheduling pods to specified nodes. For more information, see [taint-and-toleration](https://kubernetes.io/zh/docs/concepts/scheduling-eviction/taint-and-toleration/).
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @description Specifies whether the nodes are unschedulable after a scale-out activity is performed.
     *
     *   true: The node cannot be scheduled.
     *   false: The node can be scheduled.
     *
     * @example true
     *
     * @var bool
     */
    public $unschedulable;

    /**
     * @description The user-defined script that is executed after nodes are initialized. For more information, see [Generate user-defined data](https://help.aliyun.com/document_detail/49121.html).
     *
     * @example IyEvYmluL3NoCmVjaG8gIkhlbGxvIEFD****
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'cmsEnabled' => 'cms_enabled',
        'cpuPolicy' => 'cpu_policy',
        'labels' => 'labels',
        'nodeNameMode' => 'node_name_mode',
        'preUserData' => 'pre_user_data',
        'runtime' => 'runtime',
        'runtimeVersion' => 'runtime_version',
        'taints' => 'taints',
        'unschedulable' => 'unschedulable',
        'userData' => 'user_data',
    ];

    public function validate() {}

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
        if (null !== $this->preUserData) {
            $res['pre_user_data'] = $this->preUserData;
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
                $n = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['node_name_mode'])) {
            $model->nodeNameMode = $map['node_name_mode'];
        }
        if (isset($map['pre_user_data'])) {
            $model->preUserData = $map['pre_user_data'];
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
                $n = 0;
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
