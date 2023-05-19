<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\KillProcessListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The client IP address.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The start command for the container of the application.
     *
     * @example select 1
     *
     * @var string
     */
    public $command;

    /**
     * @description The name of the database.
     *
     * @example test
     *
     * @var string
     */
    public $database;

    /**
     * @description The error message.
     *
     * @example Instance not found.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Execution time (UTC+8). If it is left empty, it means to execute immediately.
     *
     * @example 142
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description The IP address of the server.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The ID of the session.
     *
     * @example 1123
     *
     * @var int
     */
    public $sessionId;

    /**
     * @description The SQL statement.
     *
     * @example :
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The status of the task.
     *
     * @example SLEEP
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example t3ogqv07a56n4
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The database username.
     *
     * @example oas
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'clientIp'     => 'ClientIp',
        'command'      => 'Command',
        'database'     => 'Database',
        'errorMessage' => 'ErrorMessage',
        'executeTime'  => 'ExecuteTime',
        'serverIp'     => 'ServerIp',
        'sessionId'    => 'SessionId',
        'sqlText'      => 'SqlText',
        'status'       => 'Status',
        'tenantId'     => 'TenantId',
        'user'         => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
