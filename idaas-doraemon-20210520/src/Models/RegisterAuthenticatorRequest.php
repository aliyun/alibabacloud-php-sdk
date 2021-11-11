<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class RegisterAuthenticatorRequest extends Model
{
    /**
     * @description 应用外部Id
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description 认证器名字
     *
     * @var string
     */
    public $authenticatorName;

    /**
     * @description 认证器类型
     *
     * @var string
     */
    public $authenticatorType;

    /**
     * @description 客户端SDK生成认证上下文
     *
     * @var string
     */
    public $clientExtendParamsJson;

    /**
     * @description 客户端SDK生成认证上下文签名信息
     *
     * @var string
     */
    public $clientExtendParamsJsonSign;

    /**
     * @description 用户自定义记录审计日志信息
     *
     * @var string
     */
    public $logParams;

    /**
     * @description 注册上下文
     *
     * @var string
     */
    public $registrationContext;

    /**
     * @description 会话绑定的challenge base64标识
     *
     * @var string
     */
    public $requireChallengeBase64;

    /**
     * @description 服务端配置项，决定认证要求属性
     *
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @description 用户id
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户端来源IP地址，用于审计
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
