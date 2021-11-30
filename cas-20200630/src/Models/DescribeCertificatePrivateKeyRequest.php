<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

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
        'identifier'    => 'Identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeCertificatePrivateKeyRequest
     */
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
