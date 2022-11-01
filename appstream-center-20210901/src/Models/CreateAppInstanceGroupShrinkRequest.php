<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

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
    public $productType;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var string
     */
    public $userInfoShrink;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'appCenterImageId'     => 'AppCenterImageId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'bizRegionId'          => 'BizRegionId',
        'chargeResourceMode'   => 'ChargeResourceMode',
        'chargeType'           => 'ChargeType',
        'nodePoolShrink'       => 'NodePool',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'productType'          => 'ProductType',
        'promotionId'          => 'PromotionId',
        'sessionTimeout'       => 'SessionTimeout',
        'userInfoShrink'       => 'UserInfo',
        'users'                => 'Users',
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
        if (null !== $this->nodePoolShrink) {
            $res['NodePool'] = $this->nodePoolShrink;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
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
        if (isset($map['NodePool'])) {
            $model->nodePoolShrink = $map['NodePool'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
