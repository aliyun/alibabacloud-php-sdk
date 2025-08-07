<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class CreateClientCertificateWithCsrResponseBody extends Model
{
    /**
     * @var string
     */
    public $certKmcRep1;

    /**
     * @var string
     */
    public $certSignBufKmc;

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
    public $requestId;

    /**
     * @var string
     */
    public $serialNumber;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
