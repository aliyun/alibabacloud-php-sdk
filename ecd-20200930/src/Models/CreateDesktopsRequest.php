<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\bundleModels;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\desktopTimers;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\monthDesktopSetting;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\tag;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\userCommands;
use AlibabaCloud\Tea\Model;

class CreateDesktopsRequest extends Model
{
    /**
     * @description The number of cloud computers that you want to create. Valid values: 1 to 300. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable automatic payment.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal. This parameter takes effect only when the ChargeType parameter is set to PrePaid.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The ID of the cloud computer template.
     *
     * @example b-je9hani001wfn****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The cloud computer templates.
     *
     * @var bundleModels[]
     */
    public $bundleModels;

    /**
     * @description The billing method of the cloud computers.
     *
     * Default value: PostPaid. Valid values:
     *
     *   Postpaid: pay-as-you-go
     *
     * <!-- -->
     *
     *   PrePaid: subscription
     *
     * <!-- -->
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The private IP address of the cloud computer.
     *
     * @example 10.0.0.1
     *
     * @var string
     */
    public $desktopMemberIp;

    /**
     * @description The name of the cloud computer. The name must meet the following requirements:
     *
     *   The name must be 1 to 64 characters in length.
     *   The name must start with a letter but cannot start with `http://` or `https://`.
     *   The name can only contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description Specifies whether to automatically add suffixes to the names of cloud computers when you create multiple cloud computers at the same time.
     *
     * Default value: true. Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   False
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $desktopNameSuffix;

    /**
     * @description The details of the scheduled task on cloud computers.
     *
     * @var desktopTimers[]
     */
    public $desktopTimers;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The IDs of the end users to which you want to assign the cloud computers. You can specify 1 to 100 IDs.
     *
     * @example 123456789
     *
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The ID of the cloud computer pool.
     *
     * @example dg-boyczi8enfyc5****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The custom hostnames of the cloud computers. This parameter is valid only if the office network is an AD office network and the operating system type of the cloud computers is Windows.
     *
     * The hostnames must meet the following requirements:
     *
     *   The hostnames must be 2 to 15 characters in length.
     *   The hostnames can contain only letters, digits, and hyphens (-). The hostnames cannot start or end with a hyphen (-), contain consecutive hyphens (-), or contain only digits.
     *
     * When you create multiple cloud computers, you can use the `name_prefix[begin_number,bits]name_suffix` naming format to name the cloud computers. For example, if you set the value of the Hostname parameter to ecd-[1,4]-test, the hostname of the first cloud computer is ecd-0001-test, the hostname of the second cloud computer is ecd-0002-test, and so on.
     *
     *   `name_prefix`: the prefix of the hostname.
     *   `[begin_number,bits]`: the sequential number in the hostname. The `begin_number` value is the starting digit. Valid values of begin_number: 0 to 999999. Default value: 0. The `bits` value is the number of digits. Valid values: 1 to 6. Default value: 6.
     *   `name_suffix`: the suffix of the hostname.
     *
     * @example testhost
     *
     * @var string
     */
    public $hostname;

    /**
     * @description > This parameter is not publicly available.
     *
     * @var monthDesktopSetting
     */
    public $monthDesktopSetting;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+os-c5cy7q578s8jc****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The subscription duration of the cloud desktop that you want to create. The unit is specified by the `PeriodUnit` parameter. This parameter takes effect and is required only when the `ChargeType` parameter is set to `PrePaid`.
     *
     *   Valid values if the `PeriodUnit` parameter is set to `Month`:
     *
     *   1
     *   2
     *   3
     *   6
     *
     *   Valid values if the `PeriodUnit` parameter is set to `Year`:
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
     * @example system-all-enabled-policy
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The ID of the sales promotion.
     *
     * @example 23141
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @description The tags that you want to add to the cloud desktop.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description How the cloud computers are assigned.
     *
     * Default value: ALL. Valid values:
     *
     *   ALL: If you specify the EndUserId parameter, the cloud computers are assigned to all specified end users after the cloud computers are created.
     *
     * <!-- -->
     *
     *   PER_USER: If you specify the EndUserId parameter, the cloud computers are evenly assigned to the specified end users after the cloud computers are created.
     *
     * <!-- -->
     * @example ALL
     *
     * @var string
     */
    public $userAssignMode;

    /**
     * @description Details about the custom command scripts.
     *
     * @var userCommands[]
     */
    public $userCommands;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $userName;

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
     * @description >  This parameter is not publicly available.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'amount'                  => 'Amount',
        'autoPay'                 => 'AutoPay',
        'autoRenew'               => 'AutoRenew',
        'bundleId'                => 'BundleId',
        'bundleModels'            => 'BundleModels',
        'chargeType'              => 'ChargeType',
        'desktopMemberIp'         => 'DesktopMemberIp',
        'desktopName'             => 'DesktopName',
        'desktopNameSuffix'       => 'DesktopNameSuffix',
        'desktopTimers'           => 'DesktopTimers',
        'directoryId'             => 'DirectoryId',
        'endUserId'               => 'EndUserId',
        'groupId'                 => 'GroupId',
        'hostname'                => 'Hostname',
        'monthDesktopSetting'     => 'MonthDesktopSetting',
        'officeSiteId'            => 'OfficeSiteId',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'policyGroupId'           => 'PolicyGroupId',
        'promotionId'             => 'PromotionId',
        'regionId'                => 'RegionId',
        'snapshotPolicyId'        => 'SnapshotPolicyId',
        'tag'                     => 'Tag',
        'userAssignMode'          => 'UserAssignMode',
        'userCommands'            => 'UserCommands',
        'userName'                => 'UserName',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey'     => 'VolumeEncryptionKey',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->bundleModels) {
            $res['BundleModels'] = [];
            if (null !== $this->bundleModels && \is_array($this->bundleModels)) {
                $n = 0;
                foreach ($this->bundleModels as $item) {
                    $res['BundleModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->desktopMemberIp) {
            $res['DesktopMemberIp'] = $this->desktopMemberIp;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->desktopNameSuffix) {
            $res['DesktopNameSuffix'] = $this->desktopNameSuffix;
        }
        if (null !== $this->desktopTimers) {
            $res['DesktopTimers'] = [];
            if (null !== $this->desktopTimers && \is_array($this->desktopTimers)) {
                $n = 0;
                foreach ($this->desktopTimers as $item) {
                    $res['DesktopTimers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->monthDesktopSetting) {
            $res['MonthDesktopSetting'] = null !== $this->monthDesktopSetting ? $this->monthDesktopSetting->toMap() : null;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
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
        if (null !== $this->userAssignMode) {
            $res['UserAssignMode'] = $this->userAssignMode;
        }
        if (null !== $this->userCommands) {
            $res['UserCommands'] = [];
            if (null !== $this->userCommands && \is_array($this->userCommands)) {
                $n = 0;
                foreach ($this->userCommands as $item) {
                    $res['UserCommands'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
     * @return CreateDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['BundleModels'])) {
            if (!empty($map['BundleModels'])) {
                $model->bundleModels = [];
                $n                   = 0;
                foreach ($map['BundleModels'] as $item) {
                    $model->bundleModels[$n++] = null !== $item ? bundleModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DesktopMemberIp'])) {
            $model->desktopMemberIp = $map['DesktopMemberIp'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DesktopNameSuffix'])) {
            $model->desktopNameSuffix = $map['DesktopNameSuffix'];
        }
        if (isset($map['DesktopTimers'])) {
            if (!empty($map['DesktopTimers'])) {
                $model->desktopTimers = [];
                $n                    = 0;
                foreach ($map['DesktopTimers'] as $item) {
                    $model->desktopTimers[$n++] = null !== $item ? desktopTimers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = $map['EndUserId'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['MonthDesktopSetting'])) {
            $model->monthDesktopSetting = monthDesktopSetting::fromMap($map['MonthDesktopSetting']);
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
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
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserAssignMode'])) {
            $model->userAssignMode = $map['UserAssignMode'];
        }
        if (isset($map['UserCommands'])) {
            if (!empty($map['UserCommands'])) {
                $model->userCommands = [];
                $n                   = 0;
                foreach ($map['UserCommands'] as $item) {
                    $model->userCommands[$n++] = null !== $item ? userCommands::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
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
