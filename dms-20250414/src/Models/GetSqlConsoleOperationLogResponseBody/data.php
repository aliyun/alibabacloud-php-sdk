<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetSqlConsoleOperationLogResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $affectRows;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var string
     */
    public $databaseSearchName;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'affectRows' => 'AffectRows',
        'cost' => 'Cost',
        'databaseSearchName' => 'DatabaseSearchName',
        'error' => 'Error',
        'schema' => 'Schema',
        'sql' => 'Sql',
        'sqlType' => 'SqlType',
        'startTime' => 'StartTime',
        'success' => 'Success',
        'username' => 'Username',
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

        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }

        if (null !== $this->databaseSearchName) {
            $res['DatabaseSearchName'] = $this->databaseSearchName;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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

        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }

        if (isset($map['DatabaseSearchName'])) {
            $model->databaseSearchName = $map['DatabaseSearchName'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
