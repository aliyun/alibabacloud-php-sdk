<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAuditLogRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description This parameter is unavailable.
     *
     * @example None
     *
     * @var string
     */
    public $connId;

    /**
     * @description The name of the database on which the SQL statement was executed.
     *
     * @example adb_test
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The start time of the execution of the SQL statement. The time is displayed in the ISO 8601 standard in the yyyy-MM-dd HH:mm:ss format. The time must be in UTC.
     *
     * @example 2022-01-23 16:05:08
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The IP address and port number of the client that is used to execute the SQL statement.
     *
     * @example 100.104.XX.XX:43908
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description The task ID.
     *
     * @example 202106081752021720161662490345362390
     *
     * @var string
     */
    public $processID;

    /**
     * @description Details of the SQL statement.
     *
     * @example SELECT * FROM tb_courses
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description The type of the SQL statement.
     *
     * @example SELECT
     *
     * @var string
     */
    public $SQLType;

    /**
     * @description Indicates whether the SQL statement was successfully executed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $succeed;

    /**
     * @description The amount of time that is consumed to execute the SQL statement. Unit: milliseconds.
     *
     * @example 216
     *
     * @var string
     */
    public $totalTime;

    /**
     * @description The name of the user who executed the SQL statement.
     *
     * @example test_user
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'connId'      => 'ConnId',
        'DBName'      => 'DBName',
        'executeTime' => 'ExecuteTime',
        'hostAddress' => 'HostAddress',
        'processID'   => 'ProcessID',
        'SQLText'     => 'SQLText',
        'SQLType'     => 'SQLType',
        'succeed'     => 'Succeed',
        'totalTime'   => 'TotalTime',
        'user'        => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connId) {
            $res['ConnId'] = $this->connId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->processID) {
            $res['ProcessID'] = $this->processID;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->SQLType) {
            $res['SQLType'] = $this->SQLType;
        }
        if (null !== $this->succeed) {
            $res['Succeed'] = $this->succeed;
        }
        if (null !== $this->totalTime) {
            $res['TotalTime'] = $this->totalTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnId'])) {
            $model->connId = $map['ConnId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['ProcessID'])) {
            $model->processID = $map['ProcessID'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['SQLType'])) {
            $model->SQLType = $map['SQLType'];
        }
        if (isset($map['Succeed'])) {
            $model->succeed = $map['Succeed'];
        }
        if (isset($map['TotalTime'])) {
            $model->totalTime = $map['TotalTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
