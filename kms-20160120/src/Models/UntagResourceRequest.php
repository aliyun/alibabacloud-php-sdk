<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class UntagResourceRequest extends Model
{
    /**
     * @var string
     */
    public $certificateId;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $tagKeys;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'keyId' => 'KeyId',
        'secretName' => 'SecretName',
        'tagKeys' => 'TagKeys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
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
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['TagKeys'])) {
            $model->tagKeys = $map['TagKeys'];
        }

        return $model;
    }
}
