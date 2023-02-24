<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class TagResourceRequest extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * >  You can configure only one of the KeyId, SecretName, and CertificateId parameters.
     * @example 770dbe42-e146-43d1-a55a-1355db86****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The ID of the customer master key (CMK). The ID must be globally unique.
     *
     * >  You can configure only one of the KeyId, SecretName, and CertificateId parameters.
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddf****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The name of the secret.
     *
     * >  You can configure only one of the KeyId, SecretName, and CertificateId parameters.
     * @example MyDbC****
     *
     * @var string
     */
    public $secretName;

    /**
     * @description One or more tags that you want to add. The value is in the array format.
     *
     * Tag attributes:
     *
     *   TagKey: the tag key.
     *   TagValue: the tag value.
     *
     * @example [{"TagKey":"S1key1","TagValue":"S1val1"},{"TagKey":"S1key2","TagValue":"S2val2"}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'keyId'         => 'KeyId',
        'secretName'    => 'SecretName',
        'tags'          => 'Tags',
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
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
