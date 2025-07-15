<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveCertificateDetailResponseBody extends Model
{
    /**
     * @description The content of the certificate.
     *
     * @example -----BEGIN CERTIFICATE-----****-----END CERTIFICATE-----
     *
     * @var string
     */
    public $cert;

    /**
     * @description The ID of the certificate.
     *
     * @example 23451111
     *
     * @var int
     */
    public $certId;

    /**
     * @description The name of the certificate.
     *
     * @example Cert-****
     *
     * @var string
     */
    public $certName;

    /**
     * @description The ID of the request.
     *
     * @example C7C69682-7F88-40DD-A198-10D0309E439B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cert' => 'Cert',
        'certId' => 'CertId',
        'certName' => 'CertName',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveCertificateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
