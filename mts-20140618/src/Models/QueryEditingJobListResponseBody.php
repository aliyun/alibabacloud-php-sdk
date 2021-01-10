<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\jobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryEditingJobListResponseBody\nonExistJobIds;
use AlibabaCloud\Tea\Model;

class QueryEditingJobListResponseBody extends Model
{
    /**
     * @var nonExistJobIds
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobList
     */
    public $jobList;
    protected $_name = [
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId'      => 'RequestId',
        'jobList'        => 'JobList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistJobIds) {
            $res['NonExistJobIds'] = null !== $this->nonExistJobIds ? $this->nonExistJobIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->jobList) {
            $res['JobList'] = null !== $this->jobList ? $this->jobList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEditingJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistJobIds'])) {
            $model->nonExistJobIds = nonExistJobIds::fromMap($map['NonExistJobIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JobList'])) {
            $model->jobList = jobList::fromMap($map['JobList']);
        }

        return $model;
    }
}
