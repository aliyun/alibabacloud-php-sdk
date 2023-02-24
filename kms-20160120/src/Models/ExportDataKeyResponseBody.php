<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ExportDataKeyResponseBody extends Model
{
    /**
     * @description The data key encrypted by using the public key and then exported.
     *
     * @example BQKP+1zK6+ZEMxTP5qaVzcsgXtWplYBKm0NXdSnB5FzliFxE1bSiu4dnEIlca2JpeH7yz1/S6fed630H+hIH6DoM25fTLNcKj+mFB0Xnh9m2+HN59Mn4qyTfcUeadnfCXSWcGBouhXFwcdd2rJ3n337bzTf4jm659gZu3L0i6PLuxM9p7mqdwO0cKJPfGVfhnfMz+f4alMg79WB/NNyE2lyX7/qxvV49ObNrrJbKSFiz8Djocaf0IESNLMbfYI5bXjWkJlX92DQbKhibtQW8ZOJ//ZC6t0AWcUoKL6QDm/dg5koQalcleRinpB+QadFm894sLbVZ9+N4GVs*******
     *
     * @var string
     */
    public $exportedDataKey;

    /**
     * @description The ID of the CMK that is used to decrypt the specified ciphertext of the data key.
     *
     * This parameter is the globally unique ID of the CMK.
     * @example 202b9877-5a25-46e3-a763-e20791b5****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The ID of the CMK version that is used to decrypt the specified ciphertext of the data key.
     *
     * @example 2ab1a983-7072-4bbc-a582-584b5bd8****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The ID of the request.
     *
     * @example 4bd560a1-729e-45f1-a3d9-b2a33d61046b
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportedDataKey' => 'ExportedDataKey',
        'keyId'           => 'KeyId',
        'keyVersionId'    => 'KeyVersionId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportedDataKey) {
            $res['ExportedDataKey'] = $this->exportedDataKey;
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
     * @return ExportDataKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportedDataKey'])) {
            $model->exportedDataKey = $map['ExportedDataKey'];
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
