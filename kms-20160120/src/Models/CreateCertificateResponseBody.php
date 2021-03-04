<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateResponseBody extends Model
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
    public $arn;
    protected $_name = [
        'csr'           => 'Csr',
        'requestId'     => 'RequestId',
        'certificateId' => 'CertificateId',
        'arn'           => 'Arn',
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
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateResponseBody
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        return $model;
    }
}
