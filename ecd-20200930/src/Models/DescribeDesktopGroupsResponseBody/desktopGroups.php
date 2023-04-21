<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class desktopGroups extends Model
{
    /**
     * @description The number of sessions that are allowed for each cloud desktop in the multi-session desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description The number of purchased cloud desktops. Valid values: 0 to 200.
     *
     * @example 5
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The remarks on the desktop group.
     *
     * @example test
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum period of time during which a session is connected. When the specified maximum period of time is reached, the session automatically disconnects. Unit: milliseconds. This parameter is required only for cloud desktops in the same desktop group.
     *
     * @example 90000
     *
     * @var int
     */
    public $connectDuration;

    /**
     * @description The number of vCPUs.
     *
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the cloud desktop was created.
     *
     * @example 2022-02-17T14:51:07Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the Alibaba Cloud account in which the desktop group is created.
     *
     * @example 1007214305******
     *
     * @var string
     */
    public $creator;

    /**
     * @description The category of the data disk.
     *
     * Valid values:
     *
     *   cloud_efficiency
     *
     * .
     *
     *   cloud_ssd
     *
     * .
     *
     *   cloud_essd
     *
     * .
     * @example cloud_ssd
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 50
     *
     * @var string
     */
    public $dataDiskSize;

    /**
     * @description The ID of the desktop group.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the desktop group.
     *
     * @example test1
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The number of end users who are granted the permissions on the desktop group.
     *
     * @example 1
     *
     * @var int
     */
    public $endUserCount;

    /**
     * @description The expiration time of the subscription cloud desktop.
     *
     * @example 2022-03-17T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The number of GPUs.
     *
     * @example 1
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The GPU memory.
     *
     * @example 16 GiB
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description The maximum period of time during which a session is idle. When a session is idle, you cannot perform operations by using a keyboard or a mouse. When the specified maximum period of time is reached, the session automatically disconnects. Unit: milliseconds. This parameter is required only for cloud desktops in the same desktop group.
     *
     * @example 90000
     *
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @description The ID of the image.
     *
     * @example m-gq15cq5ydlvwn****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The keep-alive duration of a cloud desktop after the end user disconnects from the cloud desktop. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy for the multi-session desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     * @example 1
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of cloud desktops that the desktop group can contain.
     *
     * @example 10
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The memory size. Unit: MiB.
     *
     * @example 16384
     *
     * @var int
     */
    public $memory;

    /**
     * @description The minimum number of cloud desktops that the desktop group must contain.
     *
     * @example 1
     *
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-467671****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace.
     *
     * @example testName
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The account type of the workspace.
     *
     * Valid values:
     *
     *   PERSONAL
     *
     * .
     *
     *   SIMPLE
     *
     * .
     *
     *   AD_CONNECTOR
     *
     * .
     *
     *   RAM
     *
     * .
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The OS. Valid values:
     *
     *   Windows
     *   Linux
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The ID of the desktop template.
     *
     * @example bundle_eds_general_4c8g_s8d5_win2019
     *
     * @var string
     */
    public $ownBundleId;

    /**
     * @description The name of the desktop template.
     *
     * @example test
     *
     * @var string
     */
    public $ownBundleName;

    /**
     * @description The type of the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The billing method of the desktop group.
     *
     * Valid values:
     *
     *   PostPaid
     *
     * .
     *
     *   PrePaid
     *
     * .
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the policy.
     *
     * @example pg-53iyi2aar0nd6c8qj
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The name of the policy.
     *
     * @example test-policy
     *
     * @var string
     */
    public $policyGroupName;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   ASP
     *   HDX
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The threshold for the ratio of connected sessions. This parameter is the condition that triggers auto scaling in a multi-session desktop group. `Ratio of connected sessions = Number of connected sessions/(Total number of cloud desktops × Maximum number of sessions allowed for each cloud desktop) × 100%`. If the specified threshold is reached, new cloud desktops are automatically created. If the specified threshold is not reached, idle cloud desktops are released.
     *
     * @example 0.85
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description Indicates which type of disk is reset for the cloud desktops in the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     *
     *   2
     *
     * .
     *
     *   3
     *
     * .
     * @example 0
     *
     * @var int
     */
    public $resetType;

    /**
     * @description The payment status of the desktop group.
     *
     * Valid values:
     *
     *   0
     *
     * .
     *
     *   1
     *
     * .
     *
     *   2
     *
     * .
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The period of time before an idle cloud desktop stops. When the specified period of time is reached, the idle cloud desktop automatically stops. If an end user connects to a stopped cloud desktop, the cloud desktop automatically starts. Unit: milliseconds.
     *
     * @example 900000
     *
     * @var int
     */
    public $stopDuration;

    /**
     * @description The category of the system disk.
     *
     * Valid values:
     *
     *   cloud_efficiency
     *
     * .
     *
     *   cloud_ssd
     *
     * .
     *
     *   cloud_essd
     *
     * .
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     * @example 80
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The version number of the desktop group.
     *
     * @example 2
     *
     * @var int
     */
    public $version;

    /**
     * @description Indicates whether disk encryption is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used when disk encryption is enabled.
     *
     * @example e5409ada-xxxx-xxxx-xxxx-89e31e23e993
     *
     * @var string
     */
    public $volumeEncryptionKey;
    protected $_name = [
        'bindAmount'              => 'BindAmount',
        'buyDesktopsCount'        => 'BuyDesktopsCount',
        'comments'                => 'Comments',
        'connectDuration'         => 'ConnectDuration',
        'cpu'                     => 'Cpu',
        'createTime'              => 'CreateTime',
        'creator'                 => 'Creator',
        'dataDiskCategory'        => 'DataDiskCategory',
        'dataDiskSize'            => 'DataDiskSize',
        'desktopGroupId'          => 'DesktopGroupId',
        'desktopGroupName'        => 'DesktopGroupName',
        'endUserCount'            => 'EndUserCount',
        'expiredTime'             => 'ExpiredTime',
        'gpuCount'                => 'GpuCount',
        'gpuSpec'                 => 'GpuSpec',
        'idleDisconnectDuration'  => 'IdleDisconnectDuration',
        'imageId'                 => 'ImageId',
        'keepDuration'            => 'KeepDuration',
        'loadPolicy'              => 'LoadPolicy',
        'maxDesktopsCount'        => 'MaxDesktopsCount',
        'memory'                  => 'Memory',
        'minDesktopsCount'        => 'MinDesktopsCount',
        'officeSiteId'            => 'OfficeSiteId',
        'officeSiteName'          => 'OfficeSiteName',
        'officeSiteType'          => 'OfficeSiteType',
        'osType'                  => 'OsType',
        'ownBundleId'             => 'OwnBundleId',
        'ownBundleName'           => 'OwnBundleName',
        'ownType'                 => 'OwnType',
        'payType'                 => 'PayType',
        'policyGroupId'           => 'PolicyGroupId',
        'policyGroupName'         => 'PolicyGroupName',
        'protocolType'            => 'ProtocolType',
        'ratioThreshold'          => 'RatioThreshold',
        'resetType'               => 'ResetType',
        'status'                  => 'Status',
        'stopDuration'            => 'StopDuration',
        'systemDiskCategory'      => 'SystemDiskCategory',
        'systemDiskSize'          => 'SystemDiskSize',
        'version'                 => 'Version',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }
        if (null !== $this->buyDesktopsCount) {
            $res['BuyDesktopsCount'] = $this->buyDesktopsCount;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->endUserCount) {
            $res['EndUserCount'] = $this->endUserCount;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->idleDisconnectDuration) {
            $res['IdleDisconnectDuration'] = $this->idleDisconnectDuration;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }
        if (null !== $this->loadPolicy) {
            $res['LoadPolicy'] = $this->loadPolicy;
        }
        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ownBundleId) {
            $res['OwnBundleId'] = $this->ownBundleId;
        }
        if (null !== $this->ownBundleName) {
            $res['OwnBundleName'] = $this->ownBundleName;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }
        if (isset($map['BuyDesktopsCount'])) {
            $model->buyDesktopsCount = $map['BuyDesktopsCount'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['EndUserCount'])) {
            $model->endUserCount = $map['EndUserCount'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['IdleDisconnectDuration'])) {
            $model->idleDisconnectDuration = $map['IdleDisconnectDuration'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }
        if (isset($map['LoadPolicy'])) {
            $model->loadPolicy = $map['LoadPolicy'];
        }
        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OwnBundleId'])) {
            $model->ownBundleId = $map['OwnBundleId'];
        }
        if (isset($map['OwnBundleName'])) {
            $model->ownBundleName = $map['OwnBundleName'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }

        return $model;
    }
}
