<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitAsyncTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $taskIntermediateResult;

    /**
     * @example 任务名称
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'taskId'                 => 'TaskId',
        'taskIntermediateResult' => 'TaskIntermediateResult',
        'taskName'               => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskIntermediateResult) {
            $res['TaskIntermediateResult'] = $this->taskIntermediateResult;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskIntermediateResult'])) {
            $model->taskIntermediateResult = $map['TaskIntermediateResult'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
