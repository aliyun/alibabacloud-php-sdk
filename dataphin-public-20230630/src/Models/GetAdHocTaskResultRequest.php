<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetAdHocTaskResultRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $subTaskId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
        'subTaskId' => 'SubTaskId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->subTaskId) {
            $res['SubTaskId'] = $this->subTaskId;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SubTaskId'])) {
            $model->subTaskId = $map['SubTaskId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
