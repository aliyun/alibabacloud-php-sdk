<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class AuthLoginWithAligenieUserInfoRequest extends Model
{
    /**
     * @example UYugfm/3Nb9q24AyES2rYmC5tIglSoDX3Mbna/vrldcjGPtC8VzFwo+CU5c4CHLjrK7ekskG2WVaevM5Zi9f0w==
     *
     * @var string
     */
    public $encryptedAligenieUserIdentifier;

    /**
     * @example dbe2eb4458302b9246c6da17fbc95f4b
     *
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
