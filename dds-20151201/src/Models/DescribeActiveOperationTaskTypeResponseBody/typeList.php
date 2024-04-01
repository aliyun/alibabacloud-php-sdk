<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskTypeResponseBody;

use AlibabaCloud\Tea\Model;

class typeList extends Model
{
    /**
     * @description The number of pending tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of the task. Valid values:
     *
     *   **rds_apsaradb_transfer**: data migration
     *   **rds_apsaradb_upgrade**: minor version update
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The task type in English.
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskTypeInfoEn;

    /**
     * @description The task type in Chinese.
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskTypeInfoZh;
    protected $_name = [
        'count'          => 'Count',
        'taskType'       => 'TaskType',
        'taskTypeInfoEn' => 'TaskTypeInfoEn',
        'taskTypeInfoZh' => 'TaskTypeInfoZh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->taskTypeInfoEn) {
            $res['TaskTypeInfoEn'] = $this->taskTypeInfoEn;
        }
        if (null !== $this->taskTypeInfoZh) {
            $res['TaskTypeInfoZh'] = $this->taskTypeInfoZh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return typeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TaskTypeInfoEn'])) {
            $model->taskTypeInfoEn = $map['TaskTypeInfoEn'];
        }
        if (isset($map['TaskTypeInfoZh'])) {
            $model->taskTypeInfoZh = $map['TaskTypeInfoZh'];
        }

        return $model;
    }
}
