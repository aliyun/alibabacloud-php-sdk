<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponseBody\SQLExecAuditLogList;

use AlibabaCloud\Dara\Model;

class SQLExecAuditLog extends Model
{
    /**
     * @var int
     */
    public $affectRows;
    /**
     * @var int
     */
    public $dbId;
    /**
     * @var int
     */
    public $elapsedTime;
    /**
     * @var string
     */
    public $execState;
    /**
     * @var int
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var bool
     */
    public $logic;
    /**
     * @var string
     */
    public $opTime;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $SQL;
    /**
     * @var string
     */
    public $SQLType;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var int
     */
    public $userId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
