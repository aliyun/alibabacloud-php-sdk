<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList;
use AlibabaCloud\Tea\Model;

class SubmitEditingJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var jobResultList
     */
    public $jobResultList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'jobResultList' => 'JobResultList',
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
        if (null !== $this->jobResultList) {
            $res['JobResultList'] = null !== $this->jobResultList ? $this->jobResultList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitEditingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['JobResultList'])) {
            $model->jobResultList = jobResultList::fromMap($map['JobResultList']);
        }

        return $model;
    }
}
