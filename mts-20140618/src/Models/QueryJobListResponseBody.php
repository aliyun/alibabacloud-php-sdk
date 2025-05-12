<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\nonExistJobIds;

class QueryJobListResponseBody extends Model
{
    /**
     * @var jobList
     */
    public $jobList;

    /**
     * @var nonExistJobIds
     */
    public $nonExistJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobList' => 'JobList',
        'nonExistJobIds' => 'NonExistJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->jobList) {
            $this->jobList->validate();
        }
        if (null !== $this->nonExistJobIds) {
            $this->nonExistJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobList) {
            $res['JobList'] = null !== $this->jobList ? $this->jobList->toArray($noStream) : $this->jobList;
        }

        if (null !== $this->nonExistJobIds) {
            $res['NonExistJobIds'] = null !== $this->nonExistJobIds ? $this->nonExistJobIds->toArray($noStream) : $this->nonExistJobIds;
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
        if (isset($map['JobList'])) {
            $model->jobList = jobList::fromMap($map['JobList']);
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
