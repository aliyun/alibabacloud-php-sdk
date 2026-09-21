<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateBrowserInstanceGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appPackageType;

    /**
     * @var bool
     */
    public $authNotificationEnabled;

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
    public $bizRegionId;

    /**
     * @var string
     */
    public $browserConfigShrink;

    /**
     * @var string
     */
    public $chargeResourceMode;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cloudBrowserName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $maxAmount;

    /**
     * @var string
     */
    public $networkShrink;

    /**
     * @var string
     */
    public $nodePoolShrink;

    /**
     * @var string
     */
    public $osType;

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
    public $policyShrink;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $securityPolicyShrink;

    /**
     * @var string
     */
    public $storagePolicyShrink;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var string
     */
    public $tagShrink;

    /**
     * @var string
     */
    public $timersShrink;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string
     */
    public $userInfoShrink;

    /**
     * @var string
     */
    public $usersShrink;
    protected $_name = [
        'appPackageType' => 'AppPackageType',
        'authNotificationEnabled' => 'AuthNotificationEnabled',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bizRegionId' => 'BizRegionId',
        'browserConfigShrink' => 'BrowserConfig',
        'chargeResourceMode' => 'ChargeResourceMode',
        'chargeType' => 'ChargeType',
        'cloudBrowserName' => 'CloudBrowserName',
        'imageId' => 'ImageId',
        'instanceType' => 'InstanceType',
        'maxAmount' => 'MaxAmount',
        'networkShrink' => 'Network',
        'nodePoolShrink' => 'NodePool',
        'osType' => 'OsType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyShrink' => 'Policy',
        'promotionId' => 'PromotionId',
        'securityPolicyShrink' => 'SecurityPolicy',
        'storagePolicyShrink' => 'StoragePolicy',
        'subPayType' => 'SubPayType',
        'tagShrink' => 'Tag',
        'timersShrink' => 'Timers',
        'userGroupIds' => 'UserGroupIds',
        'userInfoShrink' => 'UserInfo',
        'usersShrink' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPackageType) {
            $res['AppPackageType'] = $this->appPackageType;
        }

        if (null !== $this->authNotificationEnabled) {
            $res['AuthNotificationEnabled'] = $this->authNotificationEnabled;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->browserConfigShrink) {
            $res['BrowserConfig'] = $this->browserConfigShrink;
        }

        if (null !== $this->chargeResourceMode) {
            $res['ChargeResourceMode'] = $this->chargeResourceMode;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cloudBrowserName) {
            $res['CloudBrowserName'] = $this->cloudBrowserName;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxAmount) {
            $res['MaxAmount'] = $this->maxAmount;
        }

        if (null !== $this->networkShrink) {
            $res['Network'] = $this->networkShrink;
        }

        if (null !== $this->nodePoolShrink) {
            $res['NodePool'] = $this->nodePoolShrink;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->policyShrink) {
            $res['Policy'] = $this->policyShrink;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->securityPolicyShrink) {
            $res['SecurityPolicy'] = $this->securityPolicyShrink;
        }

        if (null !== $this->storagePolicyShrink) {
            $res['StoragePolicy'] = $this->storagePolicyShrink;
        }

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        if (null !== $this->timersShrink) {
            $res['Timers'] = $this->timersShrink;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        if (null !== $this->usersShrink) {
            $res['Users'] = $this->usersShrink;
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
        if (isset($map['AppPackageType'])) {
            $model->appPackageType = $map['AppPackageType'];
        }

        if (isset($map['AuthNotificationEnabled'])) {
            $model->authNotificationEnabled = $map['AuthNotificationEnabled'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['BrowserConfig'])) {
            $model->browserConfigShrink = $map['BrowserConfig'];
        }

        if (isset($map['ChargeResourceMode'])) {
            $model->chargeResourceMode = $map['ChargeResourceMode'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CloudBrowserName'])) {
            $model->cloudBrowserName = $map['CloudBrowserName'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxAmount'])) {
            $model->maxAmount = $map['MaxAmount'];
        }

        if (isset($map['Network'])) {
            $model->networkShrink = $map['Network'];
        }

        if (isset($map['NodePool'])) {
            $model->nodePoolShrink = $map['NodePool'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['Policy'])) {
            $model->policyShrink = $map['Policy'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['SecurityPolicy'])) {
            $model->securityPolicyShrink = $map['SecurityPolicy'];
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicyShrink = $map['StoragePolicy'];
        }

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        if (isset($map['Timers'])) {
            $model->timersShrink = $map['Timers'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        if (isset($map['Users'])) {
            $model->usersShrink = $map['Users'];
        }

        return $model;
    }
}
