<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data;

use AlibabaCloud\Tea\Model;

class allProcessList extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example xx.xx.xx.xx
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The type of the SQL statement being executed in the session.
     *
     * @example Query
     *
     * @var string
     */
    public $command;

    /**
     * @description The CPU time spent on executing the current SQL statement, in seconds.
     *
     * > This parameter is introduced since OceanBase Database V3.2.4 BP5.
     * @example 1
     *
     * @var int
     */
    public $cpuTime;

    /**
     * @description The name of the database.
     *
     * @example c1
     *
     * @var string
     */
    public $database;

    /**
     * @description The definition of this parameter varies based on whether the SQL statement is executed.
     * When the request is accepted and the result is not returned to the client, this parameter indicates the time interval between the time when the request is accepted and the current time, in seconds.
     * When the request is not accepted, this parameter indicates the duration for which the current status lasts, in seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description The ID of the execution plan.
     *
     * @example 1898
     *
     * @var string
     */
    public $planId;

    /**
     * @description The session ID of the client. If an OceanBase Database Proxy (ODP) is used for connection, the session ID of the ODP is returned.
     *
     * @example 7521015416********
     *
     * @var string
     */
    public $proxySessId;

    /**
     * @description The IP address of the server.
     *
     * @example xx.xx.xx.xx
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The ID of the session.
     *
     * @example 322441****
     *
     * @var int
     */
    public $sessionId;

    /**
     * @description The ID of the SQL statement.
     *
     * @example 45CCBDC7DEBDCDAXXXXAFC********
     *
     * @var string
     */
    public $sqlId;

    /**
     * @description The SQL text.
     *
     * @example select * from c1 where id = 100;
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The status of the session.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the tenant.
     *
     * @example test_mysql
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the trace.
     *
     * @example YB420XXX128-00062XXXX8313XXX1-X-X
     *
     * @var string
     */
    public $traceId;

    /**
     * @description The user to which the session belongs.
     *
     * @example test_user
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'clientIp'    => 'ClientIp',
        'command'     => 'Command',
        'cpuTime'     => 'CpuTime',
        'database'    => 'Database',
        'executeTime' => 'ExecuteTime',
        'planId'      => 'PlanId',
        'proxySessId' => 'ProxySessId',
        'serverIp'    => 'ServerIp',
        'sessionId'   => 'SessionId',
        'sqlId'       => 'SqlId',
        'sqlText'     => 'SqlText',
        'status'      => 'Status',
        'tenantId'    => 'TenantId',
        'traceId'     => 'TraceId',
        'user'        => 'User',
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
        if (null !== $this->cpuTime) {
            $res['CpuTime'] = $this->cpuTime;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->proxySessId) {
            $res['ProxySessId'] = $this->proxySessId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
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
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allProcessList
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
        if (isset($map['CpuTime'])) {
            $model->cpuTime = $map['CpuTime'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['ProxySessId'])) {
            $model->proxySessId = $map['ProxySessId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
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
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
