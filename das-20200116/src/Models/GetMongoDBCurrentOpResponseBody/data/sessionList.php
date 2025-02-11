<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMongoDBCurrentOpResponseBody\data;

use AlibabaCloud\Dara\Model;

class sessionList extends Model
{
    /**
     * @var bool
     */
    public $active;
    /**
     * @var string
     */
    public $client;
    /**
     * @var string
     */
    public $command;
    /**
     * @var int
     */
    public $connectionId;
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $driver;
    /**
     * @var string
     */
    public $host;
    /**
     * @var bool
     */
    public $killPending;
    /**
     * @var string
     */
    public $ns;
    /**
     * @var string
     */
    public $op;
    /**
     * @var string
     */
    public $opId;
    /**
     * @var string
     */
    public $osArch;
    /**
     * @var string
     */
    public $osName;
    /**
     * @var string
     */
    public $osType;
    /**
     * @var string
     */
    public $planSummary;
    /**
     * @var string
     */
    public $platform;
    /**
     * @var int
     */
    public $secsRunning;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
