<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ReEncryptResponseBody extends Model
{
    /**
     * @description The ciphertext re-encrypted.
     *
     * @example DZhOWVmZDktM2QxNi00ODk0LWJkNGYtMWZjNDNmM2YyYWJmaaSl+TztSIMe43nbTH/Z1Wr4XfLftKhAciUmDQXuMRl4WTvKhxjMThjK****
     *
     * @var string
     */
    public $ciphertextBlob;

    /**
     * @description The ID of the CMK that is used to decrypt the original ciphertext.
     *
     * This parameter is the globally unique ID of the CMK.
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The ID of the CMK version that is used to decrypt the original ciphertext.
     *
     * @example 202b9877-5a25-46e3-a763-e20791b5****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The ID of the request.
     *
     * @example 207596a2-36d3-4840-b1bd-f87044699bd7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ciphertextBlob' => 'CiphertextBlob',
        'keyId'          => 'KeyId',
        'keyVersionId'   => 'KeyVersionId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphertextBlob) {
            $res['CiphertextBlob'] = $this->ciphertextBlob;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReEncryptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphertextBlob'])) {
            $model->ciphertextBlob = $map['CiphertextBlob'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
