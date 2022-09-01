<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class AuthLoginWithTaobaoUserInfoRequest extends Model
{
    /**
     * @var string
     */
    public $encryptedTaobaoUserIdentifier;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'encryptedTaobaoUserIdentifier' => 'EncryptedTaobaoUserIdentifier',
        'sessionId'                     => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedTaobaoUserIdentifier) {
            $res['EncryptedTaobaoUserIdentifier'] = $this->encryptedTaobaoUserIdentifier;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthLoginWithTaobaoUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedTaobaoUserIdentifier'])) {
            $model->encryptedTaobaoUserIdentifier = $map['EncryptedTaobaoUserIdentifier'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
