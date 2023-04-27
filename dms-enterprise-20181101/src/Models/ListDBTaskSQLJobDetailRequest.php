<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDBTaskSQLJobDetailRequest extends Model
{
    /**
     * @description The number of times that the SQL statement was executed.
     *
     * @example 1276****
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The status of the SQL task. Valid values:
     *
     *   **INIT**: The SQL task was initialized.
     *   **PENDING**: The SQL task waited to be run.
     *   **BE_SCHEDULED**: The SQL task waited to be scheduled.
     *   **FAIL**: The SQL task failed.
     *   **SUCCESS**: The SQL task was successful.
     *   **PAUSE**: The SQL task was paused.
     *   **DELETE**: The SQL task was deleted.
     *   **RUNNING**: The SQL task was being run.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The error code that is returned.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the physical database.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'jobId'      => 'JobId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDBTaskSQLJobDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
