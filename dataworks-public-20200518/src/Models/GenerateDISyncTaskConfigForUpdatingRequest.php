<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class GenerateDISyncTaskConfigForUpdatingRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskParam;
    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
        'taskId'      => 'TaskId',
        'taskParam'   => 'TaskParam',
        'taskType'    => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
