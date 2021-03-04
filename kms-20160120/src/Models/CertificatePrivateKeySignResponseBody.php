<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CertificatePrivateKeySignResponseBody extends Model
{
    /**
     * @var string
     */
    public $signatureValue;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'signatureValue' => 'SignatureValue',
        'requestId'      => 'RequestId',
        'certificateId'  => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CertificatePrivateKeySignResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
