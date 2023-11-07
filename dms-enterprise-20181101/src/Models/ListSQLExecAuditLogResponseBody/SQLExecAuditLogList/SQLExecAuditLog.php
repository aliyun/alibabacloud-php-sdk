<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponseBody\SQLExecAuditLogList;

use AlibabaCloud\Tea\Model;

class SQLExecAuditLog extends Model
{
    /**
     * @description The number of rows affected by the SQL statement. For example, if you execute an SQL statement to query data, the number of retrieved rows is returned.
     *
     * @example 2
     *
     * @var int
     */
    public $affectRows;

    /**
     * @description The ID of the database.
     *
     * @example 2157****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The amount of time consumed by the execution of the SQL statement. Unit: milliseconds.
     *
     * @example 18
     *
     * @var int
     */
    public $elapsedTime;

    /**
     * @description The execution status of the SQL statement. Valid values:
     *
     *   **FAIL**: The SQL statement fails to be executed.
     *   **NOEXE**: The SQL statement has not been executed.
     *   **RUNNING**: The SQL statement is being executed.
     *   **CANCEL**: The execution of the SQL statement is canceled.
     *   **SUCCESS**: The SQL statement is executed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $execState;

    /**
     * @description The ID of the instance.
     *
     * @example 185***
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the database.
     *
     * >  If the SQL statement takes effect on an instance, the name of the instance is returned.
     * @example polar123@pc-bp1h9tgq4st9g****.mysql.polardb.rds.aliyuncs.com:3306[polar_qw_test]
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is a physical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The time when the operation specified by the SQL statement was performed on the instance or database.
     *
     * @example 2021-11-08 11:04:27
     *
     * @var string
     */
    public $opTime;

    /**
     * @description The comment on the SQL statement.
     *
     * @example success
     *
     * @var string
     */
    public $remark;

    /**
     * @description The SQL statement that was written.
     *
     * @example SELECT * FROM `polar123`.`p_qw` ORDER BY `id` DESC
     *
     * @var string
     */
    public $SQL;

    /**
     * @description The type of the SQL statement. Valid values:
     *
     *   **SELECT**: the SQL statement that is used to query data.
     *   **INSERT**: the SQL statement that is used to insert data.
     *   **DELETE**: the SQL statement that is used to delete data.
     *   **CREATE_TABLE**: the SQL statement that is used to create tables.
     *
     * >  To view more types of SQL statements, log on to the DMS console and click Security and Specifications. In the left-side navigation pane, click **Operation Audit**. Then, you can view all supported types of SQL statements from the **SQL type** drop-down list.
     * @example SELECT
     *
     * @var string
     */
    public $SQLType;

    /**
     * @description The name of the database.
     *
     * @example polar123
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The ID of the user who wrote the SQL statement.
     *
     * @example 12****
     *
     * @var int
     */
    public $userId;

    /**
     * @description The nickname of the user who wrote the SQL statement.
     *
     * @example test_UserName
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'affectRows'   => 'AffectRows',
        'dbId'         => 'DbId',
        'elapsedTime'  => 'ElapsedTime',
        'execState'    => 'ExecState',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'logic'        => 'Logic',
        'opTime'       => 'OpTime',
        'remark'       => 'Remark',
        'SQL'          => 'SQL',
        'SQLType'      => 'SQLType',
        'schemaName'   => 'SchemaName',
        'userId'       => 'UserId',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }
        if (null !== $this->execState) {
            $res['ExecState'] = $this->execState;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->opTime) {
            $res['OpTime'] = $this->opTime;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->SQLType) {
            $res['SQLType'] = $this->SQLType;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLExecAuditLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }
        if (isset($map['ExecState'])) {
            $model->execState = $map['ExecState'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['OpTime'])) {
            $model->opTime = $map['OpTime'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['SQLType'])) {
            $model->SQLType = $map['SQLType'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
