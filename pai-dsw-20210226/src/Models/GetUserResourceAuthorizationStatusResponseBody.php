<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetUserResourceAuthorizationStatusResponseBody extends Model
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
     * @description 授权开通页面
     *
     * @var string
     */
    public $allAuthorizationPage;

    /**
     * @description 购买页
     *
     * @var string
     */
    public $buyPage;

    /**
     * @description 代金券金额
     *
     * @var float
     */
    public $couponBalance;

    /**
     * @description 当前版本
     *
     * @var string
     */
    public $currentFeatureVersion;

    /**
     * @description 是否禁止金额验证
     *
     * @var bool
     */
    public $disableBalanceCheck;

    /**
     * @description dsw默认角色授权页面
     *
     * @var string
     */
    public $dswDefaultAuthorizationPage;

    /**
     * @description 环境
     *
     * @var string
     */
    public $env;

    /**
     * @description ess开通页面
     *
     * @var string
     */
    public $essConsolePage;

    /**
     * @description ess是否开通
     *
     * @var bool
     */
    public $essServiceAvailable;

    /**
     * @description 是否通过购买验证
     *
     * @var bool
     */
    public $hasAllAuthorization;

    /**
     * @description 是否通过授权验证
     *
     * @var bool
     */
    public $hasDswDefaultAuthorization;

    /**
     * @description 是否国际站账号
     *
     * @var bool
     */
    public $international;

    /**
     * @description 是否子账号登录
     *
     * @var bool
     */
    public $isSubUser;

    /**
     * @description nas控制台
     *
     * @var string
     */
    public $nasConsolePage;

    /**
     * @description 是否实名认证
     *
     * @var bool
     */
    public $realNameVerified;

    /**
     * @description 实名认证页面
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
     * @description 子账号授权开通页面
     *
     * @var string
     */
    public $subUserAuthorizationPage;

    /**
     * @description 子账号是否授权通过
     *
     * @var bool
     */
    public $subUserAuthorized;

    /**
     * @description 总金额
     *
     * @var float
     */
    public $totalBalance;
    protected $_name = [
        'accountBalance'              => 'AccountBalance',
        'accountSufficient'           => 'AccountSufficient',
        'accountTopUpPage'            => 'AccountTopUpPage',
        'allAuthorizationPage'        => 'AllAuthorizationPage',
        'buyPage'                     => 'BuyPage',
        'couponBalance'               => 'CouponBalance',
        'currentFeatureVersion'       => 'CurrentFeatureVersion',
        'disableBalanceCheck'         => 'DisableBalanceCheck',
        'dswDefaultAuthorizationPage' => 'DswDefaultAuthorizationPage',
        'env'                         => 'Env',
        'essConsolePage'              => 'EssConsolePage',
        'essServiceAvailable'         => 'EssServiceAvailable',
        'hasAllAuthorization'         => 'HasAllAuthorization',
        'hasDswDefaultAuthorization'  => 'HasDswDefaultAuthorization',
        'international'               => 'International',
        'isSubUser'                   => 'IsSubUser',
        'nasConsolePage'              => 'NasConsolePage',
        'realNameVerified'            => 'RealNameVerified',
        'realNameVerifiedPage'        => 'RealNameVerifiedPage',
        'region'                      => 'Region',
        'requestId'                   => 'RequestId',
        'subUserAuthorizationPage'    => 'SubUserAuthorizationPage',
        'subUserAuthorized'           => 'SubUserAuthorized',
        'totalBalance'                => 'TotalBalance',
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
        if (null !== $this->buyPage) {
            $res['BuyPage'] = $this->buyPage;
        }
        if (null !== $this->couponBalance) {
            $res['CouponBalance'] = $this->couponBalance;
        }
        if (null !== $this->currentFeatureVersion) {
            $res['CurrentFeatureVersion'] = $this->currentFeatureVersion;
        }
        if (null !== $this->disableBalanceCheck) {
            $res['DisableBalanceCheck'] = $this->disableBalanceCheck;
        }
        if (null !== $this->dswDefaultAuthorizationPage) {
            $res['DswDefaultAuthorizationPage'] = $this->dswDefaultAuthorizationPage;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->essConsolePage) {
            $res['EssConsolePage'] = $this->essConsolePage;
        }
        if (null !== $this->essServiceAvailable) {
            $res['EssServiceAvailable'] = $this->essServiceAvailable;
        }
        if (null !== $this->hasAllAuthorization) {
            $res['HasAllAuthorization'] = $this->hasAllAuthorization;
        }
        if (null !== $this->hasDswDefaultAuthorization) {
            $res['HasDswDefaultAuthorization'] = $this->hasDswDefaultAuthorization;
        }
        if (null !== $this->international) {
            $res['International'] = $this->international;
        }
        if (null !== $this->isSubUser) {
            $res['IsSubUser'] = $this->isSubUser;
        }
        if (null !== $this->nasConsolePage) {
            $res['NasConsolePage'] = $this->nasConsolePage;
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
        if (null !== $this->subUserAuthorizationPage) {
            $res['SubUserAuthorizationPage'] = $this->subUserAuthorizationPage;
        }
        if (null !== $this->subUserAuthorized) {
            $res['SubUserAuthorized'] = $this->subUserAuthorized;
        }
        if (null !== $this->totalBalance) {
            $res['TotalBalance'] = $this->totalBalance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserResourceAuthorizationStatusResponseBody
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
        if (isset($map['BuyPage'])) {
            $model->buyPage = $map['BuyPage'];
        }
        if (isset($map['CouponBalance'])) {
            $model->couponBalance = $map['CouponBalance'];
        }
        if (isset($map['CurrentFeatureVersion'])) {
            $model->currentFeatureVersion = $map['CurrentFeatureVersion'];
        }
        if (isset($map['DisableBalanceCheck'])) {
            $model->disableBalanceCheck = $map['DisableBalanceCheck'];
        }
        if (isset($map['DswDefaultAuthorizationPage'])) {
            $model->dswDefaultAuthorizationPage = $map['DswDefaultAuthorizationPage'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['EssConsolePage'])) {
            $model->essConsolePage = $map['EssConsolePage'];
        }
        if (isset($map['EssServiceAvailable'])) {
            $model->essServiceAvailable = $map['EssServiceAvailable'];
        }
        if (isset($map['HasAllAuthorization'])) {
            $model->hasAllAuthorization = $map['HasAllAuthorization'];
        }
        if (isset($map['HasDswDefaultAuthorization'])) {
            $model->hasDswDefaultAuthorization = $map['HasDswDefaultAuthorization'];
        }
        if (isset($map['International'])) {
            $model->international = $map['International'];
        }
        if (isset($map['IsSubUser'])) {
            $model->isSubUser = $map['IsSubUser'];
        }
        if (isset($map['NasConsolePage'])) {
            $model->nasConsolePage = $map['NasConsolePage'];
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
        if (isset($map['SubUserAuthorizationPage'])) {
            $model->subUserAuthorizationPage = $map['SubUserAuthorizationPage'];
        }
        if (isset($map['SubUserAuthorized'])) {
            $model->subUserAuthorized = $map['SubUserAuthorized'];
        }
        if (isset($map['TotalBalance'])) {
            $model->totalBalance = $map['TotalBalance'];
        }

        return $model;
    }
}
