<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Node extends Model
{
    /**
     * @description 节点是否自动续费。
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description 节点自动续费时长。
     *
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description 节点自动续费时长单位。
     *
     * @example Month
     *
     * @var string
     */
    public $autoRenewDurationUnit;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @description 节点过期时间。
     *
     * @example 1603728394857
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description 实例类型。
     *
     * @example ecs.g6e.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 运维模式状态。取值范围：
     * 为空表示处于非运维模式。
     * @var string
     */
    public $maintenanceStatus;

    /**
     * @description 节点组ID。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 节点组类型。
     *
     * @example CORE
     *
     * @var string
     */
    public $nodeGroupType;

    /**
     * @description 节点ID。
     *
     * @example i-bp1cudc25w2bfwl5****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 节点名称。
     *
     * @example core1-1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description 节点状态。取值范围：
     * - Terminated：已终止。
     * @example Running
     *
     * @var string
     */
    public $nodeState;

    /**
     * @description 私网IP。
     *
     * @example 10.10.10.1
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description 公网IP。
     *
     * @example 42.120.75.***
     *
     * @var string
     */
    public $publicIp;

    /**
     * @description 可用区ID。
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'autoRenewDuration'     => 'AutoRenewDuration',
        'autoRenewDurationUnit' => 'AutoRenewDurationUnit',
        'createTime'            => 'CreateTime',
        'expireTime'            => 'ExpireTime',
        'instanceType'          => 'InstanceType',
        'maintenanceStatus'     => 'MaintenanceStatus',
        'nodeGroupId'           => 'NodeGroupId',
        'nodeGroupType'         => 'NodeGroupType',
        'nodeId'                => 'NodeId',
        'nodeName'              => 'NodeName',
        'nodeState'             => 'NodeState',
        'privateIp'             => 'PrivateIp',
        'publicIp'              => 'PublicIp',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->autoRenewDurationUnit) {
            $res['AutoRenewDurationUnit'] = $this->autoRenewDurationUnit;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maintenanceStatus) {
            $res['MaintenanceStatus'] = $this->maintenanceStatus;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeGroupType) {
            $res['NodeGroupType'] = $this->nodeGroupType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeState) {
            $res['NodeState'] = $this->nodeState;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['AutoRenewDurationUnit'])) {
            $model->autoRenewDurationUnit = $map['AutoRenewDurationUnit'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaintenanceStatus'])) {
            $model->maintenanceStatus = $map['MaintenanceStatus'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeGroupType'])) {
            $model->nodeGroupType = $map['NodeGroupType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeState'])) {
            $model->nodeState = $map['NodeState'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
