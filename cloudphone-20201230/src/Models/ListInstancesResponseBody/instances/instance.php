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
     * @var bool
     */
    public $autoRenew;

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
    public $description;

    /**
     * @var eipAddress
     */
    public $eipAddress;

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
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $osNameEn;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @var string
     */
    public $webRtcToken;

    /**
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
