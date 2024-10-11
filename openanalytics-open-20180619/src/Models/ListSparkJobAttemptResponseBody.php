<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobAttemptResponseBody\dataResult;
use AlibabaCloud\Tea\Model;

class ListSparkJobAttemptResponseBody extends Model
{
    /**
     * @var dataResult
     */
    public $dataResult;

    /**
     * @example 4A839055-70C7-423D-A6F2-E714EA4502DB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataResult' => 'DataResult',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataResult) {
            $res['DataResult'] = null !== $this->dataResult ? $this->dataResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSparkJobAttemptResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataResult'])) {
            $model->dataResult = dataResult::fromMap($map['DataResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
