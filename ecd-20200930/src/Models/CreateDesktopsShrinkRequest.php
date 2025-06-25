<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest\bundleModels;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest\desktopTimers;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest\monthDesktopSetting;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest\tag;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest\userCommands;

class CreateDesktopsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $appRuleId;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var bundleModels[]
     */
    public $bundleModels;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $desktopAttachmentShrink;

    /**
     * @var string
     */
    public $desktopMemberIp;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var bool
     */
    public $desktopNameSuffix;

    /**
     * @var desktopTimers[]
     */
    public $desktopTimers;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string[]
     */
    public $endUserId;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var monthDesktopSetting
     */
    public $monthDesktopSetting;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $savingPlanId;

    /**
     * @var string
     */
    public $snapshotPolicyId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $timerGroupId;

    /**
     * @var string
     */
    public $userAssignMode;

    /**
     * @var userCommands[]
     */
    public $userCommands;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var bool
     */
    public $volumeEncryptionEnabled;

    /**
     * @var string
     */
    public $volumeEncryptionKey;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'amount' => 'Amount',
        'appRuleId' => 'AppRuleId',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bundleId' => 'BundleId',
        'bundleModels' => 'BundleModels',
        'chargeType' => 'ChargeType',
        'desktopAttachmentShrink' => 'DesktopAttachment',
        'desktopMemberIp' => 'DesktopMemberIp',
        'desktopName' => 'DesktopName',
        'desktopNameSuffix' => 'DesktopNameSuffix',
        'desktopTimers' => 'DesktopTimers',
        'directoryId' => 'DirectoryId',
        'endUserId' => 'EndUserId',
        'extendInfo' => 'ExtendInfo',
        'groupId' => 'GroupId',
        'hostname' => 'Hostname',
        'monthDesktopSetting' => 'MonthDesktopSetting',
        'officeSiteId' => 'OfficeSiteId',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyGroupId' => 'PolicyGroupId',
        'promotionId' => 'PromotionId',
        'regionId' => 'RegionId',
        'resellerOwnerUid' => 'ResellerOwnerUid',
        'resourceGroupId' => 'ResourceGroupId',
        'savingPlanId' => 'SavingPlanId',
        'snapshotPolicyId' => 'SnapshotPolicyId',
        'tag' => 'Tag',
        'timerGroupId' => 'TimerGroupId',
        'userAssignMode' => 'UserAssignMode',
        'userCommands' => 'UserCommands',
        'userName' => 'UserName',
        'volumeEncryptionEnabled' => 'VolumeEncryptionEnabled',
        'volumeEncryptionKey' => 'VolumeEncryptionKey',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->bundleModels)) {
            Model::validateArray($this->bundleModels);
        }
        if (\is_array($this->desktopTimers)) {
            Model::validateArray($this->desktopTimers);
        }
        if (\is_array($this->endUserId)) {
            Model::validateArray($this->endUserId);
        }
        if (null !== $this->monthDesktopSetting) {
            $this->monthDesktopSetting->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->userCommands)) {
            Model::validateArray($this->userCommands);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->appRuleId) {
            $res['AppRuleId'] = $this->appRuleId;
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
            if (\is_array($this->bundleModels)) {
                $res['BundleModels'] = [];
                $n1 = 0;
                foreach ($this->bundleModels as $item1) {
                    $res['BundleModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->desktopAttachmentShrink) {
            $res['DesktopAttachment'] = $this->desktopAttachmentShrink;
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
            if (\is_array($this->desktopTimers)) {
                $res['DesktopTimers'] = [];
                $n1 = 0;
                foreach ($this->desktopTimers as $item1) {
                    $res['DesktopTimers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->endUserId) {
            if (\is_array($this->endUserId)) {
                $res['EndUserId'] = [];
                $n1 = 0;
                foreach ($this->endUserId as $item1) {
                    $res['EndUserId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->monthDesktopSetting) {
            $res['MonthDesktopSetting'] = null !== $this->monthDesktopSetting ? $this->monthDesktopSetting->toArray($noStream) : $this->monthDesktopSetting;
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

        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->savingPlanId) {
            $res['SavingPlanId'] = $this->savingPlanId;
        }

        if (null !== $this->snapshotPolicyId) {
            $res['SnapshotPolicyId'] = $this->snapshotPolicyId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timerGroupId) {
            $res['TimerGroupId'] = $this->timerGroupId;
        }

        if (null !== $this->userAssignMode) {
            $res['UserAssignMode'] = $this->userAssignMode;
        }

        if (null !== $this->userCommands) {
            if (\is_array($this->userCommands)) {
                $res['UserCommands'] = [];
                $n1 = 0;
                foreach ($this->userCommands as $item1) {
                    $res['UserCommands'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['AppRuleId'])) {
            $model->appRuleId = $map['AppRuleId'];
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
                $n1 = 0;
                foreach ($map['BundleModels'] as $item1) {
                    $model->bundleModels[$n1] = bundleModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DesktopAttachment'])) {
            $model->desktopAttachmentShrink = $map['DesktopAttachment'];
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
                $n1 = 0;
                foreach ($map['DesktopTimers'] as $item1) {
                    $model->desktopTimers[$n1] = desktopTimers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['EndUserId'])) {
            if (!empty($map['EndUserId'])) {
                $model->endUserId = [];
                $n1 = 0;
                foreach ($map['EndUserId'] as $item1) {
                    $model->endUserId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
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

        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SavingPlanId'])) {
            $model->savingPlanId = $map['SavingPlanId'];
        }

        if (isset($map['SnapshotPolicyId'])) {
            $model->snapshotPolicyId = $map['SnapshotPolicyId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimerGroupId'])) {
            $model->timerGroupId = $map['TimerGroupId'];
        }

        if (isset($map['UserAssignMode'])) {
            $model->userAssignMode = $map['UserAssignMode'];
        }

        if (isset($map['UserCommands'])) {
            if (!empty($map['UserCommands'])) {
                $model->userCommands = [];
                $n1 = 0;
                foreach ($map['UserCommands'] as $item1) {
                    $model->userCommands[$n1] = userCommands::fromMap($item1);
                    ++$n1;
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
