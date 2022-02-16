<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models;

use AlibabaCloud\Tea\Model;

class DeleteSSLCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSSLCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        return $model;
    }
}
