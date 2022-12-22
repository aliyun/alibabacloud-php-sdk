<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class ConfirmConfigurationOrderRequest extends Model
{
    /**
     * @description aliyunKp
     *
     * @example 123
     *
     * @var string
     */
    public $aliyunKp;

    /**
     * @description aliyunKpLong
     *
     * @example 123
     *
     * @var int
     */
    public $aliyunKpLong;

    /**
     * @description bid
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @description callerParentId
     *
     * @example 1654319633766437
     *
     * @var int
     */
    public $callerParentId;

    /**
     * @description callerSecurityTransport
     *
     * @example 123
     *
     * @var bool
     */
    public $callerSecurityTransport;

    /**
     * @description callerType
     *
     * @example product
     *
     * @var string
     */
    public $callerType;

    /**
     * @description clientIp
     *
     * @example 121.69.40.14
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description configurationId
     *
     * @example f86b33a0b6bbefd9f44db95c30df0cd2
     *
     * @var int
     */
    public $configurationId;

    /**
     * @description lang
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description mfaPresent
     *
     * @example true
     *
     * @var bool
     */
    public $mfaPresent;

    /**
     * @description originalRequest
     *
     * @example 123
     *
     * @var string
     */
    public $originalRequest;

    /**
     * @description popAction
     *
     * @example QuerySmsPackage
     *
     * @var string
     */
    public $popAction;

    /**
     * @description proxyCallerIp
     *
     * @example 123
     *
     * @var string
     */
    public $proxyCallerIp;

    /**
     * @description proxyCallerSecurityTransport
     *
     * @example 123
     *
     * @var bool
     */
    public $proxyCallerSecurityTransport;

    /**
     * @description proxyTrustTransportInfo
     *
     * @example 123
     *
     * @var bool
     */
    public $proxyTrustTransportInfo;

    /**
     * @description requestId
     *
     * @example E5CD23E6-2EF2-563F-B38B-F49AF089B028
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description stsTokenCallerBid
     *
     * @example 123
     *
     * @var int
     */
    public $stsTokenCallerBid;

    /**
     * @description stsTokenCallerUid
     *
     * @example 123
     *
     * @var int
     */
    public $stsTokenCallerUid;

    /**
     * @description userBid
     *
     * @example 122
     *
     * @var string
     */
    public $userBid;

    /**
     * @description userCallerParentId
     *
     * @example 244
     *
     * @var int
     */
    public $userCallerParentId;

    /**
     * @description userCallerSecurityTransport
     *
     * @example 234
     *
     * @var bool
     */
    public $userCallerSecurityTransport;

    /**
     * @description userCallerType
     *
     * @example 345
     *
     * @var string
     */
    public $userCallerType;

    /**
     * @description userClientIp
     *
     * @example 345
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description userKp
     *
     * @example 123
     *
     * @var string
     */
    public $userKp;

    /**
     * @description userMfaPresent
     *
     * @example 123
     *
     * @var bool
     */
    public $userMfaPresent;

    /**
     * @description userSecurityToken
     *
     * @example 234
     *
     * @var string
     */
    public $userSecurityToken;
    protected $_name = [
        'aliyunKp'                     => 'AliyunKp',
        'aliyunKpLong'                 => 'AliyunKpLong',
        'bid'                          => 'Bid',
        'callerParentId'               => 'CallerParentId',
        'callerSecurityTransport'      => 'CallerSecurityTransport',
        'callerType'                   => 'CallerType',
        'clientIp'                     => 'ClientIp',
        'configurationId'              => 'ConfigurationId',
        'lang'                         => 'Lang',
        'mfaPresent'                   => 'MfaPresent',
        'originalRequest'              => 'OriginalRequest',
        'popAction'                    => 'PopAction',
        'proxyCallerIp'                => 'ProxyCallerIp',
        'proxyCallerSecurityTransport' => 'ProxyCallerSecurityTransport',
        'proxyTrustTransportInfo'      => 'ProxyTrustTransportInfo',
        'requestId'                    => 'RequestId',
        'securityToken'                => 'SecurityToken',
        'stsTokenCallerBid'            => 'StsTokenCallerBid',
        'stsTokenCallerUid'            => 'StsTokenCallerUid',
        'userBid'                      => 'UserBid',
        'userCallerParentId'           => 'UserCallerParentId',
        'userCallerSecurityTransport'  => 'UserCallerSecurityTransport',
        'userCallerType'               => 'UserCallerType',
        'userClientIp'                 => 'UserClientIp',
        'userKp'                       => 'UserKp',
        'userMfaPresent'               => 'UserMfaPresent',
        'userSecurityToken'            => 'UserSecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunKp) {
            $res['AliyunKp'] = $this->aliyunKp;
        }
        if (null !== $this->aliyunKpLong) {
            $res['AliyunKpLong'] = $this->aliyunKpLong;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }
        if (null !== $this->callerSecurityTransport) {
            $res['CallerSecurityTransport'] = $this->callerSecurityTransport;
        }
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->configurationId) {
            $res['ConfigurationId'] = $this->configurationId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->mfaPresent) {
            $res['MfaPresent'] = $this->mfaPresent;
        }
        if (null !== $this->originalRequest) {
            $res['OriginalRequest'] = $this->originalRequest;
        }
        if (null !== $this->popAction) {
            $res['PopAction'] = $this->popAction;
        }
        if (null !== $this->proxyCallerIp) {
            $res['ProxyCallerIp'] = $this->proxyCallerIp;
        }
        if (null !== $this->proxyCallerSecurityTransport) {
            $res['ProxyCallerSecurityTransport'] = $this->proxyCallerSecurityTransport;
        }
        if (null !== $this->proxyTrustTransportInfo) {
            $res['ProxyTrustTransportInfo'] = $this->proxyTrustTransportInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->stsTokenCallerBid) {
            $res['StsTokenCallerBid'] = $this->stsTokenCallerBid;
        }
        if (null !== $this->stsTokenCallerUid) {
            $res['StsTokenCallerUid'] = $this->stsTokenCallerUid;
        }
        if (null !== $this->userBid) {
            $res['UserBid'] = $this->userBid;
        }
        if (null !== $this->userCallerParentId) {
            $res['UserCallerParentId'] = $this->userCallerParentId;
        }
        if (null !== $this->userCallerSecurityTransport) {
            $res['UserCallerSecurityTransport'] = $this->userCallerSecurityTransport;
        }
        if (null !== $this->userCallerType) {
            $res['UserCallerType'] = $this->userCallerType;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->userKp) {
            $res['UserKp'] = $this->userKp;
        }
        if (null !== $this->userMfaPresent) {
            $res['UserMfaPresent'] = $this->userMfaPresent;
        }
        if (null !== $this->userSecurityToken) {
            $res['UserSecurityToken'] = $this->userSecurityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmConfigurationOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunKp'])) {
            $model->aliyunKp = $map['AliyunKp'];
        }
        if (isset($map['AliyunKpLong'])) {
            $model->aliyunKpLong = $map['AliyunKpLong'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }
        if (isset($map['CallerSecurityTransport'])) {
            $model->callerSecurityTransport = $map['CallerSecurityTransport'];
        }
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ConfigurationId'])) {
            $model->configurationId = $map['ConfigurationId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MfaPresent'])) {
            $model->mfaPresent = $map['MfaPresent'];
        }
        if (isset($map['OriginalRequest'])) {
            $model->originalRequest = $map['OriginalRequest'];
        }
        if (isset($map['PopAction'])) {
            $model->popAction = $map['PopAction'];
        }
        if (isset($map['ProxyCallerIp'])) {
            $model->proxyCallerIp = $map['ProxyCallerIp'];
        }
        if (isset($map['ProxyCallerSecurityTransport'])) {
            $model->proxyCallerSecurityTransport = $map['ProxyCallerSecurityTransport'];
        }
        if (isset($map['ProxyTrustTransportInfo'])) {
            $model->proxyTrustTransportInfo = $map['ProxyTrustTransportInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StsTokenCallerBid'])) {
            $model->stsTokenCallerBid = $map['StsTokenCallerBid'];
        }
        if (isset($map['StsTokenCallerUid'])) {
            $model->stsTokenCallerUid = $map['StsTokenCallerUid'];
        }
        if (isset($map['UserBid'])) {
            $model->userBid = $map['UserBid'];
        }
        if (isset($map['UserCallerParentId'])) {
            $model->userCallerParentId = $map['UserCallerParentId'];
        }
        if (isset($map['UserCallerSecurityTransport'])) {
            $model->userCallerSecurityTransport = $map['UserCallerSecurityTransport'];
        }
        if (isset($map['UserCallerType'])) {
            $model->userCallerType = $map['UserCallerType'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['UserKp'])) {
            $model->userKp = $map['UserKp'];
        }
        if (isset($map['UserMfaPresent'])) {
            $model->userMfaPresent = $map['UserMfaPresent'];
        }
        if (isset($map['UserSecurityToken'])) {
            $model->userSecurityToken = $map['UserSecurityToken'];
        }

        return $model;
    }
}
