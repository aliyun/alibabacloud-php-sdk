<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProcessStatsCompositionResponseBody\data\allProcessList\processSqlLists;

use AlibabaCloud\Dara\Model;

class processSqlList extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $command;

    /**
     * @var int
     */
    public $cpuTime;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $dynamicSql;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $proxySessId;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var int
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'command' => 'Command',
        'cpuTime' => 'CpuTime',
        'database' => 'Database',
        'dynamicSql' => 'DynamicSql',
        'executeTime' => 'ExecuteTime',
        'planId' => 'PlanId',
        'proxySessId' => 'ProxySessId',
        'serverIp' => 'ServerIp',
        'sessionId' => 'SessionId',
        'sqlId' => 'SqlId',
        'sqlText' => 'SqlText',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'traceId' => 'TraceId',
        'user' => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->dynamicSql) {
            $res['DynamicSql'] = $this->dynamicSql;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DynamicSql'])) {
            $model->dynamicSql = $map['DynamicSql'];
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
