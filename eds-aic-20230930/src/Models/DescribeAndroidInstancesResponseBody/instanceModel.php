<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\appManagePolicy;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\bizTags;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\disks;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\displayConfig;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\phoneDataInfo;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\tags;
use AlibabaCloud\Tea\Model;

class instanceModel extends Model
{
    /**
     * @description The ID of the instance group.
     *
     * @example ag-ayyhomlal7po****
     *
     * @var string
     */
    public $androidInstanceGroupId;

    /**
     * @description The name of the instance group.
     *
     * @example AndroidInstanceGroupName
     *
     * @var string
     */
    public $androidInstanceGroupName;

    /**
     * @description The ID of the instance.
     *
     * @example acp-8at8h6ejkadjh****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @description The name of the instance.
     *
     * @example name
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @description The state of the instance.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $androidInstanceStatus;

    /**
     * @description The ID of the delivery group.
     *
     * @example aig-i7yv6tkn7kh8dv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the physical instance.
     *
     * @example ai-9ey6io0q58rcd****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @var appManagePolicy
     */
    public $appManagePolicy;

    /**
     * @description The ID of the user to whom the instance is assigned.
     *
     * @example test
     *
     * @var string
     */
    public $authorizedUserId;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $bandwidthPackageType;

    /**
     * @description The ID of the bound user.
     *
     * @example test
     *
     * @var string
     */
    public $bindUserId;

    /**
     * @var bizTags[]
     */
    public $bizTags;

    /**
     * @description The billing method of the instance.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of vCPUs.
     *
     * @example 4
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The disks.
     *
     * @var disks[]
     */
    public $disks;

    /**
     * @var displayConfig
     */
    public $displayConfig;

    /**
     * @var int
     */
    public $downBandwidthLimit;

    /**
     * @description The cause of the instance data backup failure or restoration failure.
     *
     * @example FilePathNotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The time when the instance was created.
     *
     * @example 2023-05-06 10:42:10
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the subscription instance group expires.
     *
     * @example 2024-07-15T02:03:33Z
     *
     * @var string
     */
    public $gmtExpired;

    /**
     * @description The time when the instance was modified.
     *
     * @example 2023-05-06 10:42:10
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @description The version of the image.
     *
     * @example 3.5.3.867
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The type of the instance.
     *
     * @example acp.basic.small
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the key pair.
     *
     * @example kp-5hh431emkpucs****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The memory size.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @description The IP address of the ENI.
     *
     * @example 192.168.22.48
     *
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $networkInterfaceIpv6Address;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @description The office network ID.
     *
     * @example cn-shenzhen+dir-211620****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the persistent session.
     *
     * @example p-0btrd5zj8epo****
     *
     * @var string
     */
    public $persistentAppInstanceId;

    /**
     * @var phoneDataInfo
     */
    public $phoneDataInfo;

    /**
     * @description The ID of the policy.
     *
     * @example pg-0bszojpu0seql****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The public IP address.
     *
     * @example 10.32.1.41
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $publicIpv6Address;

    /**
     * @var string
     */
    public $qosRuleId;

    /**
     * @description The progress of instance data backup or restoration.
     *
     * @example 100
     *
     * @var int
     */
    public $rate;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The rendering type.
     *
     * @example local
     *
     * @var string
     */
    public $renderingType;

    /**
     * @var string
     */
    public $serverStatus;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @description The session status.
     *
     * Valid values:
     *
     *   disConnect: The session is disconnected.
     *   connect: The session is connected.
     *
     * @example connect
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @var int
     */
    public $streamMode;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $upBandwidthLimit;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'androidInstanceGroupId' => 'AndroidInstanceGroupId',
        'androidInstanceGroupName' => 'AndroidInstanceGroupName',
        'androidInstanceId' => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'androidInstanceStatus' => 'AndroidInstanceStatus',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appManagePolicy' => 'AppManagePolicy',
        'authorizedUserId' => 'AuthorizedUserId',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bandwidthPackageType' => 'BandwidthPackageType',
        'bindUserId' => 'BindUserId',
        'bizTags' => 'BizTags',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'disks' => 'Disks',
        'displayConfig' => 'DisplayConfig',
        'downBandwidthLimit' => 'DownBandwidthLimit',
        'errorCode' => 'ErrorCode',
        'gmtCreate' => 'GmtCreate',
        'gmtExpired' => 'GmtExpired',
        'gmtModified' => 'GmtModified',
        'imageId' => 'ImageId',
        'imageVersion' => 'ImageVersion',
        'instanceType' => 'InstanceType',
        'keyPairId' => 'KeyPairId',
        'memory' => 'Memory',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'networkInterfaceIpv6Address' => 'NetworkInterfaceIpv6Address',
        'networkType' => 'NetworkType',
        'officeSiteId' => 'OfficeSiteId',
        'persistentAppInstanceId' => 'PersistentAppInstanceId',
        'phoneDataInfo' => 'PhoneDataInfo',
        'policyGroupId' => 'PolicyGroupId',
        'publicIpAddress' => 'PublicIpAddress',
        'publicIpv6Address' => 'PublicIpv6Address',
        'qosRuleId' => 'QosRuleId',
        'rate' => 'Rate',
        'regionId' => 'RegionId',
        'renderingType' => 'RenderingType',
        'serverStatus' => 'ServerStatus',
        'serverType' => 'ServerType',
        'sessionStatus' => 'SessionStatus',
        'streamMode' => 'StreamMode',
        'tags' => 'Tags',
        'upBandwidthLimit' => 'UpBandwidthLimit',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceGroupId) {
            $res['AndroidInstanceGroupId'] = $this->androidInstanceGroupId;
        }
        if (null !== $this->androidInstanceGroupName) {
            $res['AndroidInstanceGroupName'] = $this->androidInstanceGroupName;
        }
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }
        if (null !== $this->androidInstanceStatus) {
            $res['AndroidInstanceStatus'] = $this->androidInstanceStatus;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appManagePolicy) {
            $res['AppManagePolicy'] = null !== $this->appManagePolicy ? $this->appManagePolicy->toMap() : null;
        }
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthPackageType) {
            $res['BandwidthPackageType'] = $this->bandwidthPackageType;
        }
        if (null !== $this->bindUserId) {
            $res['BindUserId'] = $this->bindUserId;
        }
        if (null !== $this->bizTags) {
            $res['BizTags'] = [];
            if (null !== $this->bizTags && \is_array($this->bizTags)) {
                $n = 0;
                foreach ($this->bizTags as $item) {
                    $res['BizTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = null !== $this->displayConfig ? $this->displayConfig->toMap() : null;
        }
        if (null !== $this->downBandwidthLimit) {
            $res['DownBandwidthLimit'] = $this->downBandwidthLimit;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }
        if (null !== $this->networkInterfaceIpv6Address) {
            $res['NetworkInterfaceIpv6Address'] = $this->networkInterfaceIpv6Address;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->persistentAppInstanceId) {
            $res['PersistentAppInstanceId'] = $this->persistentAppInstanceId;
        }
        if (null !== $this->phoneDataInfo) {
            $res['PhoneDataInfo'] = null !== $this->phoneDataInfo ? $this->phoneDataInfo->toMap() : null;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->publicIpv6Address) {
            $res['PublicIpv6Address'] = $this->publicIpv6Address;
        }
        if (null !== $this->qosRuleId) {
            $res['QosRuleId'] = $this->qosRuleId;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->renderingType) {
            $res['RenderingType'] = $this->renderingType;
        }
        if (null !== $this->serverStatus) {
            $res['ServerStatus'] = $this->serverStatus;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->streamMode) {
            $res['StreamMode'] = $this->streamMode;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upBandwidthLimit) {
            $res['UpBandwidthLimit'] = $this->upBandwidthLimit;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceGroupId'])) {
            $model->androidInstanceGroupId = $map['AndroidInstanceGroupId'];
        }
        if (isset($map['AndroidInstanceGroupName'])) {
            $model->androidInstanceGroupName = $map['AndroidInstanceGroupName'];
        }
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }
        if (isset($map['AndroidInstanceStatus'])) {
            $model->androidInstanceStatus = $map['AndroidInstanceStatus'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppManagePolicy'])) {
            $model->appManagePolicy = appManagePolicy::fromMap($map['AppManagePolicy']);
        }
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthPackageType'])) {
            $model->bandwidthPackageType = $map['BandwidthPackageType'];
        }
        if (isset($map['BindUserId'])) {
            $model->bindUserId = $map['BindUserId'];
        }
        if (isset($map['BizTags'])) {
            if (!empty($map['BizTags'])) {
                $model->bizTags = [];
                $n = 0;
                foreach ($map['BizTags'] as $item) {
                    $model->bizTags[$n++] = null !== $item ? bizTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = displayConfig::fromMap($map['DisplayConfig']);
        }
        if (isset($map['DownBandwidthLimit'])) {
            $model->downBandwidthLimit = $map['DownBandwidthLimit'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }
        if (isset($map['NetworkInterfaceIpv6Address'])) {
            $model->networkInterfaceIpv6Address = $map['NetworkInterfaceIpv6Address'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['PersistentAppInstanceId'])) {
            $model->persistentAppInstanceId = $map['PersistentAppInstanceId'];
        }
        if (isset($map['PhoneDataInfo'])) {
            $model->phoneDataInfo = phoneDataInfo::fromMap($map['PhoneDataInfo']);
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['PublicIpv6Address'])) {
            $model->publicIpv6Address = $map['PublicIpv6Address'];
        }
        if (isset($map['QosRuleId'])) {
            $model->qosRuleId = $map['QosRuleId'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RenderingType'])) {
            $model->renderingType = $map['RenderingType'];
        }
        if (isset($map['ServerStatus'])) {
            $model->serverStatus = $map['ServerStatus'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['StreamMode'])) {
            $model->streamMode = $map['StreamMode'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpBandwidthLimit'])) {
            $model->upBandwidthLimit = $map['UpBandwidthLimit'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
