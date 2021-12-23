<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateClientCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $certificateChain;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $parentX509Certificate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rootX509Certificate;

    /**
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
     * @return CreateClientCertificateResponseBody
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
