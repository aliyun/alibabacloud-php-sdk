<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UntagResourceRequest extends Model
{
    /**
     * @example 770dbe42-e146-43d1-a55a-1355db86****
     *
     * @var string
     */
    public $certificateId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddf****
     *
     * @var string
     */
    public $keyId;

    /**
     * @example MyDbC****
     *
     * @var string
     */
    public $secretName;

    /**
     * @example ["tagkey1","tagkey2"]
     *
     * @var string
     */
    public $tagKeys;
    protected $_name = [
        'certificateId' => 'CertificateId',
        'keyId'         => 'KeyId',
        'secretName'    => 'SecretName',
        'tagKeys'       => 'TagKeys',
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
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourceRequest
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
        if (isset($map['TagKeys'])) {
            $model->tagKeys = $map['TagKeys'];
        }

        return $model;
    }
}
