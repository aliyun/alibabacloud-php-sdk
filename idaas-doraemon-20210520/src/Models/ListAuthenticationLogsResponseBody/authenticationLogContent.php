<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticationLogsResponseBody;

use AlibabaCloud\Tea\Model;

class authenticationLogContent extends Model
{
    /**
     * @example 1588301417442737
     *
     * @var string
     */
    public $aliUid;

    /**
     * @example sms_auth
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @example 0b6ba5da7bd4cef233ae7b48b5e5dcc1yx9aipQp0hD
     *
     * @var string
     */
    public $applicationUuid;

    /**
     * @example send
     *
     * @var string
     */
    public $authenticationAction;

    /**
     * @example 1647233491138
     *
     * @var int
     */
    public $authenticationTime;

    /**
     * @example TOTP-DefaultName
     *
     * @var string
     */
    public $authenticatorName;

    /**
     * @example TOTP
     *
     * @var string
     */
    public $authenticatorType;

    /**
     * @example c810731ad3af06e45171395abf19cf9cb00E7i97PhE
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @example 3519
     *
     * @var string
     */
    public $challengeBase64;

    /**
     * @example scimcred-00w9gcvpwueg7geg1a87
     *
     * @var string
     */
    public $credentialId;

    /**
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Request was denied due to business check permission
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example khj
     *
     * @var string
     */
    public $logParams;

    /**
     * @example login
     *
     * @var string
     */
    public $logTag;

    /**
     * @example {"name":"lili"}
     *
     * @var string
     */
    public $rawAuthenticationContext;

    /**
     * @example 8cefc5fe5d10dffffdcff011a6b34a863hHmgm0SIrh
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example aoxis
     *
     * @var string
     */
    public $userAgent;

    /**
     * @example xhtseqml
     *
     * @var string
     */
    public $userId;

    /**
     * @example 10.23.11.56
     *
     * @var string
     */
    public $userSourceIp;

    /**
     * @example true
     *
     * @var bool
     */
    public $verifyResult;
    protected $_name = [
        'aliUid'                   => 'AliUid',
        'applicationExternalId'    => 'ApplicationExternalId',
        'applicationUuid'          => 'ApplicationUuid',
        'authenticationAction'     => 'AuthenticationAction',
        'authenticationTime'       => 'AuthenticationTime',
        'authenticatorName'        => 'AuthenticatorName',
        'authenticatorType'        => 'AuthenticatorType',
        'authenticatorUuid'        => 'AuthenticatorUuid',
        'challengeBase64'          => 'ChallengeBase64',
        'credentialId'             => 'CredentialId',
        'errorCode'                => 'ErrorCode',
        'errorMessage'             => 'ErrorMessage',
        'logParams'                => 'LogParams',
        'logTag'                   => 'LogTag',
        'rawAuthenticationContext' => 'RawAuthenticationContext',
        'tenantId'                 => 'TenantId',
        'userAgent'                => 'UserAgent',
        'userId'                   => 'UserId',
        'userSourceIp'             => 'UserSourceIp',
        'verifyResult'             => 'VerifyResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->applicationUuid) {
            $res['ApplicationUuid'] = $this->applicationUuid;
        }
        if (null !== $this->authenticationAction) {
            $res['AuthenticationAction'] = $this->authenticationAction;
        }
        if (null !== $this->authenticationTime) {
            $res['AuthenticationTime'] = $this->authenticationTime;
        }
        if (null !== $this->authenticatorName) {
            $res['AuthenticatorName'] = $this->authenticatorName;
        }
        if (null !== $this->authenticatorType) {
            $res['AuthenticatorType'] = $this->authenticatorType;
        }
        if (null !== $this->authenticatorUuid) {
            $res['AuthenticatorUuid'] = $this->authenticatorUuid;
        }
        if (null !== $this->challengeBase64) {
            $res['ChallengeBase64'] = $this->challengeBase64;
        }
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->logParams) {
            $res['LogParams'] = $this->logParams;
        }
        if (null !== $this->logTag) {
            $res['LogTag'] = $this->logTag;
        }
        if (null !== $this->rawAuthenticationContext) {
            $res['RawAuthenticationContext'] = $this->rawAuthenticationContext;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userAgent) {
            $res['UserAgent'] = $this->userAgent;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userSourceIp) {
            $res['UserSourceIp'] = $this->userSourceIp;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authenticationLogContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['ApplicationUuid'])) {
            $model->applicationUuid = $map['ApplicationUuid'];
        }
        if (isset($map['AuthenticationAction'])) {
            $model->authenticationAction = $map['AuthenticationAction'];
        }
        if (isset($map['AuthenticationTime'])) {
            $model->authenticationTime = $map['AuthenticationTime'];
        }
        if (isset($map['AuthenticatorName'])) {
            $model->authenticatorName = $map['AuthenticatorName'];
        }
        if (isset($map['AuthenticatorType'])) {
            $model->authenticatorType = $map['AuthenticatorType'];
        }
        if (isset($map['AuthenticatorUuid'])) {
            $model->authenticatorUuid = $map['AuthenticatorUuid'];
        }
        if (isset($map['ChallengeBase64'])) {
            $model->challengeBase64 = $map['ChallengeBase64'];
        }
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['LogParams'])) {
            $model->logParams = $map['LogParams'];
        }
        if (isset($map['LogTag'])) {
            $model->logTag = $map['LogTag'];
        }
        if (isset($map['RawAuthenticationContext'])) {
            $model->rawAuthenticationContext = $map['RawAuthenticationContext'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserAgent'])) {
            $model->userAgent = $map['UserAgent'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserSourceIp'])) {
            $model->userSourceIp = $map['UserSourceIp'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
