<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticResponseBody\data\autoIncrementUsageList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The usage details of auto-increment IDs.
     *
     * @var autoIncrementUsageList[]
     */
    public $autoIncrementUsageList;

    /**
     * @description The error message returned if the task fails.
     *
     * @example the given database name list invalid, none of the database names in the list exist on the instance
     *
     * @var string
     */
    public $errorInfo;

    /**
     * @description Indicates whether the task is complete. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $finish;

    /**
     * @description The task status. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **RUNNING**: The task is being executed.
     *   **SUCCESS**: The task succeeds.
     *   **FAIL**: The task fails.
     *
     * @example INIT
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The time when the request was made. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1697183353000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'autoIncrementUsageList' => 'AutoIncrementUsageList',
        'errorInfo'              => 'ErrorInfo',
        'finish'                 => 'Finish',
        'taskStatus'             => 'TaskStatus',
        'timestamp'              => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoIncrementUsageList) {
            $res['AutoIncrementUsageList'] = [];
            if (null !== $this->autoIncrementUsageList && \is_array($this->autoIncrementUsageList)) {
                $n = 0;
                foreach ($this->autoIncrementUsageList as $item) {
                    $res['AutoIncrementUsageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['AutoIncrementUsageList'])) {
            if (!empty($map['AutoIncrementUsageList'])) {
                $model->autoIncrementUsageList = [];
                $n                             = 0;
                foreach ($map['AutoIncrementUsageList'] as $item) {
                    $model->autoIncrementUsageList[$n++] = null !== $item ? autoIncrementUsageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
