<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDISyncTaskRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $taskContent;

    /**
     * @var string
     */
    public $taskParam;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'projectId'   => 'ProjectId',
        'taskType'    => 'TaskType',
        'taskContent' => 'TaskContent',
        'taskParam'   => 'TaskParam',
        'taskName'    => 'TaskName',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('taskContent', $this->taskContent, true);
        Model::validateRequired('taskParam', $this->taskParam, true);
        Model::validateRequired('taskName', $this->taskName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskContent) {
            $res['TaskContent'] = $this->taskContent;
        }
        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDISyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskContent'])) {
            $model->taskContent = $map['TaskContent'];
        }
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
