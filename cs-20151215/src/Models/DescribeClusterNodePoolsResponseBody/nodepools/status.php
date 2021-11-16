<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @description 失败的节点数
     *
     * @var int
     */
    public $failedNodes;

    /**
     * @description 处于健康状态的节点数
     *
     * @var int
     */
    public $healthyNodes;

    /**
     * @description 正在创建的节点数
     *
     * @var int
     */
    public $initialNodes;

    /**
     * @description 离线节点数
     *
     * @var int
     */
    public $offlineNodes;

    /**
     * @description 正在被移除的节点数
     *
     * @var int
     */
    public $removingNodes;

    /**
     * @description 正在工作节点数
     *
     * @var int
     */
    public $servingNodes;

    /**
     * @description 节点池状态
     *
     * @var string
     */
    public $state;

    /**
     * @description 节点总数
     *
     * @var int
     */
    public $totalNodes;
    protected $_name = [
        'failedNodes'   => 'failed_nodes',
        'healthyNodes'  => 'healthy_nodes',
        'initialNodes'  => 'initial_nodes',
        'offlineNodes'  => 'offline_nodes',
        'removingNodes' => 'removing_nodes',
        'servingNodes'  => 'serving_nodes',
        'state'         => 'state',
        'totalNodes'    => 'total_nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedNodes) {
            $res['failed_nodes'] = $this->failedNodes;
        }
        if (null !== $this->healthyNodes) {
            $res['healthy_nodes'] = $this->healthyNodes;
        }
        if (null !== $this->initialNodes) {
            $res['initial_nodes'] = $this->initialNodes;
        }
        if (null !== $this->offlineNodes) {
            $res['offline_nodes'] = $this->offlineNodes;
        }
        if (null !== $this->removingNodes) {
            $res['removing_nodes'] = $this->removingNodes;
        }
        if (null !== $this->servingNodes) {
            $res['serving_nodes'] = $this->servingNodes;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->totalNodes) {
            $res['total_nodes'] = $this->totalNodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return status
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failed_nodes'])) {
            $model->failedNodes = $map['failed_nodes'];
        }
        if (isset($map['healthy_nodes'])) {
            $model->healthyNodes = $map['healthy_nodes'];
        }
        if (isset($map['initial_nodes'])) {
            $model->initialNodes = $map['initial_nodes'];
        }
        if (isset($map['offline_nodes'])) {
            $model->offlineNodes = $map['offline_nodes'];
        }
        if (isset($map['removing_nodes'])) {
            $model->removingNodes = $map['removing_nodes'];
        }
        if (isset($map['serving_nodes'])) {
            $model->servingNodes = $map['serving_nodes'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['total_nodes'])) {
            $model->totalNodes = $map['total_nodes'];
        }

        return $model;
    }
}
