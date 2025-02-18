<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateAppInstanceGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appCenterImageId;
    /**
     * @var string
     */
    public $appInstanceGroupName;
    /**
     * @var string
     */
    public $appPolicyId;
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
    public $chargeResourceMode;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $networkShrink;
    /**
     * @var string
     */
    public $nodePoolShrink;
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
    public $preOpenAppId;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var string
     */
    public $promotionId;
    /**
     * @var string
     */
    public $runtimePolicyShrink;
    /**
     * @var string
     */
    public $securityPolicyShrink;
    /**
     * @var int
     */
    public $sessionTimeout;
    /**
     * @var string
     */
    public $storagePolicyShrink;
    /**
     * @var string
     */
    public $userDefinePolicyShrink;
    /**
     * @var string
     */
    public $userInfoShrink;
    /**
     * @var string[]
     */
    public $users;
    /**
     * @var string
     */
    public $videoPolicyShrink;
    protected $_name = [
        'appCenterImageId'       => 'AppCenterImageId',
        'appInstanceGroupName'   => 'AppInstanceGroupName',
        'appPolicyId'            => 'AppPolicyId',
        'autoPay'                => 'AutoPay',
        'autoRenew'              => 'AutoRenew',
        'bizRegionId'            => 'BizRegionId',
        'chargeResourceMode'     => 'ChargeResourceMode',
        'chargeType'             => 'ChargeType',
        'networkShrink'          => 'Network',
        'nodePoolShrink'         => 'NodePool',
        'period'                 => 'Period',
        'periodUnit'             => 'PeriodUnit',
        'preOpenAppId'           => 'PreOpenAppId',
        'productType'            => 'ProductType',
        'promotionId'            => 'PromotionId',
        'runtimePolicyShrink'    => 'RuntimePolicy',
        'securityPolicyShrink'   => 'SecurityPolicy',
        'sessionTimeout'         => 'SessionTimeout',
        'storagePolicyShrink'    => 'StoragePolicy',
        'userDefinePolicyShrink' => 'UserDefinePolicy',
        'userInfoShrink'         => 'UserInfo',
        'users'                  => 'Users',
        'videoPolicyShrink'      => 'VideoPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }

        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        if (null !== $this->appPolicyId) {
            $res['AppPolicyId'] = $this->appPolicyId;
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

        if (null !== $this->chargeResourceMode) {
            $res['ChargeResourceMode'] = $this->chargeResourceMode;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->networkShrink) {
            $res['Network'] = $this->networkShrink;
        }

        if (null !== $this->nodePoolShrink) {
            $res['NodePool'] = $this->nodePoolShrink;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->preOpenAppId) {
            $res['PreOpenAppId'] = $this->preOpenAppId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->runtimePolicyShrink) {
            $res['RuntimePolicy'] = $this->runtimePolicyShrink;
        }

        if (null !== $this->securityPolicyShrink) {
            $res['SecurityPolicy'] = $this->securityPolicyShrink;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->storagePolicyShrink) {
            $res['StoragePolicy'] = $this->storagePolicyShrink;
        }

        if (null !== $this->userDefinePolicyShrink) {
            $res['UserDefinePolicy'] = $this->userDefinePolicyShrink;
        }

        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1           = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->videoPolicyShrink) {
            $res['VideoPolicy'] = $this->videoPolicyShrink;
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
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }

        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        if (isset($map['AppPolicyId'])) {
            $model->appPolicyId = $map['AppPolicyId'];
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

        if (isset($map['ChargeResourceMode'])) {
            $model->chargeResourceMode = $map['ChargeResourceMode'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Network'])) {
            $model->networkShrink = $map['Network'];
        }

        if (isset($map['NodePool'])) {
            $model->nodePoolShrink = $map['NodePool'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PreOpenAppId'])) {
            $model->preOpenAppId = $map['PreOpenAppId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['RuntimePolicy'])) {
            $model->runtimePolicyShrink = $map['RuntimePolicy'];
        }

        if (isset($map['SecurityPolicy'])) {
            $model->securityPolicyShrink = $map['SecurityPolicy'];
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicyShrink = $map['StoragePolicy'];
        }

        if (isset($map['UserDefinePolicy'])) {
            $model->userDefinePolicyShrink = $map['UserDefinePolicy'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1           = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VideoPolicy'])) {
            $model->videoPolicyShrink = $map['VideoPolicy'];
        }

        return $model;
    }
}
