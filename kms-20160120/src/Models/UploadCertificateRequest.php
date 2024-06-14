<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UploadCertificateRequest extends Model
{
    /**
     * @description The certificate issued by the CA, which is in the Privacy Enhanced Mail (PEM) format.
     *
     * This parameter is required.
     * @example -----BEGIN CERTIFICATE-----  (X.509 Certificate PEM Content)  -----END CERTIFICATE-----
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The certificate chain issued by the CA, which is in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Root CA Certificate PEM Content)  -----END CERTIFICATE-----
     *
     * @var string
     */
    public $certificateChain;

    /**
     * @description The ID of the certificate. The ID must be globally unique in Certificates Manager.
     *
     * This parameter is required.
     * @example 12345678-1234-1234-1234-12345678****
     *
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'certificate'      => 'Certificate',
        'certificateChain' => 'CertificateChain',
        'certificateId'    => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
