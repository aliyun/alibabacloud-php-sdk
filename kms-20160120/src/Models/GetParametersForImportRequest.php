<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class GetParametersForImportRequest extends Model
{
    /**
     * @description The globally unique ID of the CMK.
     *
     * This parameter is required.
     * @example 202b9877-5a25-46e3-a763-e20791b5****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The algorithm that is used to encrypt key material.
     *
     * This parameter is required.
     * @example RSAES_PKCS1_V1_5
     *
     * @var string
     */
    public $wrappingAlgorithm;

    /**
     * @description The type of the public key that is used to encrypt key material.
     *
     * This parameter is required.
     * @example RSA_2048
     *
     * @var string
     */
    public $wrappingKeySpec;
    protected $_name = [
        'keyId'             => 'KeyId',
        'wrappingAlgorithm' => 'WrappingAlgorithm',
        'wrappingKeySpec'   => 'WrappingKeySpec',
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
        if (null !== $this->wrappingAlgorithm) {
            $res['WrappingAlgorithm'] = $this->wrappingAlgorithm;
        }
        if (null !== $this->wrappingKeySpec) {
            $res['WrappingKeySpec'] = $this->wrappingKeySpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParametersForImportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['WrappingAlgorithm'])) {
            $model->wrappingAlgorithm = $map['WrappingAlgorithm'];
        }
        if (isset($map['WrappingKeySpec'])) {
            $model->wrappingKeySpec = $map['WrappingKeySpec'];
        }

        return $model;
    }
}
