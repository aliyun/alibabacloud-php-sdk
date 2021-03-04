<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePublicKeyEncryptResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'requestId'      => 'RequestId',
        'ciphertextBlob' => 'CiphertextBlob',
        'certificateId'  => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePublicKeyEncryptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
