<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyResponseBody\keyMetadata;
use AlibabaCloud\Tea\Model;

class CreateKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var keyMetadata
     */
    public $keyMetadata;
    protected $_name = [
        'requestId'   => 'RequestId',
        'keyMetadata' => 'KeyMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keyMetadata) {
            $res['KeyMetadata'] = null !== $this->keyMetadata ? $this->keyMetadata->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeyMetadata'])) {
            $model->keyMetadata = keyMetadata::fromMap($map['KeyMetadata']);
        }

        return $model;
    }
}
