<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\GetEdgeTranscodeJobResponseBody\job;
use AlibabaCloud\Tea\Model;

class GetEdgeTranscodeJobResponseBody extends Model
{
    /**
     * @description The details of the edge transcoding task.
     *
     * @var job
     */
    public $job;

    /**
     * @description The request ID.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'job' => 'Job',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->job) {
            $res['Job'] = null !== $this->job ? $this->job->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEdgeTranscodeJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Job'])) {
            $model->job = job::fromMap($map['Job']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
