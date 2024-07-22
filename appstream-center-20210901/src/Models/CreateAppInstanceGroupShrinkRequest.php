<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreateAppInstanceGroupShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example img-8z4nztpaqvay4****
     *
     * @var string
     */
    public $appCenterImageId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description This parameter is required.
     *
     * @example Node
     *
     * @var string
     */
    public $chargeResourceMode;

    /**
     * @description This parameter is required.
     *
     * @example PrePaid
     *
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
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example cag-b2ron*******
     *
     * @var string
     */
    public $preOpenAppId;

    /**
     * @description This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @example 17440009****
     *
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
     * @description This parameter is required.
     *
     * @example 15
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }
        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
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
            $res['Users'] = $this->users;
        }
        if (null !== $this->videoPolicyShrink) {
            $res['VideoPolicy'] = $this->videoPolicyShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppInstanceGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }
        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
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
                $model->users = $map['Users'];
            }
        }
        if (isset($map['VideoPolicy'])) {
            $model->videoPolicyShrink = $map['VideoPolicy'];
        }

        return $model;
    }
}
