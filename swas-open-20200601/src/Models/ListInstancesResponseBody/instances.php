<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ddosStatus;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $innerIpAddress;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'businessStatus'  => 'BusinessStatus',
        'chargeType'      => 'ChargeType',
        'creationTime'    => 'CreationTime',
        'ddosStatus'      => 'DdosStatus',
        'expiredTime'     => 'ExpiredTime',
        'imageId'         => 'ImageId',
        'innerIpAddress'  => 'InnerIpAddress',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'planId'          => 'PlanId',
        'publicIpAddress' => 'PublicIpAddress',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = $map['InnerIpAddress'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
