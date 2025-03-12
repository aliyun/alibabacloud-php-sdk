<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationTaskRequest\operationTaskInstances;
use AlibabaCloud\Tea\Model;

class ListOperationTaskRequest extends Model
{
    /**
     * @description The ID of the check item.
     *
     * > You can call the [ListCheckResult](~~ListCheckResult~~) API to obtain the check item ID.
     * @example 76
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The page number to display in a paginated query.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Set the language type for the request and response messages. The default value is **zh**. Values:
     *
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The instance information of the operation tasks to be queried.
     *
     * @var operationTaskInstances[]
     */
    public $operationTaskInstances;

    /**
     * @description The maximum number of items to display per page in a paginated query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description A list of task statuses. Multiple statuses should be separated by commas (,). Values:
     *
     * - **INIT**: Initialization
     * - **FAIL**: Processing failed
     * - **THROTTLING**: Repairing concurrently
     * - **IN_BACKUP**: Backing up
     * - **BACKED_UP**: Backed up
     * - **BACKUP_FAIL**: Backup failed
     * - **REPAIRING**: Repairing
     * - **REPAIR_SUCCESS**: Repair succeeded
     * - **REPAIR_FAIL**: Repair failed
     * - **REPAIR_SUCCESS_VERIFYING**: Verifying repair success
     * - **REPAIR_SUCCESS_UNVERIFIED**: Repair success verification failed
     * - **REPAIR_SUCCESS_VERIFIED**: Repair success verified
     * - **REPAIR_RE_EXECUTE**: Re-executing repair
     * - **ROLL_BACKING**: Rolling back
     * - **ROLL_BACKED**: Rolled back
     * - **ROLL_BACK_FAIL**: Rollback failed
     * - **ROLL_BACK_INIT**: Rollback initiated
     * - **ROLL_BACK_VERIFYING**: Verifying rollback success
     * - **ROLL_BACK_UNVERIFIED**: Rollback success verification failed
     * - **ROLL_BACK_VERIFIED**: Rollback success verified
     * @var string[]
     */
    public $statuses;

    /**
     * @description The ID of the task to be queried.
     *
     * @example d7b2acf8d362742123e4a84e1bf8****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of operation task to be queried:
     * - ROLLBACK: Rollback
     * @example REPAIR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId'                => 'CheckId',
        'currentPage'            => 'CurrentPage',
        'lang'                   => 'Lang',
        'operationTaskInstances' => 'OperationTaskInstances',
        'pageSize'               => 'PageSize',
        'statuses'               => 'Statuses',
        'taskId'                 => 'TaskId',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operationTaskInstances) {
            $res['OperationTaskInstances'] = [];
            if (null !== $this->operationTaskInstances && \is_array($this->operationTaskInstances)) {
                $n = 0;
                foreach ($this->operationTaskInstances as $item) {
                    $res['OperationTaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOperationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OperationTaskInstances'])) {
            if (!empty($map['OperationTaskInstances'])) {
                $model->operationTaskInstances = [];
                $n                             = 0;
                foreach ($map['OperationTaskInstances'] as $item) {
                    $model->operationTaskInstances[$n++] = null !== $item ? operationTaskInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
