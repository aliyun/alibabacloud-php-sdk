<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoscalingConfigRequest extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $coolDownDuration;

    /**
     * @example false
     *
     * @var bool
     */
    public $daemonsetEvictionForNodes;

    /**
     * @example least-waste
     *
     * @var string
     */
    public $expander;

    /**
     * @example 0.5
     *
     * @var string
     */
    public $gpuUtilizationThreshold;

    /**
     * @example 14400
     *
     * @var int
     */
    public $maxGracefulTerminationSec;

    /**
     * @example 0
     *
     * @var int
     */
    public $minReplicaCount;

    /**
     * @example false
     *
     * @var bool
     */
    public $recycleNodeDeletionEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $scaleDownEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $scaleUpFromZero;

    /**
     * @example 30
     *
     * @var string
     */
    public $scanInterval;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipNodesWithLocalStorage;

    /**
     * @example true
     *
     * @var bool
     */
    public $skipNodesWithSystemPods;

    /**
     * @example 10
     *
     * @var string
     */
    public $unneededDuration;

    /**
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
