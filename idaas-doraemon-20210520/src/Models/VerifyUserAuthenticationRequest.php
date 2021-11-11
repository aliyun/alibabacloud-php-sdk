<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class VerifyUserAuthenticationRequest extends Model
{
    /**
     * @description 应用外部Id
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description 认证上下文，由AuthenticatorType决定格式
     *
     * @var string
     */
    public $authenticationContext;

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
     * @description 用户自定义记录审计日志标签
     *
     * @var string
     */
    public $logTag;

    /**
     * @description 认证绑定的操作hash base64标识
     *
     * @var string
     */
    public $requireBindHashBase64;

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
