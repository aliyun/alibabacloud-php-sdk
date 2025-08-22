<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetTensorboardSharedUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tensorboardSharedUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'tensorboardSharedUrl' => 'TensorboardSharedUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tensorboardSharedUrl) {
            $res['TensorboardSharedUrl'] = $this->tensorboardSharedUrl;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TensorboardSharedUrl'])) {
            $model->tensorboardSharedUrl = $map['TensorboardSharedUrl'];
        }

        return $model;
    }
}
