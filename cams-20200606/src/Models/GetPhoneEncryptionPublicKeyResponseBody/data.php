<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetPhoneEncryptionPublicKeyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $encryptionPublicKey;

    /**
     * @var string
     */
    public $encryptionPublicKeyStatus;

    /**
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'encryptionPublicKey' => 'EncryptionPublicKey',
        'encryptionPublicKeyStatus' => 'EncryptionPublicKeyStatus',
        'phoneNumber' => 'PhoneNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
