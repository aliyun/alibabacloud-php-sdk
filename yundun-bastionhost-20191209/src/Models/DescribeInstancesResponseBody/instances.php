<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The description of the bastion host.
     *
     * @example Test API
     *
     * @var string
     */
    public $description;

    /**
     * @description The timestamp when the bastion host expires. Unit: milliseconds.
     *
     * @example 1578326400000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The image version of the bastion host.
     *
     * @example 3.0.0
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The ID of the bastion host.
     *
     * @example bastionhost-cn-78v1gh****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the bastion host. Valid values:
     *
     *   **PENDING**: The bastion host is not initialized.
     *   **CREATING**: The bastion host is being created.
     *   **RUNNING**: The bastion host is running.
     *   **EXPIRED**: The bastion host expired.
     *   **CREATE_FAILED**: The bastion host fails to be created.
     *   **UPGRADING**: The configurations of the bastion host are being changed.
     *   **UPGRADE_FAILED**: The configurations of the bastion host fail to be changed.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The public O\&M address of the bastion host.
     *
     * @example drawvxalwb-public.bastionhost.aliyuncs.com
     *
     * @var string
     */
    public $internetEndpoint;

    /**
     * @description The private O\&M address of the bastion host.
     *
     * @example drawvxalwb.bastionhost.aliyuncs.com
     *
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @description Indicates whether the bastion host runs an earlier version. Valid values:
     *
     *   **true**: indicates that the bastion host runs V2 or V3.1.
     *   **false**:indicates that the bastion host runs V3.2.
     *
     * @example false
     *
     * @var bool
     */
    public $legacy;

    /**
     * @description The license code of the bastion host.
     *
     * @example bhah_ent_50_asset
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @description The edition of the bastion host. Valid values:
     *
     *   **cloudbastion**: Basic
     *   **cloudbastion_ha**: Enterprise
     *
     * @example cloudbastion_ha
     *
     * @var string
     */
    public $planCode;

    /**
     * @description Indicates whether the bastion host can be accessed from the Internet. Valid values:
     *
     *   **true**: The bastion host can be accessed from the Internet.
     *   **false**: The bastion host cannot be accessed from the Internet.
     *
     * @example true
     *
     * @var bool
     */
    public $publicNetworkAccess;

    /**
     * @description The region ID of the bastion host.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the bastion host belongs.
     *
     * @example g-acfm26ougi****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The timestamp when the bastion host is purchased or renewed. Unit: milliseconds.
     *
     * @example 1577681345000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the bastion host belongs.
     *
     * @example vpc-bp1c85tzgqu1bf5b****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch to which the bastion host belongs.
     *
     * @example vsw-bp1xfwzzfti0kjbf****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'description'         => 'Description',
        'expireTime'          => 'ExpireTime',
        'imageVersion'        => 'ImageVersion',
        'instanceId'          => 'InstanceId',
        'instanceStatus'      => 'InstanceStatus',
        'internetEndpoint'    => 'InternetEndpoint',
        'intranetEndpoint'    => 'IntranetEndpoint',
        'legacy'              => 'Legacy',
        'licenseCode'         => 'LicenseCode',
        'planCode'            => 'PlanCode',
        'publicNetworkAccess' => 'PublicNetworkAccess',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'startTime'           => 'StartTime',
        'vpcId'               => 'VpcId',
        'vswitchId'           => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->legacy) {
            $res['Legacy'] = $this->legacy;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->planCode) {
            $res['PlanCode'] = $this->planCode;
        }
        if (null !== $this->publicNetworkAccess) {
            $res['PublicNetworkAccess'] = $this->publicNetworkAccess;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['Legacy'])) {
            $model->legacy = $map['Legacy'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['PlanCode'])) {
            $model->planCode = $map['PlanCode'];
        }
        if (isset($map['PublicNetworkAccess'])) {
            $model->publicNetworkAccess = $map['PublicNetworkAccess'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
