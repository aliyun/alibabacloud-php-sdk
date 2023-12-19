<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateWHClientCertificateResponseBody extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----\n-----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----\n
     *
     * @var string
     */
    public $certificateChain;

    /**
     * @example 190ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @example -----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $parentX509Certificate;

    /**
     * @example 8C467B38-3910-447D-87BC-AC049166F216
     *
     * @var string
     */
    public $requestId;

    /**
     * @example -----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $rootX509Certificate;

    /**
     * @example -----BEGIN CERTIFICATE-----\n......\n-----END CERTIFICATE-----
     *
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'certificateChain'      => 'CertificateChain',
        'identifier'            => 'Identifier',
        'parentX509Certificate' => 'ParentX509Certificate',
        'requestId'             => 'RequestId',
        'rootX509Certificate'   => 'RootX509Certificate',
        'x509Certificate'       => 'X509Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->parentX509Certificate) {
            $res['ParentX509Certificate'] = $this->parentX509Certificate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rootX509Certificate) {
            $res['RootX509Certificate'] = $this->rootX509Certificate;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWHClientCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['ParentX509Certificate'])) {
            $model->parentX509Certificate = $map['ParentX509Certificate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RootX509Certificate'])) {
            $model->rootX509Certificate = $map['RootX509Certificate'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}
