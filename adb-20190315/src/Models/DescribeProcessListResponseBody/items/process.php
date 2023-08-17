<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponseBody\items;

use AlibabaCloud\Tea\Model;

class process extends Model
{
    /**
     * @description The type of the statement. Only SELECT can be returned.
     *
     * @example SELECT
     *
     * @var string
     */
    public $command;

    /**
     * @description The name of the database.
     *
     * @example adb_demo
     *
     * @var string
     */
    public $DB;

    /**
     * @description The IP address from which the query was initiated.
     *
     * @example 192.168.XX.XX:12308
     *
     * @var string
     */
    public $host;

    /**
     * @description The ID of the worker thread.
     *
     * @example 49104
     *
     * @var int
     */
    public $id;

    /**
     * @description The SQL statement that is being executed. By default, the first 100 characters of the SQL statement are returned. If the ShowFull parameter is set to True, the complete SQL statement is returned.
     *
     * @example select * from sbtest1,sbtest2,sbtest3,sbtest4
     *
     * @var string
     */
    public $info;

    /**
     * @description The unique ID of the query. You must specify this parameter when you use the KILL PROCESS statement.
     *
     * @example 202011191048151921681492420315100****
     *
     * @var string
     */
    public $processId;

    /**
     * @description The start time of the query. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-11-19T02:48:15Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The amount of time that has elapsed from the start time of the query. Unit: seconds.
     *
     * @example 11
     *
     * @var int
     */
    public $time;

    /**
     * @description The username.
     *
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'command'   => 'Command',
        'DB'        => 'DB',
        'host'      => 'Host',
        'id'        => 'Id',
        'info'      => 'Info',
        'processId' => 'ProcessId',
        'startTime' => 'StartTime',
        'time'      => 'Time',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->DB) {
            $res['DB'] = $this->DB;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return process
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['DB'])) {
            $model->DB = $map['DB'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
