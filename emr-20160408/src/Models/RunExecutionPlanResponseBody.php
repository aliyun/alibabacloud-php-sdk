<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class RunExecutionPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $executionPlanInstanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'executionPlanInstanceId' => 'ExecutionPlanInstanceId',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionPlanInstanceId) {
            $res['ExecutionPlanInstanceId'] = $this->executionPlanInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ExecutionPlanInstanceId'])) {
            $model->executionPlanInstanceId = $map['ExecutionPlanInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
