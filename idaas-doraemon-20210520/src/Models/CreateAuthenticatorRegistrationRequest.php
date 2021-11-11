<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthenticatorRegistrationRequest extends Model
{
    /**
     * @description 应用外部Id
     *
     * @var string
     */
    public $applicationExternalId;

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
     * @description 注册上下文
     *
     * @var string
     */
    public $registrationContext;

    /**
     * @description 服务端配置项，决定认证要求属性
     *
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @description 用户展示名
     *
     * @var string
     */
    public $userDisplayName;

    /**
     * @description 用户id
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户姓名
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'applicationExternalId'      => 'ApplicationExternalId',
        'authenticatorType'          => 'AuthenticatorType',
        'clientExtendParamsJson'     => 'ClientExtendParamsJson',
        'clientExtendParamsJsonSign' => 'ClientExtendParamsJsonSign',
        'registrationContext'        => 'RegistrationContext',
        'serverExtendParamsJson'     => 'ServerExtendParamsJson',
        'userDisplayName'            => 'UserDisplayName',
        'userId'                     => 'UserId',
        'userName'                   => 'UserName',
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
        if (null !== $this->authenticatorType) {
            $res['AuthenticatorType'] = $this->authenticatorType;
        }
        if (null !== $this->clientExtendParamsJson) {
            $res['ClientExtendParamsJson'] = $this->clientExtendParamsJson;
        }
        if (null !== $this->clientExtendParamsJsonSign) {
            $res['ClientExtendParamsJsonSign'] = $this->clientExtendParamsJsonSign;
        }
        if (null !== $this->registrationContext) {
            $res['RegistrationContext'] = $this->registrationContext;
        }
        if (null !== $this->serverExtendParamsJson) {
            $res['ServerExtendParamsJson'] = $this->serverExtendParamsJson;
        }
        if (null !== $this->userDisplayName) {
            $res['UserDisplayName'] = $this->userDisplayName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthenticatorRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
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
        if (isset($map['RegistrationContext'])) {
            $model->registrationContext = $map['RegistrationContext'];
        }
        if (isset($map['ServerExtendParamsJson'])) {
            $model->serverExtendParamsJson = $map['ServerExtendParamsJson'];
        }
        if (isset($map['UserDisplayName'])) {
            $model->userDisplayName = $map['UserDisplayName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
