<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

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
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
