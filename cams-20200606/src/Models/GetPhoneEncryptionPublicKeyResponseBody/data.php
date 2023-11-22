<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneEncryptionPublicKeyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example -----BEGIN PUBLIC KEY-----
     * -----END PUBLIC KEY-----
     * @var string
     */
    public $encryptionPublicKey;

    /**
     * @example VALID
     *
     * @var string
     */
    public $encryptionPublicKeyStatus;

    /**
     * @example 86138000**
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'encryptionPublicKey'       => 'EncryptionPublicKey',
        'encryptionPublicKeyStatus' => 'EncryptionPublicKeyStatus',
        'phoneNumber'               => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptionPublicKey) {
            $res['EncryptionPublicKey'] = $this->encryptionPublicKey;
        }
        if (null !== $this->encryptionPublicKeyStatus) {
            $res['EncryptionPublicKeyStatus'] = $this->encryptionPublicKeyStatus;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptionPublicKey'])) {
            $model->encryptionPublicKey = $map['EncryptionPublicKey'];
        }
        if (isset($map['EncryptionPublicKeyStatus'])) {
            $model->encryptionPublicKeyStatus = $map['EncryptionPublicKeyStatus'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
