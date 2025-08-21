<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody\forbidResult;

class BatchForbidVsStreamResponseBody extends Model
{
    /**
     * @var forbidResult
     */
    public $forbidResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbidResult' => 'ForbidResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->forbidResult) {
            $this->forbidResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbidResult) {
            $res['ForbidResult'] = null !== $this->forbidResult ? $this->forbidResult->toArray($noStream) : $this->forbidResult;
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
        if (isset($map['ForbidResult'])) {
            $model->forbidResult = forbidResult::fromMap($map['ForbidResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
