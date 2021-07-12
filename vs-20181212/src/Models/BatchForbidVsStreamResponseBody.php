<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody\forbidResult;
use AlibabaCloud\Tea\Model;

class BatchForbidVsStreamResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var forbidResult
     */
    public $forbidResult;
    protected $_name = [
        'requestId'    => 'RequestId',
        'forbidResult' => 'ForbidResult',
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
        if (null !== $this->forbidResult) {
            $res['ForbidResult'] = null !== $this->forbidResult ? $this->forbidResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchForbidVsStreamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ForbidResult'])) {
            $model->forbidResult = forbidResult::fromMap($map['ForbidResult']);
        }

        return $model;
    }
}
