<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\CreateStorageAnalysisTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the task is created. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $createTaskSuccess;

    /**
     * @description The error message returned.
     *
     * @example unknown error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The task ID.
     *
     * @example 910f83f4b96df0524ddc5749f61539f8
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTaskSuccess' => 'CreateTaskSuccess',
        'errorMessage'      => 'ErrorMessage',
        'taskId'            => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTaskSuccess) {
            $res['CreateTaskSuccess'] = $this->createTaskSuccess;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['CreateTaskSuccess'])) {
            $model->createTaskSuccess = $map['CreateTaskSuccess'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
