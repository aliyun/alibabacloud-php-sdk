<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class UploadCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $certificateChain;

    /**
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'certificate' => 'Certificate',
        'certificateChain' => 'CertificateChain',
        'certificateId' => 'CertificateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        if (null !== $this->certificateChain) {
            $res['CertificateChain'] = $this->certificateChain;
        }

        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
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
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        if (isset($map['CertificateChain'])) {
            $model->certificateChain = $map['CertificateChain'];
        }

        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
