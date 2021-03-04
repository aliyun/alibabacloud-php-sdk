<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetCertificateResponseBody extends Model
{
    /**
     * @var string
     */
    public $csr;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificateChain;

    /**
     * @var string
     */
    public $certificate;
    protected $_name = [
        'csr'              => 'Csr',
        'requestId'        => 'RequestId',
        'certificateId'    => 'CertificateId',
        'certificateChain' => 'CertificateChain',
        'certificate'      => 'Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
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
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        return $model;
    }
}
