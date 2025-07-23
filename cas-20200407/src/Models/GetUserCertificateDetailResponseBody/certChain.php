<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\GetUserCertificateDetailResponseBody;

use AlibabaCloud\Tea\Model;

class certChain extends Model
{
    /**
     * @description The common name of the certificate.
     *
     * @example test
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The common name of the issuer.
     *
     * @example Encryption Everywhere DV TLS CA - G2
     *
     * @var string
     */
    public $issuerCommonName;

    /**
     * @description The end of the validity period of the certificate.
     *
     * @example 17322613180000
     *
     * @var int
     */
    public $notAfter;

    /**
     * @description The beginning of the validity period of the certificate.
     *
     * @example 17302633180000
     *
     * @var int
     */
    public $notBefore;

    /**
     * @description The remaining days of the certificate validity period.
     *
     * @example 1000
     *
     * @var int
     */
    public $remainDay;
    protected $_name = [
        'commonName' => 'CommonName',
        'issuerCommonName' => 'IssuerCommonName',
        'notAfter' => 'NotAfter',
        'notBefore' => 'NotBefore',
        'remainDay' => 'RemainDay',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->issuerCommonName) {
            $res['IssuerCommonName'] = $this->issuerCommonName;
        }
        if (null !== $this->notAfter) {
            $res['NotAfter'] = $this->notAfter;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = $this->notBefore;
        }
        if (null !== $this->remainDay) {
            $res['RemainDay'] = $this->remainDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certChain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['IssuerCommonName'])) {
            $model->issuerCommonName = $map['IssuerCommonName'];
        }
        if (isset($map['NotAfter'])) {
            $model->notAfter = $map['NotAfter'];
        }
        if (isset($map['NotBefore'])) {
            $model->notBefore = $map['NotBefore'];
        }
        if (isset($map['RemainDay'])) {
            $model->remainDay = $map['RemainDay'];
        }

        return $model;
    }
}
