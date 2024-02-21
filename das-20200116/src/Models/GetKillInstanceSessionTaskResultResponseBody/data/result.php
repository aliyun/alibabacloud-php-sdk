<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetKillInstanceSessionTaskResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the session is active.
     *
     * > If the type of the command is Query or Execute and the session in the transaction is not terminated, the session is active.
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The type of the command executed in the session.
     *
     * @example Sleep
     *
     * @var string
     */
    public $command;

    /**
     * @description The name of the database.
     *
     * @example dbTest
     *
     * @var string
     */
    public $db;

    /**
     * @description The IP address and port number of the host that initiated the session.
     *
     * @example 100.104.XX.XX:23428
     *
     * @var string
     */
    public $host;

    /**
     * @description The session ID.
     *
     * @example 8357518
     *
     * @var int
     */
    public $id;

    /**
     * @description The SQL statement executed in the session.
     *
     * @example SELECT sleep(60)
     *
     * @var string
     */
    public $info;

    /**
     * @description The description of the session when the session was terminated.
     *
     *   **SESSION_KILLED**: The session is terminated.
     *   **SESSION_EXPIRED**: The session has expired.
     *   **SESSION_NO_PERMISSION**: The account used to terminate the session has insufficient permissions.
     *   **SESSION_ACCOUNT_ERROR**: The account or password used to terminate the session is invalid.
     *   **SESSION_IGNORED_USER**: The session of the account does not need to be terminated.
     *   **SESSION_INTERNAL_USER_OR_COMMAND**: The session is a session initiated by or a command run by an Alibaba Cloud O\&M account.
     *   **SESSION_KILL_TASK_TIMEOUT**: Timeout occurs when the session is terminated.
     *   **SESSION_OTHER_ERROR**: Other errors occurred.
     *
     * @example SESSION_KILLED
     *
     * @var string
     */
    public $reason;

    /**
     * @description The status of the session.
     *
     * @example Sending data
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the subtask that terminates the session.
     *
     * @example task_d9e94107-6116-4ac3-b874-81466aff****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The execution duration. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $time;

    /**
     * @description The account of the database.
     *
     * @example testUser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'active'  => 'Active',
        'command' => 'Command',
        'db'      => 'Db',
        'host'    => 'Host',
        'id'      => 'Id',
        'info'    => 'Info',
        'reason'  => 'Reason',
        'state'   => 'State',
        'taskId'  => 'TaskId',
        'time'    => 'Time',
        'user'    => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->db) {
            $res['Db'] = $this->db;
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
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Db'])) {
            $model->db = $map['Db'];
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
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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
