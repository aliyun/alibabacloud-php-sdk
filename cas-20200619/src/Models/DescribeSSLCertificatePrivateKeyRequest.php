<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models;

use AlibabaCloud\Tea\Model;

class DescribeSSLCertificatePrivateKeyRequest extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $encryptedCode;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'encryptedCode'  => 'EncryptedCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->encryptedCode) {
            $res['EncryptedCode'] = $this->encryptedCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSSLCertificatePrivateKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['EncryptedCode'])) {
            $model->encryptedCode = $map['EncryptedCode'];
        }

        return $model;
    }
}
