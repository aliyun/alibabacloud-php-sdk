<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLastOnceTaskInfoRequest extends Model
{
    /**
     * @description The source of the task.
     *
     * @example console_batch
     *
     * @var string
     */
    public $source;

    /**
     * @description The name of the task. Valid values:
     *
     *   **CLIENT_PROBLEM_CHECK**: client diagnosis task
     *   **CLIENT_DEV_OPS**: O\\&M task of Cloud Assistant
     *   **ASSETS_COLLECTION**: asset collection task
     *
     * This parameter is required.
     * @example ASSETS_COLLECTION
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task. Valid values:
     *
     *   **CLIENT_PROBLEM_CHECK**: client diagnosis task
     *   **CLIENT_DEV_OPS**: O\\&M task of Cloud Assistant
     *   **ASSETS_COLLECTION**: asset collection task
     *
     * This parameter is required.
     * @example ASSETS_COLLECTION
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'source'   => 'Source',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLastOnceTaskInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
