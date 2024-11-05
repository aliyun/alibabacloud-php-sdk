<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute\ports;
use AlibabaCloud\Tea\Model;

class instanceAttribute extends Model
{
    /**
     * @description The IDs of authorized security groups.
     *
     * @var string[]
     */
    public $authorizedSecurityGroups;

    /**
     * @description The total bandwidth of the bastion host.
     *
     * @example 30
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The bandwidth plan ID.
     *
     * @example 5
     *
     * @var string
     */
    public $bandwidthPackage;

    /**
     * @description The status of the database O&M feature.
     *
     * @example Disable
     *
     * @var string
     */
    public $dbOperationModule;

    /**
     * @description The description of the instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the Elastic Network Interface (ENI).
     *
     * @example eni-bp1455jrzwm7moaxxxxx
     *
     * @var string
     */
    public $eniInstanceId;

    /**
     * @description The time when the instance expires.
     *
     * @example 1578326400000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the instance.
     *
     * @example bastionhost-cn-78v1ghxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   PENDING: The instance is not initialized.
     *   CREATING: The instance is being created.
     *   RUNNING: The instance is running.
     *   EXPIRED: The instance expired.
     *   CREATE_FAILED: The instance fails to be created.
     *   UPGRADING: The configurations of the instance are being changed.
     *   UPGRADE_FAILED: The configurations of the instance fail to be changed.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The public endpoint.
     *
     * @example drawvxalwb-public.bastionhost.aliyuncs.com
     *
     * @var string
     */
    public $internetEndpoint;

    /**
     * @description The private endpoint.
     *
     * @example drawvxalwb.bastionhost.aliyuncs.com
     *
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @description The license code.
     *
     * @example bhah_ent_50_asset
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @description The status of the automatic password change feature.
     *
     * - **Enable**
     * - **Disable**
     * @example Enable
     *
     * @var string
     */
    public $modifyPasswordModule;

    /**
     * @description The status of the network domain feature.
     *
     * - **Enable**
     * - **Disable**
     * @example Enable
     *
     * @var string
     */
    public $networkProxyModule;

    /**
     * @description An array that consists of the O&M ports of the bastion host.
     *
     * @var ports[]
     */
    public $ports;

    /**
     * @description An array that consists of the egress private IP addresses of the bastion host.
     *
     * @var string[]
     */
    public $privateExportIps;

    /**
     * @description The private IP addresses that are allowed to access the instance.
     *
     * @var string[]
     */
    public $privateWhiteList;

    /**
     * @description An array that consists of the egress public IP addresses of the bastion host.
     *
     * @var string[]
     */
    public $publicExportIps;

    /**
     * @description The public IP address.
     *
     * @var string[]
     */
    public $publicIps;

    /**
     * @description Indicates whether the Bastionhost instance can be accessed over the Internet.
     *
     * @example true
     *
     * @var bool
     */
    public $publicNetworkAccess;

    /**
     * @description The public IP addresses that are allowed to access the instance.
     *
     * @var string[]
     */
    public $publicWhiteList;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-aekzc427dbl2shy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IDs of the security groups to which the instance belongs.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The time when the instance started.
     *
     * @example 1577681345000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The storage capacity of the bastion host. Unit: bytes.
     *
     * @example 2199023255552
     *
     * @var int
     */
    public $storage;

    /**
     * @description The ID of the VPC to which the instance belongs.
     *
     * @example vpc-bp1c85tzgqu1bf5bxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch to which the instance connects.
     *
     * @example vsw-bp1xfwzzfti0kjbfxxxxx
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The status of the web terminal.
     *
     * - **Enable**
     * - **Disable**
     * @example Enable
     *
     * @var string
     */
    public $webTerminalModule;
    protected $_name = [
        'authorizedSecurityGroups' => 'AuthorizedSecurityGroups',
        'bandwidth'                => 'Bandwidth',
        'bandwidthPackage'         => 'BandwidthPackage',
        'dbOperationModule'        => 'DbOperationModule',
        'description'              => 'Description',
        'eniInstanceId'            => 'EniInstanceId',
        'expireTime'               => 'ExpireTime',
        'instanceId'               => 'InstanceId',
        'instanceStatus'           => 'InstanceStatus',
        'internetEndpoint'         => 'InternetEndpoint',
        'intranetEndpoint'         => 'IntranetEndpoint',
        'licenseCode'              => 'LicenseCode',
        'modifyPasswordModule'     => 'ModifyPasswordModule',
        'networkProxyModule'       => 'NetworkProxyModule',
        'ports'                    => 'Ports',
        'privateExportIps'         => 'PrivateExportIps',
        'privateWhiteList'         => 'PrivateWhiteList',
        'publicExportIps'          => 'PublicExportIps',
        'publicIps'                => 'PublicIps',
        'publicNetworkAccess'      => 'PublicNetworkAccess',
        'publicWhiteList'          => 'PublicWhiteList',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'securityGroupIds'         => 'SecurityGroupIds',
        'startTime'                => 'StartTime',
        'storage'                  => 'Storage',
        'vpcId'                    => 'VpcId',
        'vswitchId'                => 'VswitchId',
        'webTerminalModule'        => 'WebTerminalModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedSecurityGroups) {
            $res['AuthorizedSecurityGroups'] = $this->authorizedSecurityGroups;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackage) {
            $res['BandwidthPackage'] = $this->bandwidthPackage;
        }
        if (null !== $this->dbOperationModule) {
            $res['DbOperationModule'] = $this->dbOperationModule;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->modifyPasswordModule) {
            $res['ModifyPasswordModule'] = $this->modifyPasswordModule;
        }
        if (null !== $this->networkProxyModule) {
            $res['NetworkProxyModule'] = $this->networkProxyModule;
        }
        if (null !== $this->ports) {
            $res['Ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['Ports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateExportIps) {
            $res['PrivateExportIps'] = $this->privateExportIps;
        }
        if (null !== $this->privateWhiteList) {
            $res['PrivateWhiteList'] = $this->privateWhiteList;
        }
        if (null !== $this->publicExportIps) {
            $res['PublicExportIps'] = $this->publicExportIps;
        }
        if (null !== $this->publicIps) {
            $res['PublicIps'] = $this->publicIps;
        }
        if (null !== $this->publicNetworkAccess) {
            $res['PublicNetworkAccess'] = $this->publicNetworkAccess;
        }
        if (null !== $this->publicWhiteList) {
            $res['PublicWhiteList'] = $this->publicWhiteList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->webTerminalModule) {
            $res['WebTerminalModule'] = $this->webTerminalModule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedSecurityGroups'])) {
            if (!empty($map['AuthorizedSecurityGroups'])) {
                $model->authorizedSecurityGroups = $map['AuthorizedSecurityGroups'];
            }
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackage'])) {
            $model->bandwidthPackage = $map['BandwidthPackage'];
        }
        if (isset($map['DbOperationModule'])) {
            $model->dbOperationModule = $map['DbOperationModule'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
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
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['ModifyPasswordModule'])) {
            $model->modifyPasswordModule = $map['ModifyPasswordModule'];
        }
        if (isset($map['NetworkProxyModule'])) {
            $model->networkProxyModule = $map['NetworkProxyModule'];
        }
        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n            = 0;
                foreach ($map['Ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrivateExportIps'])) {
            if (!empty($map['PrivateExportIps'])) {
                $model->privateExportIps = $map['PrivateExportIps'];
            }
        }
        if (isset($map['PrivateWhiteList'])) {
            if (!empty($map['PrivateWhiteList'])) {
                $model->privateWhiteList = $map['PrivateWhiteList'];
            }
        }
        if (isset($map['PublicExportIps'])) {
            if (!empty($map['PublicExportIps'])) {
                $model->publicExportIps = $map['PublicExportIps'];
            }
        }
        if (isset($map['PublicIps'])) {
            if (!empty($map['PublicIps'])) {
                $model->publicIps = $map['PublicIps'];
            }
        }
        if (isset($map['PublicNetworkAccess'])) {
            $model->publicNetworkAccess = $map['PublicNetworkAccess'];
        }
        if (isset($map['PublicWhiteList'])) {
            if (!empty($map['PublicWhiteList'])) {
                $model->publicWhiteList = $map['PublicWhiteList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['WebTerminalModule'])) {
            $model->webTerminalModule = $map['WebTerminalModule'];
        }

        return $model;
    }
}
