<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitBeautifyJobsResponseBody\jobList;
use AlibabaCloud\Tea\Model;

class SubmitBeautifyJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobList
     */
    public $jobList;
    protected $_name = [
        'requestId' => 'RequestId',
        'jobList'   => 'JobList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBeautifyJobsResponseBody
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

        return $model;
    }
}
