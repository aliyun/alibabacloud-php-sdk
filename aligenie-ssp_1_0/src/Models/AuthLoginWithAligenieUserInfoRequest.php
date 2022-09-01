<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class AuthLoginWithAligenieUserInfoRequest extends Model
{
    /**
     * @var string
     */
    public $encryptedAligenieUserIdentifier;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'encryptedAligenieUserIdentifier' => 'EncryptedAligenieUserIdentifier',
        'sessionId'                       => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedAligenieUserIdentifier) {
            $res['EncryptedAligenieUserIdentifier'] = $this->encryptedAligenieUserIdentifier;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthLoginWithAligenieUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedAligenieUserIdentifier'])) {
            $model->encryptedAligenieUserIdentifier = $map['EncryptedAligenieUserIdentifier'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
