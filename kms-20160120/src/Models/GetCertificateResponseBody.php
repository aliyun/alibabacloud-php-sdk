<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetCertificateResponseBody extends Model
{
    /**
     * @description The certificate in the Privacy Enhanced Mail (PEM) format.
     *
     * @example -----BEGIN CERTIFICATE-----  (X.509 Certificate PEM Content)  -----END CERTIFICATE-----
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The certificate chain in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Sub CA Certificate PEM Content)  -----END CERTIFICATE-----  -----BEGIN CERTIFICATE-----  (Root CA Certificate PEM Content)  -----END CERTIFICATE-----
     *
     * @var string
     */
    public $certificateChain;

    /**
     * @description The ID of the certificate.
     *
     * @example 9a28de48-8d8b-484d-a766-dec4****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The CSR in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE REQUEST-----MIICxjCCAa4CAQAwPzELMAkGA1UEBhMCQ04xDzANBgNVBAoTBmFsaXl1bjEMMAoGA1UECxMDa21zMREwDwY****-----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @description The ID of the request.
     *
     * @example b3e104b4-0319-4a20-ab7f-9fef6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificate'      => 'Certificate',
        'certificateChain' => 'CertificateChain',
        'certificateId'    => 'CertificateId',
        'csr'              => 'Csr',
        'requestId'        => 'RequestId',
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
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCertificateResponseBody
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
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
