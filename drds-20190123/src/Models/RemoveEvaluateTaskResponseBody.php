<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\RemoveEvaluateTaskResponseBody\taskManageResult;
use AlibabaCloud\Tea\Model;

class RemoveEvaluateTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var taskManageResult
     */
    public $taskManageResult;
    protected $_name = [
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'taskManageResult' => 'TaskManageResult',
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
        if (null !== $this->taskManageResult) {
            $res['TaskManageResult'] = null !== $this->taskManageResult ? $this->taskManageResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveEvaluateTaskResponseBody
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
        if (isset($map['TaskManageResult'])) {
            $model->taskManageResult = taskManageResult::fromMap($map['TaskManageResult']);
        }

        return $model;
    }
}
