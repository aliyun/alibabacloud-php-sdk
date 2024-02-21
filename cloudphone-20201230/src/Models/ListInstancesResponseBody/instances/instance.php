<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstancesResponseBody\instances\instance\eipAddress;
use AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstancesResponseBody\instances\instance\tags;
use AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListInstancesResponseBody\instances\instance\vpcAttributes;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled. This parameter takes effect only for subscription instances.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The billing method of the instance.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the image was created. The time follows the ISO 8601 standard.
     *
     * @example 2021-01-01T01:07:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The instance description.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about the elastic IP address (EIP) of the instance.
     *
     * @var eipAddress
     */
    public $eipAddress;

    /**
     * @description The time when the subscription instance expires.
     *
     * @example 2021-12-21 22:00:00
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The image ID.
     *
     * @example cpm-xxxxxxxx
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The instance ID.
     *
     * @example cp-xxxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example testInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance type.
     *
     * @example ecp.ce.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the key pair for the instance.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The display name of the OS in Chinese.
     *
     * @example Android 9.0
     *
     * @var string
     */
    public $osName;

    /**
     * @description The display name of the OS in English.
     *
     * @example Android 9.0
     *
     * @var string
     */
    public $osNameEn;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resolution of the instance.
     *
     * @example 1920*1080
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The ID of the security group that the instance uses. The security group is the same as that of the Elastic Compute Service (ECS) instance that you use.
     *
     * @example sg-xxxxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The instance state. Valid values:
     *
     *   Pending: The instance is being created.
     *   Running: The instance is running.
     *   Starting: The instance is being started.
     *   Stopping: The instance is being stopped.
     *   Stopped: The instance is stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the instance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The information about the virtual private cloud (VPC) in which the instance is deployed.
     *
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @description The information about webRtcToken.
     *
     * @example eDeybrh74h34***
     *
     * @var string
     */
    public $webRtcToken;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'       => 'AutoRenew',
        'chargeType'      => 'ChargeType',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'eipAddress'      => 'EipAddress',
        'expiredTime'     => 'ExpiredTime',
        'imageId'         => 'ImageId',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'instanceType'    => 'InstanceType',
        'keyPairName'     => 'KeyPairName',
        'osName'          => 'OsName',
        'osNameEn'        => 'OsNameEn',
        'regionId'        => 'RegionId',
        'resolution'      => 'Resolution',
        'securityGroupId' => 'SecurityGroupId',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'vpcAttributes'   => 'VpcAttributes',
        'webRtcToken'     => 'WebRtcToken',
        'zoneId'          => 'ZoneId',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toMap() : null;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->osNameEn) {
            $res['OsNameEn'] = $this->osNameEn;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcAttributes) {
            $res['VpcAttributes'] = null !== $this->vpcAttributes ? $this->vpcAttributes->toMap() : null;
        }
        if (null !== $this->webRtcToken) {
            $res['WebRtcToken'] = $this->webRtcToken;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = eipAddress::fromMap($map['EipAddress']);
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['OsNameEn'])) {
            $model->osNameEn = $map['OsNameEn'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcAttributes'])) {
            $model->vpcAttributes = vpcAttributes::fromMap($map['VpcAttributes']);
        }
        if (isset($map['WebRtcToken'])) {
            $model->webRtcToken = $map['WebRtcToken'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
