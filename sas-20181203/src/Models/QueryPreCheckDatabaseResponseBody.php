<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryPreCheckDatabaseResponseBody extends Model
{
    /**
     * @description The time when the precheck task was complete.
     *
     * @example 1657524396
     *
     * @var int
     */
    public $completedTime;

    /**
     * @description The time when the precheck task was started.
     *
     * @example 1660448660
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The status of the precheck task. Valid values:
     *
     *   **completed**: complete
     *   **created**: started
     *   **error**: failed
     *
     * @example completed
     *
     * @var string
     */
    public $description;

    /**
     * @description The precheck progress in percentage. Valid values: 0 to 100.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example CE500770-42D3-442E-9DDD-156E0F9F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the precheck task. The value is a JSON string that contains the following fields:
     *
     *   **instanceId**: the ID of the server that hosts the database
     *
     *   **checkTime**: the precheck time
     *
     *   **sourceType**: the database type
     *
     *   **results**: the precheck item and result
     *
     *   **item**: the precheck item
     *   **result**: the precheck result
     *
     * > The following section describes the precheck items:
     *
     *   MSSQL
     *
     *   **OSS_INTERNAL_ENDPOINT_CONNECTIVITY**: OSS connectivity check
     *   **SERVICE_CONNECTIVITY**: control network connectivity check
     *   **SQL_SERVER_DB_IN_SIMPLE_RECOVERY_MODE**: recovery mode check
     *   **SQL_SERVER_DB_NOT_ONLINE**: SQL Server database status check
     *
     *   ORACLE
     *
     *   **OSS_INTERNAL_ENDPOINT_CONNECTIVITY**: OSS connectivity check
     *   **SERVICE_CONNECTIVITY**: control network connectivity check
     *   **ORACLE_INSTANCE_STATUS**: Oracle instance status check
     *   **ORACLE_DB_STATUS**: Oracle database status check
     *   **ARCHIVELOG**: archive mode check
     *
     *   MYSQL
     *
     *   **OSS_INTERNAL_ENDPOINT_CONNECTIVITY**: OSS connectivity check
     *   **SERVICE_CONNECTIVITY**: control network connectivity check
     *   **MYSQL_VERSION**: Supports full backup version checking
     *   **MYSQL_BINLOG**: BINLOG check
     *
     * @example [
     * {
     * "instanceId": "i-wz91if83t97xgtn2****",
     * ]
     * @var string
     */
    public $result;

    /**
     * @description The time when the precheck task was last updated.
     *
     * @example 1671084106
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'completedTime' => 'CompletedTime',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'progress'      => 'Progress',
        'requestId'     => 'RequestId',
        'result'        => 'Result',
        'updatedTime'   => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPreCheckDatabaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
