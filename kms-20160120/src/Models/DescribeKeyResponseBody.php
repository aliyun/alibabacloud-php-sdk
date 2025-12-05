<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyResponseBody\keyMetadata;

class DescribeKeyResponseBody extends Model
{
    /**
     * @var keyMetadata
     */
    public $keyMetadata;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyMetadata' => 'KeyMetadata',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->keyMetadata) {
            $this->keyMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyMetadata) {
            $res['KeyMetadata'] = null !== $this->keyMetadata ? $this->keyMetadata->toArray($noStream) : $this->keyMetadata;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
