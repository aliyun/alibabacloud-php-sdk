<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody\job;
use AlibabaCloud\Tea\Model;

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
        'job'       => 'job',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->job) {
            $res['job'] = null !== $this->job ? $this->job->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobResponseBody
     */
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
