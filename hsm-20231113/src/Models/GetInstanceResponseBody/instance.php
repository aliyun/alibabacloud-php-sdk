<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example cluster-w3G9vOJI2****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cluster_online
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 1699515963000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example jnta.SJJ1528-G
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 1699496389720
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example hsm-cn-g4t3jwsc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10.192.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @example false
     *
     * @var bool
     */
    public $isTrial;

    /**
     * @example true
     *
     * @var bool
     */
    public $master;

    /**
     * @example 23576634952****
     *
     * @var string
     */
    public $orderId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example hsmOnline
     *
     * @var string
     */
    public $remark;

    /**
     * @example EXPIRED
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-bp1mvfs31ltt0wyhf****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example jnta
     *
     * @var string
     */
    public $vendor;

    /**
     * @example vpc-uf69i66j9kmoko52p****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 18.68.XX.XX
     *
     * @var string
     */
    public $whitelist;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'createTime'  => 'CreateTime',
        'deviceType'  => 'DeviceType',
        'expireTime'  => 'ExpireTime',
        'instanceId'  => 'InstanceId',
        'ip'          => 'Ip',
        'isTrial'     => 'IsTrial',
        'master'      => 'Master',
        'orderId'     => 'OrderId',
        'regionId'    => 'RegionId',
        'remark'      => 'Remark',
        'status'      => 'Status',
        'vSwitchId'   => 'VSwitchId',
        'vendor'      => 'Vendor',
        'vpcId'       => 'VpcId',
        'whitelist'   => 'Whitelist',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->isTrial) {
            $res['IsTrial'] = $this->isTrial;
        }
        if (null !== $this->master) {
            $res['Master'] = $this->master;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IsTrial'])) {
            $model->isTrial = $map['IsTrial'];
        }
        if (isset($map['Master'])) {
            $model->master = $map['Master'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
