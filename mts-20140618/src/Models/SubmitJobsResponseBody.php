<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList;

class SubmitJobsResponseBody extends Model
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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->jobResultList) {
            $this->jobResultList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobResultList) {
            $res['JobResultList'] = null !== $this->jobResultList ? $this->jobResultList->toArray($noStream) : $this->jobResultList;
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
        if (isset($map['JobResultList'])) {
            $model->jobResultList = jobResultList::fromMap($map['JobResultList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
