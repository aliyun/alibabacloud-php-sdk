<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetUserResourceStatusResponseBody extends Model
{
    /**
     * @description 现金账户余额
     *
     * @var float
     */
    public $accountBalance;

    /**
     * @description 金额是否充足
     *
     * @var bool
     */
    public $accountSufficient;

    /**
     * @description 充值页面
     *
     * @var string
     */
    public $accountTopUpPage;

    /**
     * @description 授权页面
     *
     * @var string
     */
    public $allAuthorizationPage;

    /**
     * @description 代金券余额
     *
     * @var float
     */
    public $couponBalance;

    /**
     * @description 环境
     *
     * @var string
     */
    public $env;

    /**
     * @description 是否通过购买条件验证
     *
     * @var bool
     */
    public $hasAllAuthorization;

    /**
     * @description 是否国际站账号
     *
     * @var bool
     */
    public $international;

    /**
     * @description 是否实名验证
     *
     * @var bool
     */
    public $realNameVerified;

    /**
     * @description 实名验证页面
     *
     * @var string
     */
    public $realNameVerifiedPage;

    /**
     * @description 地区
     *
     * @var string
     */
    public $region;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总余额
     *
     * @var float
     */
    public $totalBalance;
    protected $_name = [
        'accountBalance'       => 'AccountBalance',
        'accountSufficient'    => 'AccountSufficient',
        'accountTopUpPage'     => 'AccountTopUpPage',
        'allAuthorizationPage' => 'AllAuthorizationPage',
        'couponBalance'        => 'CouponBalance',
        'env'                  => 'Env',
        'hasAllAuthorization'  => 'HasAllAuthorization',
        'international'        => 'International',
        'realNameVerified'     => 'RealNameVerified',
        'realNameVerifiedPage' => 'RealNameVerifiedPage',
        'region'               => 'Region',
        'requestId'            => 'RequestId',
        'totalBalance'         => 'TotalBalance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountBalance) {
            $res['AccountBalance'] = $this->accountBalance;
        }
        if (null !== $this->accountSufficient) {
            $res['AccountSufficient'] = $this->accountSufficient;
        }
        if (null !== $this->accountTopUpPage) {
            $res['AccountTopUpPage'] = $this->accountTopUpPage;
        }
        if (null !== $this->allAuthorizationPage) {
            $res['AllAuthorizationPage'] = $this->allAuthorizationPage;
        }
        if (null !== $this->couponBalance) {
            $res['CouponBalance'] = $this->couponBalance;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->hasAllAuthorization) {
            $res['HasAllAuthorization'] = $this->hasAllAuthorization;
        }
        if (null !== $this->international) {
            $res['International'] = $this->international;
        }
        if (null !== $this->realNameVerified) {
            $res['RealNameVerified'] = $this->realNameVerified;
        }
        if (null !== $this->realNameVerifiedPage) {
            $res['RealNameVerifiedPage'] = $this->realNameVerifiedPage;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalBalance) {
            $res['TotalBalance'] = $this->totalBalance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserResourceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountBalance'])) {
            $model->accountBalance = $map['AccountBalance'];
        }
        if (isset($map['AccountSufficient'])) {
            $model->accountSufficient = $map['AccountSufficient'];
        }
        if (isset($map['AccountTopUpPage'])) {
            $model->accountTopUpPage = $map['AccountTopUpPage'];
        }
        if (isset($map['AllAuthorizationPage'])) {
            $model->allAuthorizationPage = $map['AllAuthorizationPage'];
        }
        if (isset($map['CouponBalance'])) {
            $model->couponBalance = $map['CouponBalance'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['HasAllAuthorization'])) {
            $model->hasAllAuthorization = $map['HasAllAuthorization'];
        }
        if (isset($map['International'])) {
            $model->international = $map['International'];
        }
        if (isset($map['RealNameVerified'])) {
            $model->realNameVerified = $map['RealNameVerified'];
        }
        if (isset($map['RealNameVerifiedPage'])) {
            $model->realNameVerifiedPage = $map['RealNameVerifiedPage'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalBalance'])) {
            $model->totalBalance = $map['TotalBalance'];
        }

        return $model;
    }
}
