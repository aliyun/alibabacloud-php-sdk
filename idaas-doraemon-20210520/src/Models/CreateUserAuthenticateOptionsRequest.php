<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class CreateUserAuthenticateOptionsRequest extends Model
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
     * @description 操作hash，用来和认证绑定
     *
     * @var string
     */
    public $bindHashBase64;

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
    protected $_name = [
        'applicationExternalId'      => 'ApplicationExternalId',
        'authenticatorType'          => 'AuthenticatorType',
        'bindHashBase64'             => 'BindHashBase64',
        'clientExtendParamsJson'     => 'ClientExtendParamsJson',
        'clientExtendParamsJsonSign' => 'ClientExtendParamsJsonSign',
        'serverExtendParamsJson'     => 'ServerExtendParamsJson',
        'userId'                     => 'UserId',
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
        if (null !== $this->bindHashBase64) {
            $res['BindHashBase64'] = $this->bindHashBase64;
        }
        if (null !== $this->clientExtendParamsJson) {
            $res['ClientExtendParamsJson'] = $this->clientExtendParamsJson;
        }
        if (null !== $this->clientExtendParamsJsonSign) {
            $res['ClientExtendParamsJsonSign'] = $this->clientExtendParamsJsonSign;
        }
        if (null !== $this->serverExtendParamsJson) {
            $res['ServerExtendParamsJson'] = $this->serverExtendParamsJson;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserAuthenticateOptionsRequest
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
        if (isset($map['BindHashBase64'])) {
            $model->bindHashBase64 = $map['BindHashBase64'];
        }
        if (isset($map['ClientExtendParamsJson'])) {
            $model->clientExtendParamsJson = $map['ClientExtendParamsJson'];
        }
        if (isset($map['ClientExtendParamsJsonSign'])) {
            $model->clientExtendParamsJsonSign = $map['ClientExtendParamsJsonSign'];
        }
        if (isset($map['ServerExtendParamsJson'])) {
            $model->serverExtendParamsJson = $map['ServerExtendParamsJson'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
