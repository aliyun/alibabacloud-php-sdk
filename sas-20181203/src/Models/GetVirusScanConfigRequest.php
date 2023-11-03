<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetVirusScanConfigRequest extends Model
{
    /**
     * @description The type of the task. Valid values:
     *
     *   **VIRUS_VUL_SCHEDULE_SCAN**: a virus scan task.
     *
     * @example VIRUS_VUL_SCHEDULE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVirusScanConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
