<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ImportCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $PKCS12Blob;

    /**
     * @var string
     */
    public $passphrase;
    protected $_name = [
        'PKCS12Blob' => 'PKCS12Blob',
        'passphrase' => 'Passphrase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->PKCS12Blob) {
            $res['PKCS12Blob'] = $this->PKCS12Blob;
        }
        if (null !== $this->passphrase) {
            $res['Passphrase'] = $this->passphrase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PKCS12Blob'])) {
            $model->PKCS12Blob = $map['PKCS12Blob'];
        }
        if (isset($map['Passphrase'])) {
            $model->passphrase = $map['Passphrase'];
        }

        return $model;
    }
}
