<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomCertificateResponseBody extends Model
{
    /**
     * @description The content of the certificate. This parameter is returned only if Immediately is set to 1 or 2.
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIIEkjCCA3qgAwIBAgIQCgFBQgAAAVOFc2oLheynCDANBgkqhkiG9w0BAQsFADA/
     * ...
     * ...
     * ...
     * KOqkqm57TH2H3eDJAkSnh6/DNFu0Qg==
     * -----END CERTIFICATE-----
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The certificate chain of the certificate. This parameter is returned only if Immediately is set to 2.
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIIBfzCCATGgAwIBAgIUfI5kSdcO2S0+LkpdL3b2VUJG10YwBQYDK2VwMDUxCzAJ
     * ...
     * ...
     * ...
     * ZYYG
     * -----END CERTIFICATE-----
     * -----BEGIN CERTIFICATE-----
     * MIIBczCCARgCAQAwgYoxFDASBgNVBAMMC2FsaXl1bi50ZXN0MQ0wCwYDVQQ
     * ...
     * ...
     * ...
     * KL5cUmF
     * -----END CERTIFICATE-----
     *
     * @var string
     */
    public $certificateChain;

    /**
     * @description The unique identifier of the certificate.
     *
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The request ID.
     *
     * @example 12345678-1234-1234-1234-123456789ABC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The serial number of the certificate. This parameter is returned only if Immediately is set to 1 or 2.
     *
     * @example 084bde9cd233f0ddae33adc438cfbbbd****
     *
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'certificate' => 'Certificate',
        'certificateChain' => 'CertificateChain',
        'identifier' => 'Identifier',
        'requestId' => 'RequestId',
        'serialNumber' => 'SerialNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomCertificateResponseBody
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
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
