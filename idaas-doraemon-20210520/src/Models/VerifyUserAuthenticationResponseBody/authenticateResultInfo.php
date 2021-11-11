<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\VerifyUserAuthenticationResponseBody;

use AlibabaCloud\Tea\Model;

class authenticateResultInfo extends Model
{
    /**
     * @description 这次认证绑定的操作hash
     *
     * @var string
     */
    public $bindHashBase64;

    /**
     * @description 认证使用的凭据Id
     *
     * @var string
     */
    public $credentialId;

    /**
     * @description 认证通过的用户Id
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bindHashBase64' => 'BindHashBase64',
        'credentialId'   => 'CredentialId',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindHashBase64) {
            $res['BindHashBase64'] = $this->bindHashBase64;
        }
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authenticateResultInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindHashBase64'])) {
            $model->bindHashBase64 = $map['BindHashBase64'];
        }
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
