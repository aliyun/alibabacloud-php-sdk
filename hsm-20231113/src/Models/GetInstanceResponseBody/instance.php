<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $certification;

    /**
     * @var string
     */
    public $certificationUrl;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var bool
     */
    public $isTrial;

    /**
     * @var bool
     */
    public $master;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $pqcEnabled;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantIsolationType;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $whitelist;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'certification' => 'Certification',
        'certificationUrl' => 'CertificationUrl',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'createTime' => 'CreateTime',
        'deviceType' => 'DeviceType',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'isTrial' => 'IsTrial',
        'master' => 'Master',
        'orderId' => 'OrderId',
        'pqcEnabled' => 'PqcEnabled',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'status' => 'Status',
        'tenantIsolationType' => 'TenantIsolationType',
        'vSwitchId' => 'VSwitchId',
        'vendor' => 'Vendor',
        'vpcId' => 'VpcId',
        'whitelist' => 'Whitelist',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certification) {
            $res['Certification'] = $this->certification;
        }

        if (null !== $this->certificationUrl) {
            $res['CertificationUrl'] = $this->certificationUrl;
        }

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

        if (null !== $this->pqcEnabled) {
            $res['PqcEnabled'] = $this->pqcEnabled;
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

        if (null !== $this->tenantIsolationType) {
            $res['TenantIsolationType'] = $this->tenantIsolationType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certification'])) {
            $model->certification = $map['Certification'];
        }

        if (isset($map['CertificationUrl'])) {
            $model->certificationUrl = $map['CertificationUrl'];
        }

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

        if (isset($map['PqcEnabled'])) {
            $model->pqcEnabled = $map['PqcEnabled'];
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

        if (isset($map['TenantIsolationType'])) {
            $model->tenantIsolationType = $map['TenantIsolationType'];
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
