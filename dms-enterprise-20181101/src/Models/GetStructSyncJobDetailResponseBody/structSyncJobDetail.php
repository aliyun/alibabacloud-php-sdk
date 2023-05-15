<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class structSyncJobDetail extends Model
{
    /**
     * @description The ID of the SQL task group.
     *
     * @example 12345
     *
     * @var int
     */
    public $DBTaskGroupId;

    /**
     * @description The number of SQL statements that have been executed.
     *
     * @example 1
     *
     * @var int
     */
    public $executeCount;

    /**
     * @description The status of the task. Valid values:
     *
     *   **NEW**: The task was created.
     *   **COMPARING**: The schemas of tables were being compared.
     *   **COMPARE_BREAK**: The schema comparison was interrupted.
     *   **COMPARE_FINISH**: The comparison was finished.
     *   **NOT_SCRIPTS**: The comparison was finished but no executable script was available.
     *   **SUBMITED_DBTASK**: The task was submitted.
     *   **DBTASK_SUCCESS**: The task was complete.
     *   **SUBMITED_WORKFLOW**: The ticket was submitted.
     *   **WORKFLOW_SUCCESS**: The ticket was approved.
     *
     * @example DBTASK_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The description of the task.
     *
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @description The type of security rule. Valid values:
     *
     *   **CANNOT_SYNC**: Synchronization cannot be performed.
     *   **WITH_APPROVE**: The schema synchronization can be performed after the ticket is approved. You can call the [SubmitStructSyncOrderApproval](~~206166~~) operation to submit the ticket for approval.
     *   **WITHOUT_APPROVE**: The schema synchronization can be performed without approval.
     *
     * @example WITHOUT_APPROVE
     *
     * @var string
     */
    public $securityRule;

    /**
     * @description The total number of SQL statements.
     *
     * @example 1
     *
     * @var int
     */
    public $sqlCount;

    /**
     * @description The number of tables that have been analyzed.
     *
     * @example 2
     *
     * @var int
     */
    public $tableAnalyzed;

    /**
     * @description The total number of tables.
     *
     * @example 2
     *
     * @var int
     */
    public $tableCount;
    protected $_name = [
        'DBTaskGroupId' => 'DBTaskGroupId',
        'executeCount'  => 'ExecuteCount',
        'jobStatus'     => 'JobStatus',
        'message'       => 'Message',
        'securityRule'  => 'SecurityRule',
        'sqlCount'      => 'SqlCount',
        'tableAnalyzed' => 'TableAnalyzed',
        'tableCount'    => 'TableCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }
        if (null !== $this->executeCount) {
            $res['ExecuteCount'] = $this->executeCount;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->securityRule) {
            $res['SecurityRule'] = $this->securityRule;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->tableAnalyzed) {
            $res['TableAnalyzed'] = $this->tableAnalyzed;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structSyncJobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }
        if (isset($map['ExecuteCount'])) {
            $model->executeCount = $map['ExecuteCount'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SecurityRule'])) {
            $model->securityRule = $map['SecurityRule'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['TableAnalyzed'])) {
            $model->tableAnalyzed = $map['TableAnalyzed'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }

        return $model;
    }
}
