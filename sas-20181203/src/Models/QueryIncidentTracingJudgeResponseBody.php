<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentTracingJudgeResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 73563FEF-BBCB-151C-88AA-8A409CBAF0C6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The result data.
     *
     * @var int[]
     */
    public $tracingJudge;
    protected $_name = [
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'tracingJudge' => 'TracingJudge',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->tracingJudge) {
            $res['TracingJudge'] = $this->tracingJudge;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentTracingJudgeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TracingJudge'])) {
            $model->tracingJudge = $map['TracingJudge'];
        }

        return $model;
    }
}
