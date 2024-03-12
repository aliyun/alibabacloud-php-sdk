<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\bundleModels;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\desktopTimers;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\tag;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest\userCommands;
use AlibabaCloud\Tea\Model;

class CreateDesktopsRequest extends Model
{
    /**
     * @description The number of cloud desktops that you want to create. Valid values: 1 to 300. Default value: 1.
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
     * @description The ID of the desktop template.
     *
     * @example b-je9hani001wfn****
     *
     * @var string
     */
    public $bundleId;

    /**
     * @description The desktop templates that you want to use.
     *
     * @var bundleModels[]
     */
    public $bundleModels;

    /**
     * @description The billing method of the cloud desktop.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 10.0.0.1
     *
     * @var string
     */
    public $desktopMemberIp;

    /**
     * @description The name of the cloud desktop. The name must meet the following requirements:
     *
     *   The name must be 1 to 64 characters in length.
     *   The name can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-). It must start with a letter but cannot start with http:// or https://.
     *
     * @example testDesktopName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description Specifies whether to automatically add a suffix to the cloud desktop name when you create multiple cloud desktops at a time.
     *
     * @example false
     *
     * @var bool
     */
    public $desktopNameSuffix;

    /**
     * @var desktopTimers[]
     */
    public $desktopTimers;

    /**
     * @description This parameter is not available.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The IDs of the users that you want to authorize to use the cloud desktop. The cloud desktop is assigned to the users. You can specify IDs of 1 to 100 users.
     *
     *   Only one user can use the cloud desktop at a time.
     *   If you do not specify the `EndUserId` parameter, the cloud desktop that you create is not assigned to users.
     *
     * @example 123456789
     *
     * @var string[]
     */
    public $endUserId;

    /**
     * @description The ID of the desktop group.
     *
     * @example dg-boyczi8enfyc5****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The hostname that you specify for the cloud desktop. You can specify only the hostname of a Windows cloud desktop in the workspace of the enterprise AD account type.
     *
     * The hostname must meet the following requirements:
     *
     *   It must be 2 to 15 characters in length.
     *   It can contain letters, digits, and hyphens (-). The hostname cannot start or end with a hyphen (-), contain consecutive hyphens (-), or contain only digits.
     *
     * If you create multiple cloud desktops, you can use the`  name_prefix[begin_number,bits]name_suffix ` format to determine the hostnames of the cloud desktops. For example, if you set Hostname to ecd-\[1,4]-test, the hostname of the first cloud desktop is ecd-0001-test and the hostname of the second cloud desktop is ecd-0002-test. Other hostnames follow the same rule.
     *
     *   `name_prefix`: the prefix of the hostname.
     *   `[begin_number,bits]`: the ordered numbers in the hostname. begin_number: the start number. Valid values: 0 to 999999. Default value: 0. bits: the digit. Valid values: 1 to 6. Default value: 6.
     *   `name_suffix`: the suffix of the hostname.
     *
     * @example testhost
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The ID of the workspace.
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
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags that you want to add to the cloud desktop.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The assignment mode of the cloud desktop.
     *
     * > If you do not specify the `EndUserId` parameter, the cloud desktop that you create is not assigned to users.
     * @example ALL
     *
     * @var string
     */
    public $userAssignMode;

    /**
     * @description The custom command scripts of the user.
     *
     * @var userCommands[]
     */
    public $userCommands;

    /**
     * @description This parameter is not available.
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
     * @description The ID of the Key Management Service (KMS) key that you want to use when disk encryption is enabled. You can call the [ListKeys](~~28951~~) operation to obtain a list of KMS keys.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d4****
     *
     * @var string
     */
    public $volumeEncryptionKey;

    /**
     * @description This parameter is not available.
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
        'officeSiteId'            => 'OfficeSiteId',
        'period'                  => 'Period',
        'periodUnit'              => 'PeriodUnit',
        'policyGroupId'           => 'PolicyGroupId',
        'promotionId'             => 'PromotionId',
        'regionId'                => 'RegionId',
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
