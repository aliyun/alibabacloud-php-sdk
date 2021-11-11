<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorsResponseBody;

use AlibabaCloud\Tea\Model;

class authenticator extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description 身份认证对应的认证器名称
     *
     * @var string
     */
    public $authenticatorName;

    /**
     * @description 认证器uuid
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @description 身份认证ID
     *
     * @var string
     */
    public $credentialId;

    /**
     * @description 最后验证时间，如果新注册则为注册时间
     *
     * @var int
     */
    public $lastVerifyTime;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $registerTime;

    /**
     * @description 认证器类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'applicationExternalId' => 'ApplicationExternalId',
        'authenticatorName'     => 'AuthenticatorName',
        'authenticatorUuid'     => 'AuthenticatorUuid',
        'credentialId'          => 'CredentialId',
        'lastVerifyTime'        => 'LastVerifyTime',
        'registerTime'          => 'RegisterTime',
        'type'                  => 'Type',
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
        if (null !== $this->authenticatorUuid) {
            $res['AuthenticatorUuid'] = $this->authenticatorUuid;
        }
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->lastVerifyTime) {
            $res['LastVerifyTime'] = $this->lastVerifyTime;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authenticator
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
        if (isset($map['AuthenticatorUuid'])) {
            $model->authenticatorUuid = $map['AuthenticatorUuid'];
        }
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['LastVerifyTime'])) {
            $model->lastVerifyTime = $map['LastVerifyTime'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
