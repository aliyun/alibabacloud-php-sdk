<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricEncryptRequest extends Model
{
    /**
     * @description The encryption algorithm.
     *
     * This parameter is required.
     * @example RSAES_OAEP_SHA_1
     *
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * This parameter is required.
     * @example 5c438b18-05be-40ad-b6c2-3be6752c****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The version ID of the CMK. The ID must be globally unique.
     *
     * This parameter is required.
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The plaintext that you want to encrypt. The plaintext must be Base64-encoded.
     *
     * This parameter is required.
     * @example SGVsbG8gd29ybGQ=
     *
     * @var string
     */
    public $plaintext;
    protected $_name = [
        'algorithm'    => 'Algorithm',
        'dryRun'       => 'DryRun',
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'plaintext'    => 'Plaintext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->plaintext) {
            $res['Plaintext'] = $this->plaintext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricEncryptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Plaintext'])) {
            $model->plaintext = $map['Plaintext'];
        }

        return $model;
    }
}
