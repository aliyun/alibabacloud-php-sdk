<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ImportKeyMaterialRequest extends Model
{
    /**
     * @description Use **GetParametersForImport** the Returned public key and the base64-encoded key material.
     *
     * This parameter is required.
     * @example bCPZx7I6v6KXsqEpr2OXKxuj2CCRtKdwp75Bw+BGncYqBdfjFBYRtOE6HRlT0oeiRDWzwnw9OA54OL36smDJrq4Lo9x0CyYDiuKnRkcKtMtlzW0din7Pd7IlZWWRdVueiw2qpzl7PkUWQGTdsdbzpfJJQ+qj/cRIrk/E83UGyeyytSpgnb+lu0xEYcPajRyWNsbi98N3pqqQzHXNNHO2NJqHlnQgglqTiBEjkGeKFhfKmTc3vjulIdVa3EaVIN6lwWfgx+UUYSrvbA77WDYKlDsZ4SbK2/T7za9Tp1qU7Ynqba7OKGVVj7PMbiaO80AxWZnjUMYCgEp5w7V+seOXqw==
     *
     * @var string
     */
    public $encryptedKeyMaterial;

    /**
     * @description By calling **GetParametersForImport** the import token.
     *
     * This parameter is required.
     * @example Base64String
     *
     * @var string
     */
    public $importToken;

    /**
     * @description The ID of the CMK to be imported.
     *
     * This parameter is required.
     * @example 1234abcd-12ab-34cd-56ef-12345678****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The time when the key material expires.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $keyMaterialExpireUnix;
    protected $_name = [
        'encryptedKeyMaterial'  => 'EncryptedKeyMaterial',
        'importToken'           => 'ImportToken',
        'keyId'                 => 'KeyId',
        'keyMaterialExpireUnix' => 'KeyMaterialExpireUnix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedKeyMaterial) {
            $res['EncryptedKeyMaterial'] = $this->encryptedKeyMaterial;
        }
        if (null !== $this->importToken) {
            $res['ImportToken'] = $this->importToken;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
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
        if (isset($map['EncryptedKeyMaterial'])) {
            $model->encryptedKeyMaterial = $map['EncryptedKeyMaterial'];
        }
        if (isset($map['ImportToken'])) {
            $model->importToken = $map['ImportToken'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyMaterialExpireUnix'])) {
            $model->keyMaterialExpireUnix = $map['KeyMaterialExpireUnix'];
        }

        return $model;
    }
}
