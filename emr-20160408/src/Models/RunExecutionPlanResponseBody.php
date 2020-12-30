<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RunExecutionPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $executionPlanInstanceId;
    protected $_name = [
        'requestId'               => 'RequestId',
        'executionPlanInstanceId' => 'ExecutionPlanInstanceId',
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
        if (null !== $this->executionPlanInstanceId) {
            $res['ExecutionPlanInstanceId'] = $this->executionPlanInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunExecutionPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExecutionPlanInstanceId'])) {
            $model->executionPlanInstanceId = $map['ExecutionPlanInstanceId'];
        }

        return $model;
    }
}
