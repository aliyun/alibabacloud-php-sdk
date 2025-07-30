<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateClientCertificateWithCsrResponseBody extends Model
{
    /**
     * @description CertKmcRep1.
     *
     * @example userSeal=MHkCIEu94PQAahFWuFk%
     ***
     * EtFw%2FkMMBjw8i5bFfSkV%2FIUrcOJD
     *
     * @var string
     */
    public $certKmcRep1;

    /**
     * @description Cert Sign Buf Kmc.
     *
     * @example userSeal=MHkCIEu94PQAahFWuFk%
     ***
     * EtFw%2FkMMBjw8i5bFfSkV%2FIUrcOJD
     *
     * @var string
     */
    public $certSignBufKmc;

    /**
     * @description The certificate chain of the client certificate.
     *
     * @example -----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n
     *
     * @var string
     */
    public $certificateChain;

    /**
     * @description The unique identifier of the client certificate.
     *
     * @example 200ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 31C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The serial number of the server certificate.
     *
     * @example 0f29522da2dae7a1c4b6ab7132ad3c06
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The content of the client certificate.
     *
     * @example -----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'certKmcRep1' => 'CertKmcRep1',
        'certSignBufKmc' => 'CertSignBufKmc',
        'certificateChain' => 'CertificateChain',
        'identifier' => 'Identifier',
        'requestId' => 'RequestId',
        'serialNumber' => 'SerialNumber',
        'x509Certificate' => 'X509Certificate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certKmcRep1) {
            $res['CertKmcRep1'] = $this->certKmcRep1;
        }
        if (null !== $this->certSignBufKmc) {
            $res['CertSignBufKmc'] = $this->certSignBufKmc;
        }
        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClientCertificateWithCsrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertKmcRep1'])) {
            $model->certKmcRep1 = $map['CertKmcRep1'];
        }
        if (isset($map['CertSignBufKmc'])) {
            $model->certSignBufKmc = $map['CertSignBufKmc'];
        }
        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}
