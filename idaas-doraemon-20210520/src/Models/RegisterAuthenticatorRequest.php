<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class RegisterAuthenticatorRequest extends Model
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
     * @example ZhangSan\\"s authenticator
     *
     * @var string
     */
    public $authenticatorName;

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
     * @description This parameter is required.
     *
     * @example {}
     *
     * @var string
     */
    public $registrationContext;

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
        'authenticatorName'          => 'AuthenticatorName',
        'authenticatorType'          => 'AuthenticatorType',
        'clientExtendParamsJson'     => 'ClientExtendParamsJson',
        'clientExtendParamsJsonSign' => 'ClientExtendParamsJsonSign',
        'logParams'                  => 'LogParams',
        'registrationContext'        => 'RegistrationContext',
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
        if (null !== $this->authenticatorName) {
            $res['AuthenticatorName'] = $this->authenticatorName;
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
        if (null !== $this->registrationContext) {
            $res['RegistrationContext'] = $this->registrationContext;
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
     * @return RegisterAuthenticatorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['AuthenticatorName'])) {
            $model->authenticatorName = $map['AuthenticatorName'];
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
        if (isset($map['RegistrationContext'])) {
            $model->registrationContext = $map['RegistrationContext'];
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
