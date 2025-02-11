<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\CreateStorageAnalysisTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $createTaskSuccess;
    /**
     * @var string
     */
    public $errorMessage;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
