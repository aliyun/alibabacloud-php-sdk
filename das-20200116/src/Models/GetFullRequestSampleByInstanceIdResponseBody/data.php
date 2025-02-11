<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestSampleByInstanceIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $database;
    /**
     * @var int
     */
    public $frows;
    /**
     * @var float
     */
    public $lockWaitTime;
    /**
     * @var float
     */
    public $logicalRead;
    /**
     * @var string
     */
    public $originHost;
    /**
     * @var float
     */
    public $physicalAsyncRead;
    /**
     * @var float
     */
    public $physicalSyncRead;
    /**
     * @var int
     */
    public $rows;
    /**
     * @var int
     */
    public $rowsExamined;
    /**
     * @var int
     */
    public $rowsReturned;
    /**
     * @var float
     */
    public $rt;
    /**
     * @var int
     */
    public $scanRows;
    /**
     * @var int
     */
    public $scnt;
    /**
     * @var string
     */
    public $sql;
    /**
     * @var string
     */
    public $sqlId;
    /**
     * @var string
     */
    public $sqlType;
    /**
     * @var int
     */
    public $timestamp;
    /**
     * @var int
     */
    public $updateRows;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'database'          => 'Database',
        'frows'             => 'Frows',
        'lockWaitTime'      => 'LockWaitTime',
        'logicalRead'       => 'LogicalRead',
        'originHost'        => 'OriginHost',
        'physicalAsyncRead' => 'PhysicalAsyncRead',
        'physicalSyncRead'  => 'PhysicalSyncRead',
        'rows'              => 'Rows',
        'rowsExamined'      => 'RowsExamined',
        'rowsReturned'      => 'RowsReturned',
        'rt'                => 'Rt',
        'scanRows'          => 'ScanRows',
        'scnt'              => 'Scnt',
        'sql'               => 'Sql',
        'sqlId'             => 'SqlId',
        'sqlType'           => 'SqlType',
        'timestamp'         => 'Timestamp',
        'updateRows'        => 'UpdateRows',
        'user'              => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->frows) {
            $res['Frows'] = $this->frows;
        }

        if (null !== $this->lockWaitTime) {
            $res['LockWaitTime'] = $this->lockWaitTime;
        }

        if (null !== $this->logicalRead) {
            $res['LogicalRead'] = $this->logicalRead;
        }

        if (null !== $this->originHost) {
            $res['OriginHost'] = $this->originHost;
        }

        if (null !== $this->physicalAsyncRead) {
            $res['PhysicalAsyncRead'] = $this->physicalAsyncRead;
        }

        if (null !== $this->physicalSyncRead) {
            $res['PhysicalSyncRead'] = $this->physicalSyncRead;
        }

        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }

        if (null !== $this->rowsExamined) {
            $res['RowsExamined'] = $this->rowsExamined;
        }

        if (null !== $this->rowsReturned) {
            $res['RowsReturned'] = $this->rowsReturned;
        }

        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }

        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }

        if (null !== $this->scnt) {
            $res['Scnt'] = $this->scnt;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->updateRows) {
            $res['UpdateRows'] = $this->updateRows;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['Frows'])) {
            $model->frows = $map['Frows'];
        }

        if (isset($map['LockWaitTime'])) {
            $model->lockWaitTime = $map['LockWaitTime'];
        }

        if (isset($map['LogicalRead'])) {
            $model->logicalRead = $map['LogicalRead'];
        }

        if (isset($map['OriginHost'])) {
            $model->originHost = $map['OriginHost'];
        }

        if (isset($map['PhysicalAsyncRead'])) {
            $model->physicalAsyncRead = $map['PhysicalAsyncRead'];
        }

        if (isset($map['PhysicalSyncRead'])) {
            $model->physicalSyncRead = $map['PhysicalSyncRead'];
        }

        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }

        if (isset($map['RowsExamined'])) {
            $model->rowsExamined = $map['RowsExamined'];
        }

        if (isset($map['RowsReturned'])) {
            $model->rowsReturned = $map['RowsReturned'];
        }

        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }

        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }

        if (isset($map['Scnt'])) {
            $model->scnt = $map['Scnt'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['UpdateRows'])) {
            $model->updateRows = $map['UpdateRows'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
