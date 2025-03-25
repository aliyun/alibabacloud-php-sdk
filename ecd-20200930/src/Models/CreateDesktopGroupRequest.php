<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDesktopGroupRequest extends Model
{
    /**
     * @description The types of the users.
     *
     * >  This parameter is not publicly available.
     *
     * @example Alice
     *
     * @var bool
     */
    public $allClassifyUsers;

    /**
     * @description Specifies whether to enable batch-based automatic creation of subscription cloud computers for the shared group. This parameter is required if you set `ChargeType` to `PrePaid`.
     *
     * Valid values:
     *
     *   0: enables batch-based automatic creation of subscription cloud computers.
     *   1: disables batch-based automatic creation of subscription cloud computers.
     *
     * @example 1
     *
     * @var int
     */
    public $allowAutoSetup;

    /**
     * @description The maximum number of pay-as-you-go cloud computers that can be reserved in the shared group. This parameter is required if you set `ChargeType` to `PostPaid`. Valid values:
     *
     *   0: does not reserve any cloud computers.
     *   N: reserves N cloud computers (1≤ N ≤ 100).
     *
     * >  Setting this parameter to 0 means no cloud computers will be reserved in the shared group. In this case, the system must create, start, and assign cloud computers to end users upon request, which can be time-consuming. To improve user experience, we recommend that you reserve a specific number of cloud computers.
     *
     * @example 1
     *
     * @var int
     */
    public $allowBufferCount;

    /**
     * @description Specifies whether to automatically complete the payment for subscription orders.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the shared subscription group.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The number of concurrent sessions of the multi-session shared group.
     *
     * >  This parameter is not publicly available.
     *
     * @example 1
     *
     * @var int
     */
    public $bindAmount;

    /**
     * @description The ID of the cloud computer template.
     *
     * @example b-je9hani001wfn****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description *   For shared subscription groups, this parameter defines the initial number of cloud computers to be created. Valid values: 0 to 200.
     *   For shared pay-as-you-go groups, this parameter defines the minimum initial number of cloud computers to be created. Valid values: 0 to `MaxDesktopsCount`. Default value: 1.
     *
     * @example 3
     *
     * @var int
     */
    public $buyDesktopsCount;

    /**
     * @description The billing method of the shared group.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * This parameter is required.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The type of the cloud computers in the shared group.
     *
     * >  This parameter is not publicly available.
     *
     * Valid values:
     *
     *   teacher: cloud computers designed for teachers.
     *   student: cloud computers designed for students.
     *
     * @example teacher
     *
     * @var string
     */
    public $classify;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The remarks of the shared group.
     *
     * @example test
     *
     * @var string
     */
    public $comments;

    /**
     * @description The maximum duration for which each session remains connected. The session is automatically disconnected once the specified maximum time limit is reached. Unit: milliseconds. Valid values: 900000 to 345600000. That is, the session can be connected for 15 to 5,760 minutes (4 days).
     *
     * @example 300000
     *
     * @var int
     */
    public $connectDuration;

    /**
     * @description The category of the data disk.
     *
     * Valid values:
     *
     *   cloud_auto: the standard SSD.
     *   cloud_essd: the ESSD.
     *
     * @example cloud_auto
     *
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @description The PL of the data disk of the ESSD category. Default value: PL0.
     *
     * Valid values:
     *
     *   PL1
     *   PL0
     *
     * @example PL0
     *
     * @var string
     */
    public $dataDiskPerLevel;

    /**
     * @description The size of the data disk. Unit: GB. Valid values: 0 to 16380. The value must be an integral multiple of 20.
     *
     *   A value of 0 means no data disk is attached.
     *   If the selected plan includes a standard SSD, the data disk size must be at least 20 GB.
     *
     * Default value: 0.
     *
     * @example 80
     *
     * @var int
     */
    public $dataDiskSize;

    /**
     * @description The default number of cloud computers that you want to create at the same time in the shared group. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $defaultInitDesktopCount;

    /**
     * @description The language of the OS.
     *
     * Valid values:
     *
     *   en-US: English.
     *   zh-HK: Traditional Chinese.
     *   zh-CN: Simplified Chinese
     *   ja-JP: Japanese.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $defaultLanguage;

    /**
     * @description The name of the shared group. The name can be up to 30 characters in length and can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-). It must start with a letter but cannot start with `http://` or `https://`.
     *
     * @example desktopGroupName1
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The specifications of the cloud computer. You can call the [DescribeDesktopTypes](~~DescribeDesktopTypes~~) operation to query all the supported specifications.
     *
     * @example eds.enterprise_office.16c64g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The ID of the directory.
     *
     * >  This parameter is not publicly available.
     *
     * @example hide
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The IDs of the end users.
     *
     * @var string[]
     */
    public $endUserIds;

    /**
     * @description Specifies whether the shared group is exclusive. You must set this parameter to `Exclusive` when `SessionType` is set to `MultipleSession`.
     *
     * @example Exclusive
     *
     * @var string
     */
    public $exclusiveType;

    /**
     * @description The ID of the File Storage NAS (NAS) file system for the user data roaming feature.
     *
     * >  This parameter is not publicly available.
     *
     * @example 04f314****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The number of shared groups for the single-cloud computer type. You must specify this parameter if you set `MultiResource` to `false`. Valid values: 1 to 5. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $groupAmount;

    /**
     * @description The version of the shared group.
     *
     * @example 2
     *
     * @var int
     */
    public $groupVersion;

    /**
     * @description The hostname series of the cloud computer. This parameter is supported exclusively when the office network operates on Active Directory (AD) and the cloud computer runs on a Windows operating system.
     *
     * Naming conventions:
     *
     *   A hostname must be 2 to 15 characters in length
     *   and can contain only letters, digits, and hyphens (-). It cannot start or end with a hyphen (-), contain consecutive hyphens (-), or contain only digits.
     *
     * If you want to create multiple cloud computers, specify their hostnames in the `name_prefix[begin_number,bits]name_suffix` format. For example, if you set Hostname to ecd-[1,4]-test, the hostnames of the cloud computers will be assigned sequentially as ecd-0001-test, ecd-0002-test, and so on.
     *
     *   `name_prefix`: the prefix of the hostname.
     *   `[begin_number,bits]`: the sequential number in the hostname. The `begin_number` value is the starting number. Valid values of begin_number: 0 to 999999. Default value: 0. The `bits` value is the number of digits. Valid values: 1 to 6. Default value: 6.
     *   `name_suffix`: the suffix of the hostname.
     *
     * @example testhost
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The duration after which a session is terminated if no keyboard or mouse activity is detected. When an end user connects to a cloud computer, a session is initiated. If no input from the keyboard or mouse is detected within this specified timeframe, the session is automatically closed. Unit: milliseconds. Valid values: 360000 to 3600000 (6 minutes to 60 minutes)
     *
     * The system prompts end users to save their data 30 seconds before a session is disconnected. To avoid data loss, end users must save their session data upon receiving the prompt.
     *
     * >  This parameter is suitable only for cloud computers whose image version is v1.0.2 or later.
     *
     * @example 300000
     *
     * @var int
     */
    public $idleDisconnectDuration;

    /**
     * @description The ID of the image.
     *
     * @example m-gx2x1dhsmusr2****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The duration for which each session remains active after disconnection. Valid values: 180000 (3 minutes) to 345600000 (4 days). Unit: milliseconds. If you set this parameter to 0, the session is permanently retained after disconnection.
     *
     * When a session is disconnected, take note of the following items: 1. If the end user does not resume the session within the specified duration, the session will close, and all unsaved data will be cleared. 2. If the end user resumes the session within the specified duration, the session data will remain accessible for continued use.
     *
     * @example 6000
     *
     * @var int
     */
    public $keepDuration;

    /**
     * @description The load balancing policy of the multi-session shared group.
     *
     * >  This parameter is not publicly available.
     *
     * Valid values:
     *
     *   0: depth-first
     *   1: breadth first
     *
     * @example 0
     *
     * @var int
     */
    public $loadPolicy;

    /**
     * @description The maximum number of pay-as-you-go cloud computers that can be automatically provisioned at the same time in the shared group. Valid values: 0 to 500.
     *
     * @example 50
     *
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @description The minimum number of subscription cloud computers that can be automatically provisioned at the same time in the shared group. This parameter is required if you set `ChargeType` to `PrePaid`. Default value: 1. Valid values: 0 to `MaxDesktopsCount`.
     *
     * @example 1
     *
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @description Specifies whether the shared group is a multi-cloud computer type.
     *
     * Valid values:
     *
     *   true: a multi-cloud computer type.
     *   false: a single-cloud computer type.
     *
     * @example false
     *
     * @var bool
     */
    public $multiResource;

    /**
     * @description The ID of the office network.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou+os-c5cy7q578s8jc****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The session type of the shared group.
     *
     * >  This parameter is not publicly available.
     *
     * Valid values:
     *
     *   0: single-session.
     *   1: multi-session.
     *
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The subscription duration of the shared group. This parameter is required if you set `ChargeType` to `PrePaid`. You must specify the subscription duration unit by using `PeriodUnit`.
     *
     *   If you set `PeriodUnit` to `Month`, valid values of this parameter:
     *
     *   1
     *   2
     *   3
     *   6
     *
     *   If you set `PeriodUnit` to `Year`, valid values of this parameter:
     *
     *   1
     *   2
     *   3
     *   4
     *   5
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the policy.
     *
     * This parameter is required.
     *
     * @example pg-9c2d6t2dwflqr****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description Specifies whether to enable user data roaming.
     *
     * >  This parameter is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $profileFollowSwitch;

    /**
     * @description The ID of the coupon.
     *
     * @example youhuiquan_promotion_option_id_*****
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The threshold for the ratio of connected sessions. This parameter defines the condition that activates automatic scaling of cloud computers in a multi-session shared group. The ratio of connected sessions is calculated by using the following formula:
     *
     * `Ratio of connected sessions = Number of connected sessions/(Total number of cloud computers × Maximum number of sessions allowed for each cloud computer) × 100%`.
     *
     * If the connected session ratio exceeds the specified threshold, new cloud computers are provisioned. If the ratio falls below the threshold, idle cloud computers are deleted.
     *
     * >  This parameter is not publicly available.
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratioThreshold;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The reset option of the shared group.
     *
     * Valid values:
     *
     *   0: Reset is not required.
     *   1: Only the system disk is reset.
     *   2: Only the data disk is reset.
     *   3: Both the system disk and the data disk are reset.
     *
     * @example 0
     *
     * @var int
     */
    public $resetType;

    /**
     * @description The ID of the scaling policy.
     *
     * >  This parameter is not publicly available.
     *
     * @example hide
     *
     * @var string
     */
    public $scaleStrategyId;

    /**
     * @description The type of the session.
     *
     * Valid values:
     *
     *   SingleSession
     *   MultipleSession
     *
     * @example SingleSession
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description The ID of the automatic snapshot policy.
     *
     * @example sp-28mp6my0l6zow****
     *
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @description The maximum period of inactivity allowed before a cloud computer is automatically stopped. If the idle duration reaches the specified limit, the system stops the cloud computer. When an end user reconnects to the stopped cloud computer, it automatically restarts. Unit: milliseconds.
     *
     * @example 300000
     *
     * @var int
     */
    public $stopDuration;

    /**
     * @description The category of the system disk.
     *
     * Valid values:
     *
     *   cloud_auto: the standard SSD.
     *   cloud_essd: the Enterprise SSD (ESSD).
     *
     * @example cloud_auto
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The performance level (PL) of the system disk of the ESSD category. Default value: PL0.
     *
     * Valid values:
     *
     *   PL1
     *   PL0
     *
     * @example PL0
     *
     * @var string
     */
    public $systemDiskPerLevel;

    /**
     * @description The size of the system disk. Unit: GiB.
     *
     * >  The system disk must be at least as large as the image.
     *
     * @example 80
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the timer group.
     *
     * @example ccg-0caoeogrk9m5****
     *
     * @var string
     */
    public $timerGroupId;

    /**
     * @var string
     */
    public $userOuPath;

    /**
     * @description Specifies whether to enable disk encryption.
     *
     * @example false
     *
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @description The ID of the Key Management Service (KMS) key that you want to use when disk encryption is enabled. You can call the [ListKeys](https://help.aliyun.com/document_detail/28951.html) operation to obtain a list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * >  This parameter is not publicly available.
     *
     * @example hide
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'allClassifyUsers' => 'AllClassifyUsers',
        'allowAutoSetup' => 'AllowAutoSetup',
        'allowBufferCount' => 'AllowBufferCount',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bindAmount' => 'BindAmount',
        'bundleId' => 'BundleId',
        'buyDesktopsCount' => 'BuyDesktopsCount',
        'chargeType' => 'ChargeType',
        'classify' => 'Classify',
        'clientToken' => 'ClientToken',
        'comments' => 'Comments',
        'connectDuration' => 'ConnectDuration',
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskPerLevel' => 'DataDiskPerLevel',
        'dataDiskSize' => 'DataDiskSize',
        'defaultInitDesktopCount' => 'DefaultInitDesktopCount',
        'defaultLanguage' => 'DefaultLanguage',
        'desktopGroupName' => 'DesktopGroupName',
        'desktopType' => 'DesktopType',
        'directoryId' => 'DirectoryId',
        'endUserIds' => 'EndUserIds',
        'exclusiveType' => 'ExclusiveType',
        'fileSystemId' => 'FileSystemId',
        'groupAmount' => 'GroupAmount',
        'groupVersion' => 'GroupVersion',
        'hostname' => 'Hostname',
        'idleDisconnectDuration' => 'IdleDisconnectDuration',
        'imageId' => 'ImageId',
        'keepDuration' => 'KeepDuration',
        'loadPolicy' => 'LoadPolicy',
        'maxDesktopsCount' => 'MaxDesktopsCount',
        'minDesktopsCount' => 'MinDesktopsCount',
        'multiResource' => 'MultiResource',
        'officeSiteId' => 'OfficeSiteId',
        'ownType' => 'OwnType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyGroupId' => 'PolicyGroupId',
        'profileFollowSwitch' => 'ProfileFollowSwitch',
        'promotionId' => 'PromotionId',
        'ratioThreshold' => 'RatioThreshold',
        'regionId' => 'RegionId',
        'resetType' => 'ResetType',
        'scaleStrategyId' => 'ScaleStrategyId',
        'sessionType' => 'SessionType',
        'snapshotPolicyId' => 'SnapshotPolicyId',
        'stopDuration' => 'StopDuration',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskPerLevel' => 'SystemDiskPerLevel',
        'systemDiskSize' => 'SystemDiskSize',
        'tag' => 'Tag',
        'timerGroupId' => 'TimerGroupId',
        'userOuPath' => 'UserOuPath',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allClassifyUsers) {
            $res['AllClassifyUsers'] = $this->allClassifyUsers;
        }
        if (null !== $this->allowAutoSetup) {
            $res['AllowAutoSetup'] = $this->allowAutoSetup;
        }
        if (null !== $this->allowBufferCount) {
            $res['AllowBufferCount'] = $this->allowBufferCount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bindAmount) {
            $res['BindAmount'] = $this->bindAmount;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->buyDesktopsCount) {
            $res['BuyDesktopsCount'] = $this->buyDesktopsCount;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskPerLevel) {
            $res['DataDiskPerLevel'] = $this->dataDiskPerLevel;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->defaultInitDesktopCount) {
            $res['DefaultInitDesktopCount'] = $this->defaultInitDesktopCount;
        }
        if (null !== $this->defaultLanguage) {
            $res['DefaultLanguage'] = $this->defaultLanguage;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->exclusiveType) {
            $res['ExclusiveType'] = $this->exclusiveType;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->groupAmount) {
            $res['GroupAmount'] = $this->groupAmount;
        }
        if (null !== $this->groupVersion) {
            $res['GroupVersion'] = $this->groupVersion;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
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
        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }
        if (null !== $this->multiResource) {
            $res['MultiResource'] = $this->multiResource;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->profileFollowSwitch) {
            $res['ProfileFollowSwitch'] = $this->profileFollowSwitch;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->scaleStrategyId) {
            $res['ScaleStrategyId'] = $this->scaleStrategyId;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
        }
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskPerLevel) {
            $res['SystemDiskPerLevel'] = $this->systemDiskPerLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timerGroupId) {
            $res['TimerGroupId'] = $this->timerGroupId;
        }
        if (null !== $this->userOuPath) {
            $res['UserOuPath'] = $this->userOuPath;
        }
        if (null !== $this->volumeEncryptionEnabled) {
            $res['VolumeEncryptionEnabled'] = $this->volumeEncryptionEnabled;
        }
        if (null !== $this->volumeEncryptionKey) {
            $res['VolumeEncryptionKey'] = $this->volumeEncryptionKey;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDesktopGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllClassifyUsers'])) {
            $model->allClassifyUsers = $map['AllClassifyUsers'];
        }
        if (isset($map['AllowAutoSetup'])) {
            $model->allowAutoSetup = $map['AllowAutoSetup'];
        }
        if (isset($map['AllowBufferCount'])) {
            $model->allowBufferCount = $map['AllowBufferCount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BindAmount'])) {
            $model->bindAmount = $map['BindAmount'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['BuyDesktopsCount'])) {
            $model->buyDesktopsCount = $map['BuyDesktopsCount'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskPerLevel'])) {
            $model->dataDiskPerLevel = $map['DataDiskPerLevel'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DefaultInitDesktopCount'])) {
            $model->defaultInitDesktopCount = $map['DefaultInitDesktopCount'];
        }
        if (isset($map['DefaultLanguage'])) {
            $model->defaultLanguage = $map['DefaultLanguage'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = $map['EndUserIds'];
            }
        }
        if (isset($map['ExclusiveType'])) {
            $model->exclusiveType = $map['ExclusiveType'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['GroupAmount'])) {
            $model->groupAmount = $map['GroupAmount'];
        }
        if (isset($map['GroupVersion'])) {
            $model->groupVersion = $map['GroupVersion'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
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
        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }
        if (isset($map['MultiResource'])) {
            $model->multiResource = $map['MultiResource'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['ProfileFollowSwitch'])) {
            $model->profileFollowSwitch = $map['ProfileFollowSwitch'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['ScaleStrategyId'])) {
            $model->scaleStrategyId = $map['ScaleStrategyId'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskPerLevel'])) {
            $model->systemDiskPerLevel = $map['SystemDiskPerLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimerGroupId'])) {
            $model->timerGroupId = $map['TimerGroupId'];
        }
        if (isset($map['UserOuPath'])) {
            $model->userOuPath = $map['UserOuPath'];
        }
        if (isset($map['VolumeEncryptionEnabled'])) {
            $model->volumeEncryptionEnabled = $map['VolumeEncryptionEnabled'];
        }
        if (isset($map['VolumeEncryptionKey'])) {
            $model->volumeEncryptionKey = $map['VolumeEncryptionKey'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
