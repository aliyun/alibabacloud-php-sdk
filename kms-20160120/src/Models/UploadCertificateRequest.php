<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UploadCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $certificateChain;
    protected $_name = [
        'certificateId'    => 'CertificateId',
        'certificate'      => 'Certificate',
        'certificateChain' => 'CertificateChain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }

        return $model;
    }
}
