<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ImportKeyMaterialRequest extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $encryptedKeyMaterial;

    /**
     * @var string
     */
    public $importToken;

    /**
     * @var int
     */
    public $keyMaterialExpireUnix;
    protected $_name = [
        'keyId'                 => 'KeyId',
        'encryptedKeyMaterial'  => 'EncryptedKeyMaterial',
        'importToken'           => 'ImportToken',
        'keyMaterialExpireUnix' => 'KeyMaterialExpireUnix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->encryptedKeyMaterial) {
            $res['EncryptedKeyMaterial'] = $this->encryptedKeyMaterial;
        }
        if (null !== $this->importToken) {
            $res['ImportToken'] = $this->importToken;
        }
        if (null !== $this->keyMaterialExpireUnix) {
            $res['KeyMaterialExpireUnix'] = $this->keyMaterialExpireUnix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportKeyMaterialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['EncryptedKeyMaterial'])) {
            $model->encryptedKeyMaterial = $map['EncryptedKeyMaterial'];
        }
        if (isset($map['ImportToken'])) {
            $model->importToken = $map['ImportToken'];
        }
        if (isset($map['KeyMaterialExpireUnix'])) {
            $model->keyMaterialExpireUnix = $map['KeyMaterialExpireUnix'];
        }

        return $model;
    }
}
