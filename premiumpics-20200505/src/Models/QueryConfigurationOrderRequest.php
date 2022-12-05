<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class QueryConfigurationOrderRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunKp;

    /**
     * @var int
     */
    public $aliyunKpLong;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var int
     */
    public $callerParentId;

    /**
     * @var bool
     */
    public $callerSecurityTransport;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $configurationId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $mfaPresent;

    /**
     * @var string
     */
    public $originalRequest;

    /**
     * @var string
     */
    public $popAction;

    /**
     * @var string
     */
    public $proxyCallerIp;

    /**
     * @var bool
     */
    public $proxyCallerSecurityTransport;

    /**
     * @var bool
     */
    public $proxyTrustTransportInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $stsTokenCallerBid;

    /**
     * @var int
     */
    public $stsTokenCallerUid;

    /**
     * @var string
     */
    public $userBid;

    /**
     * @var int
     */
    public $userCallerParentId;

    /**
     * @var bool
     */
    public $userCallerSecurityTransport;

    /**
     * @var string
     */
    public $userCallerType;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $userKp;

    /**
     * @var bool
     */
    public $userMfaPresent;

    /**
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
     * @return QueryConfigurationOrderRequest
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
