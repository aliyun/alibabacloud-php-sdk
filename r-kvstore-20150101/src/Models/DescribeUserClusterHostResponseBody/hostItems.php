<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeUserClusterHostResponseBody;

use AlibabaCloud\Tea\Model;

class hostItems extends Model
{
    /**
     * @var string
     */
    public $hostIP;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $hostStatus;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $hostStorage;

    /**
     * @var string
     */
    public $instanceNumber;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $hostClass;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $allocationStatus;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $hostCpu;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $hostMem;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'hostIP'           => 'HostIP',
        'expireTime'       => 'ExpireTime',
        'createTime'       => 'CreateTime',
        'hostStatus'       => 'HostStatus',
        'chargeType'       => 'ChargeType',
        'hostName'         => 'HostName',
        'hostStorage'      => 'HostStorage',
        'instanceNumber'   => 'InstanceNumber',
        'hostId'           => 'HostId',
        'hostClass'        => 'HostClass',
        'regionId'         => 'RegionId',
        'allocationStatus' => 'AllocationStatus',
        'zoneId'           => 'ZoneId',
        'hostCpu'          => 'HostCpu',
        'engine'           => 'Engine',
        'hostMem'          => 'HostMem',
        'id'               => 'Id',
        'clusterId'        => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostIP) {
            $res['HostIP'] = $this->hostIP;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostStorage) {
            $res['HostStorage'] = $this->hostStorage;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostClass) {
            $res['HostClass'] = $this->hostClass;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->hostCpu) {
            $res['HostCpu'] = $this->hostCpu;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->hostMem) {
            $res['HostMem'] = $this->hostMem;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostIP'])) {
            $model->hostIP = $map['HostIP'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostStorage'])) {
            $model->hostStorage = $map['HostStorage'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostClass'])) {
            $model->hostClass = $map['HostClass'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['HostCpu'])) {
            $model->hostCpu = $map['HostCpu'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['HostMem'])) {
            $model->hostMem = $map['HostMem'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
