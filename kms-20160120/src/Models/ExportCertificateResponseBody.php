<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ExportCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateChain;

    /**
     * @var string
     */
    public $PKCS12Blob;

    /**
     * @var string
     */
    public $certificate;
    protected $_name = [
        'privateKey'       => 'PrivateKey',
        'requestId'        => 'RequestId',
        'certificateId'    => 'CertificateId',
        'certificateChain' => 'CertificateChain',
        'PKCS12Blob'       => 'PKCS12Blob',
        'certificate'      => 'Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }
        if (null !== $this->PKCS12Blob) {
            $res['PKCS12Blob'] = $this->PKCS12Blob;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }
        if (isset($map['PKCS12Blob'])) {
            $model->PKCS12Blob = $map['PKCS12Blob'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        return $model;
    }
}
