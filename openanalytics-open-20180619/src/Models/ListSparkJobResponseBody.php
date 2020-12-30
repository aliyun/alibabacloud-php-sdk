<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobResponseBody\dataResult;
use AlibabaCloud\Tea\Model;

class ListSparkJobResponseBody extends Model
{
    /**
     * @var dataResult
     */
    public $dataResult;

    /**
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
     * @return ListSparkJobResponseBody
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
