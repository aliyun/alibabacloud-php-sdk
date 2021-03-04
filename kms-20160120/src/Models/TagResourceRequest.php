<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class TagResourceRequest extends Model
{
    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $certificateId;
    protected $_name = [
        'keyId'         => 'KeyId',
        'tags'          => 'Tags',
        'secretName'    => 'SecretName',
        'certificateId' => 'CertificateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }

        return $model;
    }
}
