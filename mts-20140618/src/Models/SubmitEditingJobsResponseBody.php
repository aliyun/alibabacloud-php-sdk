<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList;
use AlibabaCloud\Tea\Model;

class SubmitEditingJobsResponseBody extends Model
{
    /**
     * @var jobResultList
     */
    public $jobResultList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobResultList' => 'JobResultList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobResultList) {
            $res['JobResultList'] = null !== $this->jobResultList ? $this->jobResultList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['JobResultList'])) {
            $model->jobResultList = jobResultList::fromMap($map['JobResultList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
