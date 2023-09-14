<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class DeleteAScriptsResponseBody extends Model
{
    /**
     * @description The asynchronous task ID.
     *
     * @example 03cf3fe1-ab37-479b-92a6-b481d762****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The request ID.
     *
     * @example 1B7B7695-3596-50C8-B739-030C6C685E61
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobId'     => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return DeleteAScriptsResponseBody
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
