<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricSignRequest extends Model
{
    /**
     * @description The version ID of the CMK. The ID must be globally unique.
     *
     * This parameter is required.
     *
     * @example RSA_PSS_SHA_256
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The signature algorithm.
     *
     * This parameter is required.
     *
     * @example ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiu****=
     *
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $dryRun;

    /**
     * @description The operation that you want to perform. Set the value to **AsymmetricSign**.
     *
     * This parameter is required.
     *
     * @example 5c438b18-05be-40ad-b6c2-3be6752c****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The ID of the customer master key (CMK). The ID must be globally unique.
     *
     * >  You can also set this parameter to an alias that is bound to the CMK. For more information, see [Alias overview](https://help.aliyun.com/document_detail/68522.html).
     *
     * This parameter is required.
     *
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyVersionId;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'digest' => 'Digest',
        'dryRun' => 'DryRun',
        'keyId' => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
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

        return $model;
    }
}
