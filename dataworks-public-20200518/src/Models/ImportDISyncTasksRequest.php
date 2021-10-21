<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ImportDISyncTasksRequest extends Model
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
    public $body;

    /**
     * @var string
     */
    public $taskParam;
    protected $_name = [
        'projectId' => 'ProjectId',
        'taskType'  => 'TaskType',
        'body'      => 'body',
        'taskParam' => 'TaskParam',
    ];

    public function validate()
    {
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
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDISyncTasksRequest
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        return $model;
    }
}
