<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduInterpreting\V20240828\Models;

use AlibabaCloud\Tea\Model;

class SubmitEvaluationTaskResponseBody extends Model
{
    /**
     * @example BA3BB7D0-E098-5F0C-AF25-0BEFAEE7D1F0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 8fb75c55-98b5-4b82-ae67-5dbb9a0646cc
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitEvaluationTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
