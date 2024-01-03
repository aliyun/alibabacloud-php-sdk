<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorOpsLogsResponseBody;

use AlibabaCloud\Tea\Model;

class authenticationLogContent extends Model
{
    /**
     * @example 1218758215717204
     *
     * @var string
     */
    public $aliUid;

    /**
     * @example webauth_demo
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @example 2bba0564edce2ff90c544dc623d1c1f5iPpCGAqTioA
     *
     * @var string
     */
    public $applicationUuid;

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
     * @example 0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @example exfa
     *
     * @var string
     */
    public $challengeBase64;

    /**
     * @example scimcred-00t3zfhiy2ylzvm2i287
     *
     * @var string
     */
    public $credentialId;

    /**
     * @example Failed
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example user not exist, alipayId=2088022534411015
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 1
     *
     * @var string
     */
    public $logParams;

    /**
     * @example ListTagResources
     *
     * @var string
     */
    public $operationAction;

    /**
     * @example True
     *
     * @var bool
     */
    public $operationResult;

    /**
     * @example 1647309893086
     *
     * @var int
     */
    public $operationTime;

    /**
     * @var string
     */
    public $rawContext;

    /**
     * @example ed0222867189ad2bacfa746843d4b9692mlWC9sU3zl
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 10.13.1.56
     *
     * @var string
     */
    public $userAgent;

    /**
     * @example 3b323
     *
     * @var string
     */
    public $userId;

    /**
     * @example 10.13.1.56
     *
     * @var string
     */
    public $userSourceIp;
    protected $_name = [
        'aliUid'                => 'AliUid',
        'applicationExternalId' => 'ApplicationExternalId',
        'applicationUuid'       => 'ApplicationUuid',
        'authenticatorName'     => 'AuthenticatorName',
        'authenticatorType'     => 'AuthenticatorType',
        'authenticatorUuid'     => 'AuthenticatorUuid',
        'challengeBase64'       => 'ChallengeBase64',
        'credentialId'          => 'CredentialId',
        'errorCode'             => 'ErrorCode',
        'errorMessage'          => 'ErrorMessage',
        'logParams'             => 'LogParams',
        'operationAction'       => 'OperationAction',
        'operationResult'       => 'OperationResult',
        'operationTime'         => 'OperationTime',
        'rawContext'            => 'RawContext',
        'tenantId'              => 'TenantId',
        'userAgent'             => 'UserAgent',
        'userId'                => 'UserId',
        'userSourceIp'          => 'UserSourceIp',
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
        if (null !== $this->operationAction) {
            $res['OperationAction'] = $this->operationAction;
        }
        if (null !== $this->operationResult) {
            $res['OperationResult'] = $this->operationResult;
        }
        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }
        if (null !== $this->rawContext) {
            $res['RawContext'] = $this->rawContext;
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
        if (isset($map['OperationAction'])) {
            $model->operationAction = $map['OperationAction'];
        }
        if (isset($map['OperationResult'])) {
            $model->operationResult = $map['OperationResult'];
        }
        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }
        if (isset($map['RawContext'])) {
            $model->rawContext = $map['RawContext'];
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

        return $model;
    }
}
