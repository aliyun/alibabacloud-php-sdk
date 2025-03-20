<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateClientCertificateRequest extends Model
{
    /**
     * @description The certificate signing request (CSR).
     *
     * @example -----BEGIN CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $CSR;

    /**
     * @description The type of the private key algorithm.
     *
     * @example RSA
     *
     * @var string
     */
    public $pkeyType;

    /**
     * @description The website ID.
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The validity period of the certificate. Unit: day.
     *
     * This parameter is required.
     *
     * @example 365
     *
     * @var int
     */
    public $validityDays;
    protected $_name = [
        'CSR' => 'CSR',
        'pkeyType' => 'PkeyType',
        'siteId' => 'SiteId',
        'validityDays' => 'ValidityDays',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->CSR) {
            $res['CSR'] = $this->CSR;
        }
        if (null !== $this->pkeyType) {
            $res['PkeyType'] = $this->pkeyType;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->validityDays) {
            $res['ValidityDays'] = $this->validityDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClientCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CSR'])) {
            $model->CSR = $map['CSR'];
        }
        if (isset($map['PkeyType'])) {
            $model->pkeyType = $map['PkeyType'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['ValidityDays'])) {
            $model->validityDays = $map['ValidityDays'];
        }

        return $model;
    }
}
