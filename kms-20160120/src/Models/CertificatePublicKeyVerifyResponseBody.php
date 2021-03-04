<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePublicKeyVerifyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var bool
     */
    public $signatureValid;
    protected $_name = [
        'requestId'      => 'RequestId',
        'certificateId'  => 'CertificateId',
        'signatureValid' => 'SignatureValid',
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
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->signatureValid) {
            $res['SignatureValid'] = $this->signatureValid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePublicKeyVerifyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['SignatureValid'])) {
            $model->signatureValid = $map['SignatureValid'];
        }

        return $model;
    }
}
