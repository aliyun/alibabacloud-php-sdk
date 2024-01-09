<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoscalingConfigRequest extends Model
{
    /**
     * @description The waiting time before the auto scaling feature performs a scale-in activity. Only if the resource usage on a node remains below the scale-in threshold within the waiting time, the node is removed after the waiting time ends. Unit: minutes.
     *
     * @example 10 m
     *
     * @var string
     */
    public $coolDownDuration;

    /**
     * @description Specifies whether to evict DaemonSet pods during scale-in activities. Valid values:
     *
     *   `true`: evicts DaemonSet pods.
     *   `false`: does not evict DaemonSet pods.
     *
     * @example false
     *
     * @var bool
     */
    public $daemonsetEvictionForNodes;

    /**
     * @description The node pool scale-out policy. Valid values:
     *
     *   `least-waste`: the default policy. If multiple node pools meet the requirement, this policy selects the node pool that will have the least idle resources after the scale-out activity is completed.
     *   `random`: the random policy. If multiple node pools meet the requirement, this policy selects a random node pool for the scale-out activity.
     *   `priority`: the priority-based policy If multiple node pools meet the requirement, this policy selects the node pool with the highest priority for the scale-out activity. The priority setting is stored in the ConfigMap named `cluster-autoscaler-priority-expander` in the kube-system namespace. When a scale-out activity is triggered, the policy obtains the node pool priorities from the ConfigMap based on the node pool IDs and then selects the node pool with the highest priority for the scale-out activity.
     *
     * @example least-waste
     *
     * @var string
     */
    public $expander;

    /**
     * @description The scale-in threshold of GPU utilization. This threshold specifies the ratio of the GPU resources that are requested by pods to the total GPU resources on the node.
     *
     * @example 0.5
     *
     * @var string
     */
    public $gpuUtilizationThreshold;

    /**
     * @description The maximum amount of time that the cluster autoscaler waits for pods on the nodes to terminate during scale-in activities. Unit: seconds.
     *
     * @example 14400s
     *
     * @var int
     */
    public $maxGracefulTerminationSec;

    /**
     * @description The minimum number of pods that must be guaranteed during scale-in activities.
     *
     * @example 0
     *
     * @var int
     */
    public $minReplicaCount;

    /**
     * @description Specifies whether to delete the corresponding Kubernetes node objects after nodes are removed in swift mode.
     *
     * @example false
     *
     * @var bool
     */
    public $recycleNodeDeletionEnabled;

    /**
     * @description Specifies whether to allow node scale-in activities. Valid values:
     *
     *   `true`: allows node scale-in activities.
     *   `false`: does not allow node scale-in activities.
     *
     * @example true
     *
     * @var bool
     */
    public $scaleDownEnabled;

    /**
     * @description Specifies whether the cluster autoscaler performs scale-out activities when the number of ready nodes in the cluster is zero.
     *
     * @example true
     *
     * @var bool
     */
    public $scaleUpFromZero;

    /**
     * @description The interval at which the cluster is scanned and evaluated for scaling. Unit: seconds.
     *
     * @example 30s
     *
     * @var string
     */
    public $scanInterval;

    /**
     * @description Specifies whether to allow the cluster autoscaler to scale in nodes that host pods mounted with local storage, such as EmptyDir volumes or HostPath volumes. Valid values:
     *
     *   `true`: does not allow the cluster autoscaler to scale in these nodes.
     *   `false`: allows the cluster autoscaler to scale in these nodes.
     *
     * @example false
     *
     * @var bool
     */
    public $skipNodesWithLocalStorage;

    /**
     * @description Specifies whether to allow the cluster autoscaler to scale in nodes that host pods in the kube-system namespace, excluding DaemonSet pods and mirror pods. Valid values:
     *
     *   `true`: does not allow the cluster autoscaler to scale in these nodes.
     *   `false`: allows the cluster autoscaler to scale in these nodes.
     *
     * @example true
     *
     * @var bool
     */
    public $skipNodesWithSystemPods;

    /**
     * @description The cooldown period. Newly added nodes can be removed in scale-in activities only after the cooldown period ends. Unit: minutes.
     *
     * @example 10 m
     *
     * @var string
     */
    public $unneededDuration;

    /**
     * @description The scale-in threshold. This threshold specifies the ratio of the resources that are requested by pods to the total resources on the node.
     *
     * @example 0.5
     *
     * @var string
     */
    public $utilizationThreshold;
    protected $_name = [
        'coolDownDuration'           => 'cool_down_duration',
        'daemonsetEvictionForNodes'  => 'daemonset_eviction_for_nodes',
        'expander'                   => 'expander',
        'gpuUtilizationThreshold'    => 'gpu_utilization_threshold',
        'maxGracefulTerminationSec'  => 'max_graceful_termination_sec',
        'minReplicaCount'            => 'min_replica_count',
        'recycleNodeDeletionEnabled' => 'recycle_node_deletion_enabled',
        'scaleDownEnabled'           => 'scale_down_enabled',
        'scaleUpFromZero'            => 'scale_up_from_zero',
        'scanInterval'               => 'scan_interval',
        'skipNodesWithLocalStorage'  => 'skip_nodes_with_local_storage',
        'skipNodesWithSystemPods'    => 'skip_nodes_with_system_pods',
        'unneededDuration'           => 'unneeded_duration',
        'utilizationThreshold'       => 'utilization_threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coolDownDuration) {
            $res['cool_down_duration'] = $this->coolDownDuration;
        }
        if (null !== $this->daemonsetEvictionForNodes) {
            $res['daemonset_eviction_for_nodes'] = $this->daemonsetEvictionForNodes;
        }
        if (null !== $this->expander) {
            $res['expander'] = $this->expander;
        }
        if (null !== $this->gpuUtilizationThreshold) {
            $res['gpu_utilization_threshold'] = $this->gpuUtilizationThreshold;
        }
        if (null !== $this->maxGracefulTerminationSec) {
            $res['max_graceful_termination_sec'] = $this->maxGracefulTerminationSec;
        }
        if (null !== $this->minReplicaCount) {
            $res['min_replica_count'] = $this->minReplicaCount;
        }
        if (null !== $this->recycleNodeDeletionEnabled) {
            $res['recycle_node_deletion_enabled'] = $this->recycleNodeDeletionEnabled;
        }
        if (null !== $this->scaleDownEnabled) {
            $res['scale_down_enabled'] = $this->scaleDownEnabled;
        }
        if (null !== $this->scaleUpFromZero) {
            $res['scale_up_from_zero'] = $this->scaleUpFromZero;
        }
        if (null !== $this->scanInterval) {
            $res['scan_interval'] = $this->scanInterval;
        }
        if (null !== $this->skipNodesWithLocalStorage) {
            $res['skip_nodes_with_local_storage'] = $this->skipNodesWithLocalStorage;
        }
        if (null !== $this->skipNodesWithSystemPods) {
            $res['skip_nodes_with_system_pods'] = $this->skipNodesWithSystemPods;
        }
        if (null !== $this->unneededDuration) {
            $res['unneeded_duration'] = $this->unneededDuration;
        }
        if (null !== $this->utilizationThreshold) {
            $res['utilization_threshold'] = $this->utilizationThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoscalingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cool_down_duration'])) {
            $model->coolDownDuration = $map['cool_down_duration'];
        }
        if (isset($map['daemonset_eviction_for_nodes'])) {
            $model->daemonsetEvictionForNodes = $map['daemonset_eviction_for_nodes'];
        }
        if (isset($map['expander'])) {
            $model->expander = $map['expander'];
        }
        if (isset($map['gpu_utilization_threshold'])) {
            $model->gpuUtilizationThreshold = $map['gpu_utilization_threshold'];
        }
        if (isset($map['max_graceful_termination_sec'])) {
            $model->maxGracefulTerminationSec = $map['max_graceful_termination_sec'];
        }
        if (isset($map['min_replica_count'])) {
            $model->minReplicaCount = $map['min_replica_count'];
        }
        if (isset($map['recycle_node_deletion_enabled'])) {
            $model->recycleNodeDeletionEnabled = $map['recycle_node_deletion_enabled'];
        }
        if (isset($map['scale_down_enabled'])) {
            $model->scaleDownEnabled = $map['scale_down_enabled'];
        }
        if (isset($map['scale_up_from_zero'])) {
            $model->scaleUpFromZero = $map['scale_up_from_zero'];
        }
        if (isset($map['scan_interval'])) {
            $model->scanInterval = $map['scan_interval'];
        }
        if (isset($map['skip_nodes_with_local_storage'])) {
            $model->skipNodesWithLocalStorage = $map['skip_nodes_with_local_storage'];
        }
        if (isset($map['skip_nodes_with_system_pods'])) {
            $model->skipNodesWithSystemPods = $map['skip_nodes_with_system_pods'];
        }
        if (isset($map['unneeded_duration'])) {
            $model->unneededDuration = $map['unneeded_duration'];
        }
        if (isset($map['utilization_threshold'])) {
            $model->utilizationThreshold = $map['utilization_threshold'];
        }

        return $model;
    }
}
