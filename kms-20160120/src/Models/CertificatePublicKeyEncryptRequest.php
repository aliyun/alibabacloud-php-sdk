<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class CertificatePublicKeyEncryptRequest extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'certificateId' => 'CertificateId',
        'plaintext' => 'Plaintext',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}
