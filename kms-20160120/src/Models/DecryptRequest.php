<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DecryptRequest extends Model
{
    /**
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var mixed[]
     */
    public $encryptionContext;
    protected $_name = [
        'ciphertextBlob'    => 'CiphertextBlob',
        'encryptionContext' => 'EncryptionContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->encryptionContext) {
            $res['EncryptionContext'] = $this->encryptionContext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['EncryptionContext'])) {
            $model->encryptionContext = $map['EncryptionContext'];
        }

        return $model;
    }
}
