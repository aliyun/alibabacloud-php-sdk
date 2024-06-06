<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class VerifyUserAuthenticationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11122223333
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description This parameter is required.
     *
     * @example {}
     *
     * @var string
     */
    public $authenticationContext;

    /**
     * @description This parameter is required.
     *
     * @example webauthn
     *
     * @var string
     */
    public $authenticatorType;

    /**
     * @example 由具体认证方式决定
     *
     * @var string
     */
    public $clientExtendParamsJson;

    /**
     * @example 由具体认证方式决定
     *
     * @var string
     */
    public $clientExtendParamsJsonSign;

    /**
     * @example 123123
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
     * @example AAAAdda
     *
     * @var string
     */
    public $requireBindHashBase64;

    /**
     * @example AAAAdda
     *
     * @var string
     */
    public $requireChallengeBase64;

    /**
     * @example 由具体认证方式决定
     *
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @description This parameter is required.
     *
     * @example user-11122223333
     *
     * @var string
     */
    public $userId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userSourceIp;
    protected $_name = [
        'applicationExternalId'      => 'ApplicationExternalId',
        'authenticationContext'      => 'AuthenticationContext',
        'authenticatorType'          => 'AuthenticatorType',
        'clientExtendParamsJson'     => 'ClientExtendParamsJson',
        'clientExtendParamsJsonSign' => 'ClientExtendParamsJsonSign',
        'logParams'                  => 'LogParams',
        'logTag'                     => 'LogTag',
        'requireBindHashBase64'      => 'RequireBindHashBase64',
        'requireChallengeBase64'     => 'RequireChallengeBase64',
        'serverExtendParamsJson'     => 'ServerExtendParamsJson',
        'userId'                     => 'UserId',
        'userSourceIp'               => 'UserSourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->authenticationContext) {
            $res['AuthenticationContext'] = $this->authenticationContext;
        }
        if (null !== $this->authenticatorType) {
            $res['AuthenticatorType'] = $this->authenticatorType;
        }
        if (null !== $this->clientExtendParamsJson) {
            $res['ClientExtendParamsJson'] = $this->clientExtendParamsJson;
        }
        if (null !== $this->clientExtendParamsJsonSign) {
            $res['ClientExtendParamsJsonSign'] = $this->clientExtendParamsJsonSign;
        }
        if (null !== $this->logParams) {
            $res['LogParams'] = $this->logParams;
        }
        if (null !== $this->logTag) {
            $res['LogTag'] = $this->logTag;
        }
        if (null !== $this->requireBindHashBase64) {
            $res['RequireBindHashBase64'] = $this->requireBindHashBase64;
        }
        if (null !== $this->requireChallengeBase64) {
            $res['RequireChallengeBase64'] = $this->requireChallengeBase64;
        }
        if (null !== $this->serverExtendParamsJson) {
            $res['ServerExtendParamsJson'] = $this->serverExtendParamsJson;
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
     * @return VerifyUserAuthenticationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['AuthenticationContext'])) {
            $model->authenticationContext = $map['AuthenticationContext'];
        }
        if (isset($map['AuthenticatorType'])) {
            $model->authenticatorType = $map['AuthenticatorType'];
        }
        if (isset($map['ClientExtendParamsJson'])) {
            $model->clientExtendParamsJson = $map['ClientExtendParamsJson'];
        }
        if (isset($map['ClientExtendParamsJsonSign'])) {
            $model->clientExtendParamsJsonSign = $map['ClientExtendParamsJsonSign'];
        }
        if (isset($map['LogParams'])) {
            $model->logParams = $map['LogParams'];
        }
        if (isset($map['LogTag'])) {
            $model->logTag = $map['LogTag'];
        }
        if (isset($map['RequireBindHashBase64'])) {
            $model->requireBindHashBase64 = $map['RequireBindHashBase64'];
        }
        if (isset($map['RequireChallengeBase64'])) {
            $model->requireChallengeBase64 = $map['RequireChallengeBase64'];
        }
        if (isset($map['ServerExtendParamsJson'])) {
            $model->serverExtendParamsJson = $map['ServerExtendParamsJson'];
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
