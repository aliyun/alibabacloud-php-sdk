<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description 节点创建时间。
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description 错误信息说明。
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 节点过期时间。
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description 节点主机名。
     *
     * @var string
     */
    public $hostName;

    /**
     * @description 节点使用的镜像ID。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 节点付费类型。
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description 节点实例ID。
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 节点实例名称。
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 节点实例角色类型，Master或Worker。
     *
     * @var string
     */
    public $instanceRole;

    /**
     * @description 节点实例状态，
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description 节点实例类型。
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 节点实例所属ECS实例簇名称。
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description 节点IP地址。
     *
     * @var string[]
     */
    public $ipAddress;

    /**
     * @description 节点是否为aliyun实例。
     *
     * @var bool
     */
    public $isAliyunNode;

    /**
     * @description 节点名称，该名称是k8s专用名称。
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description 节点状态，是否Ready。
     *
     * @var string
     */
    public $nodeStatus;

    /**
     * @description 节点所属的节点池ID。
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description 节点通过什么方式创建出来的，例如：ROS。
     *
     * @var string
     */
    public $source;

    /**
     * @description ECS运行状态，例如：running。
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
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
