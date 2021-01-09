<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute\ports;
use AlibabaCloud\Tea\Model;

class instanceAttribute extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var string[]
     */
    public $authorizedSecurityGroups;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $privateExportIps;

    /**
     * @var string[]
     */
    public $privateWhiteList;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $eniInstanceId;

    /**
     * @var string
     */
    public $modifyPasswordModule;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string[]
     */
    public $publicExportIps;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $publicWhiteList;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var bool
     */
    public $publicNetworkAccess;

    /**
     * @var int
     */
    public $storage;
    protected $_name = [
        'vpcId'                    => 'VpcId',
        'vswitchId'                => 'VswitchId',
        'ports'                    => 'Ports',
        'authorizedSecurityGroups' => 'AuthorizedSecurityGroups',
        'description'              => 'Description',
        'privateExportIps'         => 'PrivateExportIps',
        'privateWhiteList'         => 'PrivateWhiteList',
        'expireTime'               => 'ExpireTime',
        'eniInstanceId'            => 'EniInstanceId',
        'modifyPasswordModule'     => 'ModifyPasswordModule',
        'internetEndpoint'         => 'InternetEndpoint',
        'instanceId'               => 'InstanceId',
        'securityGroupIds'         => 'SecurityGroupIds',
        'regionId'                 => 'RegionId',
        'intranetEndpoint'         => 'IntranetEndpoint',
        'publicExportIps'          => 'PublicExportIps',
        'startTime'                => 'StartTime',
        'publicWhiteList'          => 'PublicWhiteList',
        'instanceStatus'           => 'InstanceStatus',
        'licenseCode'              => 'LicenseCode',
        'publicNetworkAccess'      => 'PublicNetworkAccess',
        'storage'                  => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (null !== $this->authorizedSecurityGroups) {
            $res['AuthorizedSecurityGroups'] = $this->authorizedSecurityGroups;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->privateExportIps) {
            $res['PrivateExportIps'] = $this->privateExportIps;
        }
        if (null !== $this->privateWhiteList) {
            $res['PrivateWhiteList'] = $this->privateWhiteList;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }
        if (null !== $this->modifyPasswordModule) {
            $res['ModifyPasswordModule'] = $this->modifyPasswordModule;
        }
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->publicExportIps) {
            $res['PublicExportIps'] = $this->publicExportIps;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->publicWhiteList) {
            $res['PublicWhiteList'] = $this->publicWhiteList;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->publicNetworkAccess) {
            $res['PublicNetworkAccess'] = $this->publicNetworkAccess;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
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
        if (isset($map['AuthorizedSecurityGroups'])) {
            if (!empty($map['AuthorizedSecurityGroups'])) {
                $model->authorizedSecurityGroups = $map['AuthorizedSecurityGroups'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }
        if (isset($map['ModifyPasswordModule'])) {
            $model->modifyPasswordModule = $map['ModifyPasswordModule'];
        }
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['PublicExportIps'])) {
            if (!empty($map['PublicExportIps'])) {
                $model->publicExportIps = $map['PublicExportIps'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PublicWhiteList'])) {
            if (!empty($map['PublicWhiteList'])) {
                $model->publicWhiteList = $map['PublicWhiteList'];
            }
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['PublicNetworkAccess'])) {
            $model->publicNetworkAccess = $map['PublicNetworkAccess'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
