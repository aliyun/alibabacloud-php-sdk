<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class DescribeCertificatePrivateKeyRequest extends Model
{
    /**
     * @var string
     */
    public $encryptedCode;

    /**
     * @var string
     */
    public $identifier;
    protected $_name = [
        'encryptedCode' => 'EncryptedCode',
        'identifier' => 'Identifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedCode) {
            $res['EncryptedCode'] = $this->encryptedCode;
        }

        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
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
        if (isset($map['EncryptedCode'])) {
            $model->encryptedCode = $map['EncryptedCode'];
        }

        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        return $model;
    }
}
