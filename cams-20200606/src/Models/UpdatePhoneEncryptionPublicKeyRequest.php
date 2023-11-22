<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdatePhoneEncryptionPublicKeyRequest extends Model
{
    /**
     * @example 399382882
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @example -----BEGIN PUBLIC KEY-----
     * -----END PUBLIC KEY-----
     * @var string
     */
    public $encryptionPublicKey;

    /**
     * @example 86138000
     *
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'custSpaceId'         => 'CustSpaceId',
        'encryptionPublicKey' => 'EncryptionPublicKey',
        'phoneNumber'         => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->encryptionPublicKey) {
            $res['EncryptionPublicKey'] = $this->encryptionPublicKey;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePhoneEncryptionPublicKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['EncryptionPublicKey'])) {
            $model->encryptionPublicKey = $map['EncryptionPublicKey'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
