<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class StopJobResponseBody extends Model
{
    /**
     * @description The job ID.
     *
     * @example dlc-20210126170216-xxxxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The request ID. You can troubleshoot issues based on the request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-xxxxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId' => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
