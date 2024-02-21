<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data;

use AlibabaCloud\Tea\Model;

class sessionList extends Model
{
    /**
     * @description Indicates whether the operation is active. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The IP address of the client.
     *
     * @example 219.143.177.4:52324
     *
     * @var string
     */
    public $client;

    /**
     * @description The document that contains the complete command object associated with the operation.
     *
     * @example "command" : {
     * }
     * @var string
     */
    public $command;

    /**
     * @description The connection ID.
     *
     * @example 66378736
     *
     * @var int
     */
    public $connectionId;

    /**
     * @description The description of the connection.
     *
     * @example conn1013858
     *
     * @var string
     */
    public $desc;

    /**
     * @description The driver for MongoDB.
     *
     * @example mongo-java-driver|legacy@3.11.2
     *
     * @var string
     */
    public $driver;

    /**
     * @description The host.
     *
     * @example a79******.cloud.et15:3328
     *
     * @var string
     */
    public $host;

    /**
     * @description Indicates whether the operation is marked as terminated.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $killPending;

    /**
     * @description The namespace.
     *
     * @example admin.cmd
     *
     * @var string
     */
    public $ns;

    /**
     * @description The type of the operation.
     *
     * @example update
     *
     * @var string
     */
    public $op;

    /**
     * @description The operation ID.
     *
     * @example 14508
     *
     * @var string
     */
    public $opId;

    /**
     * @description The architecture of the operating system.
     *
     * @example amd64
     *
     * @var string
     */
    public $osArch;

    /**
     * @description The name of the operating system.
     *
     * @example Linux
     *
     * @var string
     */
    public $osName;

    /**
     * @description The type of the operating system.
     *
     * @example Linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The description of the execution plan.
     *
     * @example None
     *
     * @var string
     */
    public $planSummary;

    /**
     * @description The platform.
     *
     * @example Java/Alibaba/1.8.0_152-b5
     *
     * @var string
     */
    public $platform;

    /**
     * @description The duration of the operation. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $secsRunning;

    /**
     * @description The ID of the data shard.
     *
     * >  This parameter is returned for sharded cluster instances.
     * @example d-bp1689995b78****
     *
     * @var string
     */
    public $shard;
    protected $_name = [
        'active'       => 'Active',
        'client'       => 'Client',
        'command'      => 'Command',
        'connectionId' => 'ConnectionId',
        'desc'         => 'Desc',
        'driver'       => 'Driver',
        'host'         => 'Host',
        'killPending'  => 'KillPending',
        'ns'           => 'Ns',
        'op'           => 'Op',
        'opId'         => 'OpId',
        'osArch'       => 'OsArch',
        'osName'       => 'OsName',
        'osType'       => 'OsType',
        'planSummary'  => 'PlanSummary',
        'platform'     => 'Platform',
        'secsRunning'  => 'SecsRunning',
        'shard'        => 'Shard',
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
        if (null !== $this->client) {
            $res['Client'] = $this->client;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->killPending) {
            $res['KillPending'] = $this->killPending;
        }
        if (null !== $this->ns) {
            $res['Ns'] = $this->ns;
        }
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }
        if (null !== $this->opId) {
            $res['OpId'] = $this->opId;
        }
        if (null !== $this->osArch) {
            $res['OsArch'] = $this->osArch;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->planSummary) {
            $res['PlanSummary'] = $this->planSummary;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->secsRunning) {
            $res['SecsRunning'] = $this->secsRunning;
        }
        if (null !== $this->shard) {
            $res['Shard'] = $this->shard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Client'])) {
            $model->client = $map['Client'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['KillPending'])) {
            $model->killPending = $map['KillPending'];
        }
        if (isset($map['Ns'])) {
            $model->ns = $map['Ns'];
        }
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }
        if (isset($map['OpId'])) {
            $model->opId = $map['OpId'];
        }
        if (isset($map['OsArch'])) {
            $model->osArch = $map['OsArch'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['PlanSummary'])) {
            $model->planSummary = $map['PlanSummary'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SecsRunning'])) {
            $model->secsRunning = $map['SecsRunning'];
        }
        if (isset($map['Shard'])) {
            $model->shard = $map['Shard'];
        }

        return $model;
    }
}
