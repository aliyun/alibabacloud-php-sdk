<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobResponse\dataResult;
use AlibabaCloud\Tea\Model;

class ListSparkJobResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dataResult
     */
    public $dataResult;
    protected $_name = [
        'requestId'  => 'RequestId',
        'dataResult' => 'DataResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dataResult', $this->dataResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dataResult) {
            $res['DataResult'] = null !== $this->dataResult ? $this->dataResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSparkJobResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DataResult'])) {
            $model->dataResult = dataResult::fromMap($map['DataResult']);
        }

        return $model;
    }
}
