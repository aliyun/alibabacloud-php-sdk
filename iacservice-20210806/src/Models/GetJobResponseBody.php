<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody\job;

class GetJobResponseBody extends Model
{
    /**
     * @var job
     */
    public $job;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'job' => 'job',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->job) {
            $this->job->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->job) {
            $res['job'] = null !== $this->job ? $this->job->toArray($noStream) : $this->job;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['job'])) {
            $model->job = job::fromMap($map['job']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
