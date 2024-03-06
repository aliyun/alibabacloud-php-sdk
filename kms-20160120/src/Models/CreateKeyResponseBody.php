<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyResponseBody\keyMetadata;
use AlibabaCloud\Tea\Model;

class CreateKeyResponseBody extends Model
{
    /**
     * @description The metadata of the key.
     *
     * @var keyMetadata
     */
    public $keyMetadata;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 381D5D33-BB8F-395F-8EE4-AE3BB4B523C4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyMetadata' => 'KeyMetadata',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyMetadata) {
            $res['KeyMetadata'] = null !== $this->keyMetadata ? $this->keyMetadata->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyMetadata'])) {
            $model->keyMetadata = keyMetadata::fromMap($map['KeyMetadata']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
