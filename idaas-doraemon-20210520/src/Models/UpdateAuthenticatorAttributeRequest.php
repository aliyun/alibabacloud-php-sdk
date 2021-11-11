<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class UpdateAuthenticatorAttributeRequest extends Model
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
     * @description 认证器uuid
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @description 用户id
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicationExternalId' => 'ApplicationExternalId',
        'authenticatorName'     => 'AuthenticatorName',
        'authenticatorUuid'     => 'AuthenticatorUuid',
        'userId'                => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAuthenticatorAttributeRequest
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
