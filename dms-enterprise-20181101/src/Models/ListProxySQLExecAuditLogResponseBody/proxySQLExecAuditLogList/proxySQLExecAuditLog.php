<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponseBody\proxySQLExecAuditLogList;

use AlibabaCloud\Tea\Model;

class proxySQLExecAuditLog extends Model
{
    /**
     * @description Indicates the total number of rows returned after the SQL statement was executed. If an SELECT SQL statement is executed, the return value of this parameter indicates the total number of the queried data rows.
     *
     * @example 1
     *
     * @var int
     */
    public $affectRows;

    /**
     * @description The amount of time that is consumed to execute the SQL statement. Unit: milliseconds.
     *
     * @example 1324
     *
     * @var int
     */
    public $elapsedTime;

    /**
     * @description The execution status of the SQL statement. Valid values:
     *
     *   **FAIL**: The execution of the SQL statement fails.
     *   **CANCEL**: The execution of the SQL statement is canceled.
     *   **SUCCESS**: The SQL statement is executed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $execState;

    /**
     * @description The ID of the database instance.
     *
     * @example 4***
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the database instance.
     *
     * @example pc-uf662nrg017c6****.mysql.polardb.rds.aliyuncs.com:3306【test】
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The time at which the user executes the SQL statement on the database instance. The value of this parameter must be a timestamp that follows the UNIX time format.
     *
     * @example 1636876446000
     *
     * @var string
     */
    public $opTime;

    /**
     * @description The description.
     *
     * @example success
     *
     * @var string
     */
    public $remark;

    /**
     * @description The SQL statement that was executed.
     *
     * @example select 1;
     *
     * @var string
     */
    public $SQL;

    /**
     * @description The type of the SQL statement. Valid values:
     *
     *   **SELECT**
     *   **INSERT**
     *   **DELETE**
     *   **CREATE_TABLE**
     *
     * >  You can choose Operation Audit > Secure Access Proxy in the top navigation bar of the DMS console to view more types of SQL statements.
     * @example SELECT
     *
     * @var string
     */
    public $SQLType;

    /**
     * @description The name of the database.
     *
     * @example test_db
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The ID of the user.
     *
     * @example 4****
     *
     * @var int
     */
    public $userId;

    /**
     * @description The nickname of the user.
     *
     * @example testNickName
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'affectRows'   => 'AffectRows',
        'elapsedTime'  => 'ElapsedTime',
        'execState'    => 'ExecState',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
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
     * @return proxySQLExecAuditLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
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
