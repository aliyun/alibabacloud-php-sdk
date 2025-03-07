<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConvertJobResponseBody\job;
use AlibabaCloud\Tea\Model;

class GetMediaConvertJobResponseBody extends Model
{
    /**
     * @description The transcoding task.
     *
     * @var job
     */
    public $job;

    /**
     * @description The ID of the request.
     *
     * @example 4BAEA8E8-1C16-5CD3-AC50-CCBA81A53402
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'job'       => 'Job',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return GetMediaConvertJobResponseBody
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
