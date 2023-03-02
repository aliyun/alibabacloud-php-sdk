<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationProcessResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the step in the migration task.
     *
     * @example IMPORE_PREPARE
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The running status of the step in the migration task. Valid values:
     *
     *   INT
     *   RUNNING
     *   FAILURE
     *   SUCCESS
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'taskName'   => 'TaskName',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
