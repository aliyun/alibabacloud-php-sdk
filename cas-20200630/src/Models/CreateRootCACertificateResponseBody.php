<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateRootCACertificateResponseBody extends Model
{
    /**
     * @description The root CA certificate in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The certificate chain of the root CA certificate.
     *
     * @example -----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----\n-----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----\n
     *
     * @var string
     */
    public $certificateChain;

    /**
     * @description The unique identifier of the root CA certificate.
     *
     * @example 1a83bcbb89e562885e40aa0108f5****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 6D9B4C5F-7140-5B41-924C-329181DC00C1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificate'      => 'Certificate',
        'certificateChain' => 'CertificateChain',
        'identifier'       => 'Identifier',
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
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRootCACertificateResponseBody
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

        return $model;
    }
}
