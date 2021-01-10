<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponseBody\jobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAsrJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryAsrJobListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobList
     */
    public $jobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'   => 'RequestId',
        'jobList'     => 'JobList',
        'nonExistIds' => 'NonExistIds',
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
        if (null !== $this->jobList) {
            $res['JobList'] = null !== $this->jobList ? $this->jobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAsrJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JobList'])) {
            $model->jobList = jobList::fromMap($map['JobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
