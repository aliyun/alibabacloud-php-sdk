<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\nonExistJobIds;
use AlibabaCloud\Tea\Model;

class QueryMcuJobResponseBody extends Model
{
    /**
     * @var jobResult
     */
    public $jobResult;

    /**
     * @var nonExistJobIds
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobResult'      => 'JobResult',
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobResult) {
            $res['JobResult'] = null !== $this->jobResult ? $this->jobResult->toMap() : null;
        }
        if (null !== $this->nonExistJobIds) {
            $res['NonExistJobIds'] = null !== $this->nonExistJobIds ? $this->nonExistJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMcuJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobResult'])) {
            $model->jobResult = jobResult::fromMap($map['JobResult']);
        }
        if (isset($map['NonExistJobIds'])) {
            $model->nonExistJobIds = nonExistJobIds::fromMap($map['NonExistJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
