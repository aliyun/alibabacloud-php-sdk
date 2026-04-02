<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateFunagentInput extends Model
{
    /**
     * @var string
     */
    public $adminName;

    /**
     * @var string
     */
    public $adminSecret;

    /**
     * @var float
     */
    public $cpu;

    /**
     * @var int
     */
    public $dbConnections;

    /**
     * @var string
     */
    public $dbHost;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var int
     */
    public $dbPort;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $dbUsername;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $funAgentName;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $replicas;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchIds;
    protected $_name = [
        'adminName' => 'adminName',
        'adminSecret' => 'adminSecret',
        'cpu' => 'cpu',
        'dbConnections' => 'dbConnections',
        'dbHost' => 'dbHost',
        'dbName' => 'dbName',
        'dbPassword' => 'dbPassword',
        'dbPort' => 'dbPort',
        'dbType' => 'dbType',
        'dbUsername' => 'dbUsername',
        'description' => 'description',
        'funAgentName' => 'funAgentName',
        'memory' => 'memory',
        'regionId' => 'regionId',
        'replicas' => 'replicas',
        'securityGroupId' => 'securityGroupId',
        'vpcId' => 'vpcId',
        'vswitchIds' => 'vswitchIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminName) {
            $res['adminName'] = $this->adminName;
        }

        if (null !== $this->adminSecret) {
            $res['adminSecret'] = $this->adminSecret;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->dbConnections) {
            $res['dbConnections'] = $this->dbConnections;
        }

        if (null !== $this->dbHost) {
            $res['dbHost'] = $this->dbHost;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->dbPassword) {
            $res['dbPassword'] = $this->dbPassword;
        }

        if (null !== $this->dbPort) {
            $res['dbPort'] = $this->dbPort;
        }

        if (null !== $this->dbType) {
            $res['dbType'] = $this->dbType;
        }

        if (null !== $this->dbUsername) {
            $res['dbUsername'] = $this->dbUsername;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->funAgentName) {
            $res['funAgentName'] = $this->funAgentName;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->replicas) {
            $res['replicas'] = $this->replicas;
        }

        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchIds) {
            $res['vswitchIds'] = $this->vswitchIds;
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
        if (isset($map['adminName'])) {
            $model->adminName = $map['adminName'];
        }

        if (isset($map['adminSecret'])) {
            $model->adminSecret = $map['adminSecret'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['dbConnections'])) {
            $model->dbConnections = $map['dbConnections'];
        }

        if (isset($map['dbHost'])) {
            $model->dbHost = $map['dbHost'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['dbPassword'])) {
            $model->dbPassword = $map['dbPassword'];
        }

        if (isset($map['dbPort'])) {
            $model->dbPort = $map['dbPort'];
        }

        if (isset($map['dbType'])) {
            $model->dbType = $map['dbType'];
        }

        if (isset($map['dbUsername'])) {
            $model->dbUsername = $map['dbUsername'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['funAgentName'])) {
            $model->funAgentName = $map['funAgentName'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['replicas'])) {
            $model->replicas = $map['replicas'];
        }

        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vswitchIds'])) {
            $model->vswitchIds = $map['vswitchIds'];
        }

        return $model;
    }
}
