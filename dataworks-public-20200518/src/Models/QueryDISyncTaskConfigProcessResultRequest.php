<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class QueryDISyncTaskConfigProcessResultRequest extends Model
{
    /**
     * @var int
     */
    public $asyncProcessId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'asyncProcessId' => 'AsyncProcessId',
        'projectId' => 'ProjectId',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncProcessId) {
            $res['AsyncProcessId'] = $this->asyncProcessId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AsyncProcessId'])) {
            $model->asyncProcessId = $map['AsyncProcessId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
