<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class EncryptRequest extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $plaintext;

    /**
     * @var mixed[]
     */
    public $encryptionContext;
    protected $_name = [
        'keyId'             => 'KeyId',
        'plaintext'         => 'Plaintext',
        'encryptionContext' => 'EncryptionContext',
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
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }
        if (null !== $this->encryptionContext) {
            $res['EncryptionContext'] = $this->encryptionContext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EncryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }
        if (isset($map['EncryptionContext'])) {
            $model->encryptionContext = $map['EncryptionContext'];
        }

        return $model;
    }
}
