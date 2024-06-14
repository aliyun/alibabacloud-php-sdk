<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class AsymmetricVerifyRequest extends Model
{
    /**
     * @description The signature algorithm.
     *
     * This parameter is required.
     * @example RSA_PSS_SHA_256
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The digest that is generated for the original message by using a hash algorithm. The hash algorithm is specified by the **Algorithm** parameter.
     *
     * This parameter is required.
     * @example ZOyIygCyaOW6GjVnihtTFtIS9PNmskdyMlNKiuy****=
     *
     * @var string
     */
    public $digest;

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
     * @description The signature value to be verified.
     *
     * This parameter is required.
     * @example M2CceNZH00ZgL9ED/ZHFp21YRAvYeZHknJUc207OCZ0N9wNn9As4z2bON3FF3je+1Nu+2+/8Zj50HpMTpzYpMp2R93cYmACCmhaYoKydxylbyGzJR8y9likZRCrkD38lRoS40aBBvv/6iRKzQuo9EGYVcel36cMNg00VmYNBy3pa1rwg3gA4l3cy6kjayZja1WGPkVhrVKsrJMdbpl0ApLjXKuD8rw1n1XLCwCUEL5eLPljTZaAveqdOFQOiZnZEGI27qIiZe7I1fN8tcz6anS/gTM7xRKE++5egEvRWlTQQTJeApnPSiUPA+8ZykNdelQsOQh5SrGoyI4A5pq****==
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'algorithm'    => 'Algorithm',
        'digest'       => 'Digest',
        'keyId'        => 'KeyId',
        'keyVersionId' => 'KeyVersionId',
        'value'        => 'Value',
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
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsymmetricVerifyRequest
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
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
