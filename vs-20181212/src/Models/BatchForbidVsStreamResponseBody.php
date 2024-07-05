<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody\forbidResult;
use AlibabaCloud\Tea\Model;

class BatchForbidVsStreamResponseBody extends Model
{
    /**
     * @var forbidResult
     */
    public $forbidResult;

    /**
     * @example B058D71B-76EA-5DF6-ACAF-A617C1E7937F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbidResult' => 'ForbidResult',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbidResult) {
            $res['ForbidResult'] = null !== $this->forbidResult ? $this->forbidResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ForbidResult'])) {
            $model->forbidResult = forbidResult::fromMap($map['ForbidResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
