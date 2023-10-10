<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The time when the node was created.
     *
     * @example 2020-08-25T11:25:35+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The error message generated when the node was created.
     *
     * @example error***
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The expiration date of the node.
     *
     * @example 2099-12-31T23:59:00+08:00
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the host.
     *
     * @example iZ2vcckdmxp7u0urj2k****
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the system image that is used by the node.
     *
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The billing method of the node. Valid values:
     *
     *   `PrePaid`: the subscription billing method. If the value is PrePaid, make sure that you have a sufficient balance or credit in your account. Otherwise, an `InvalidPayMethod` error is returned.
     *   `PostPaid`: the pay-as-you-go billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the instance.
     *
     * @example i-2vcckdmxp7u0urj2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance on which the node is deployed.
     *
     * @example worker-k8s-for-cs-c5cdf7e3938bc4f8eb0e44b21a80f****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The role of the node. Valid values:
     *
     *   Master: master node
     *   Worker: worker node
     *
     * @example Worker
     *
     * @var string
     */
    public $instanceRole;

    /**
     * @description The status of the node.
     *
     * @example Running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The type of the node.
     *
     * @example ecs.c5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ECS instance family of the node.
     *
     * @example ecs.c5
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The IP address of the node.
     *
     * @var string[]
     */
    public $ipAddress;

    /**
     * @description Indicates whether the instance on which the node is deployed is provided by Alibaba Cloud. Valid values:
     *
     *   `true`: The instance is provided by Alibaba Cloud.
     *   `false`: The instance is not provided by Alibaba Cloud.
     *
     * @example true
     *
     * @var bool
     */
    public $isAliyunNode;

    /**
     * @description The name of the node. This name is the identifier of the node in the cluster.
     *
     * @example cn-chengdu.192.168.0.36
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description Indicates whether the node is ready. Valid values:
     *
     *   `Ready`: The node is ready.
     *   `NotReady`: The node is not ready.
     *   `Unknown`: The status of the node is unknown.
     *   `Offline`: The node is offline.
     *
     * @example Ready
     *
     * @var string
     */
    public $nodeStatus;

    /**
     * @description The node pool ID.
     *
     * @example np0794239424a84eb7a95327369d56****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description Indicates how the node is initialized. A node can be manually created or created by using Resource Orchestration Service (ROS).
     *
     * @example ess_attach
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of preemptible instance. Valid values:
     *
     *   NoSpot: a non-preemptible instance.
     *   SpotWithPriceLimit: a preemptible instance that is configured with the highest bid price.
     *   SpotAsPriceGo: a preemptible instance for which the system automatically bids based on the current market price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The status of the node. Valid values:
     *
     *   `pending`: The node is being created.
     *   `running`: The node is running.
     *   `starting`: The node is being started.
     *   `stopping`: The node is being stopped.
     *   `stopped`: The node is stopped.
     *
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'creationTime'       => 'creation_time',
        'errorMessage'       => 'error_message',
        'expiredTime'        => 'expired_time',
        'hostName'           => 'host_name',
        'imageId'            => 'image_id',
        'instanceChargeType' => 'instance_charge_type',
        'instanceId'         => 'instance_id',
        'instanceName'       => 'instance_name',
        'instanceRole'       => 'instance_role',
        'instanceStatus'     => 'instance_status',
        'instanceType'       => 'instance_type',
        'instanceTypeFamily' => 'instance_type_family',
        'ipAddress'          => 'ip_address',
        'isAliyunNode'       => 'is_aliyun_node',
        'nodeName'           => 'node_name',
        'nodeStatus'         => 'node_status',
        'nodepoolId'         => 'nodepool_id',
        'source'             => 'source',
        'spotStrategy'       => 'spot_strategy',
        'state'              => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['creation_time'] = $this->creationTime;
        }
        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }
        if (null !== $this->expiredTime) {
            $res['expired_time'] = $this->expiredTime;
        }
        if (null !== $this->hostName) {
            $res['host_name'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['instance_charge_type'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }
        if (null !== $this->instanceRole) {
            $res['instance_role'] = $this->instanceRole;
        }
        if (null !== $this->instanceStatus) {
            $res['instance_status'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['instance_type'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['instance_type_family'] = $this->instanceTypeFamily;
        }
        if (null !== $this->ipAddress) {
            $res['ip_address'] = $this->ipAddress;
        }
        if (null !== $this->isAliyunNode) {
            $res['is_aliyun_node'] = $this->isAliyunNode;
        }
        if (null !== $this->nodeName) {
            $res['node_name'] = $this->nodeName;
        }
        if (null !== $this->nodeStatus) {
            $res['node_status'] = $this->nodeStatus;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->spotStrategy) {
            $res['spot_strategy'] = $this->spotStrategy;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creation_time'])) {
            $model->creationTime = $map['creation_time'];
        }
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }
        if (isset($map['expired_time'])) {
            $model->expiredTime = $map['expired_time'];
        }
        if (isset($map['host_name'])) {
            $model->hostName = $map['host_name'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['instance_charge_type'])) {
            $model->instanceChargeType = $map['instance_charge_type'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }
        if (isset($map['instance_role'])) {
            $model->instanceRole = $map['instance_role'];
        }
        if (isset($map['instance_status'])) {
            $model->instanceStatus = $map['instance_status'];
        }
        if (isset($map['instance_type'])) {
            $model->instanceType = $map['instance_type'];
        }
        if (isset($map['instance_type_family'])) {
            $model->instanceTypeFamily = $map['instance_type_family'];
        }
        if (isset($map['ip_address'])) {
            if (!empty($map['ip_address'])) {
                $model->ipAddress = $map['ip_address'];
            }
        }
        if (isset($map['is_aliyun_node'])) {
            $model->isAliyunNode = $map['is_aliyun_node'];
        }
        if (isset($map['node_name'])) {
            $model->nodeName = $map['node_name'];
        }
        if (isset($map['node_status'])) {
            $model->nodeStatus = $map['node_status'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['spot_strategy'])) {
            $model->spotStrategy = $map['spot_strategy'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
