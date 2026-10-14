<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class UpdateAgenticDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $authAccount;

    /**
     * @var string
     */
    public $authPassword;

    /**
     * @var int
     */
    public $authType;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $createMode;

    /**
     * @var string
     */
    public $dataSourceUuid;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceResourceId;

    /**
     * @var string
     */
    public $kmsSecret;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $snowflakeRole;

    /**
     * @var string
     */
    public $snowflakeWarehouse;

    /**
     * @var int
     */
    public $syncAlias;

    /**
     * @var int
     */
    public $useSsl;
    protected $_name = [
        'alias' => 'Alias',
        'authAccount' => 'AuthAccount',
        'authPassword' => 'AuthPassword',
        'authType' => 'AuthType',
        'catalogName' => 'CatalogName',
        'createMode' => 'CreateMode',
        'dataSourceUuid' => 'DataSourceUuid',
        'dbType' => 'DbType',
        'envType' => 'EnvType',
        'host' => 'Host',
        'instanceResourceId' => 'InstanceResourceId',
        'kmsSecret' => 'KmsSecret',
        'policyId' => 'PolicyId',
        'port' => 'Port',
        'roleArn' => 'RoleArn',
        'schema' => 'Schema',
        'snowflakeRole' => 'SnowflakeRole',
        'snowflakeWarehouse' => 'SnowflakeWarehouse',
        'syncAlias' => 'SyncAlias',
        'useSsl' => 'UseSsl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->authAccount) {
            $res['AuthAccount'] = $this->authAccount;
        }

        if (null !== $this->authPassword) {
            $res['AuthPassword'] = $this->authPassword;
        }

        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }

        if (null !== $this->dataSourceUuid) {
            $res['DataSourceUuid'] = $this->dataSourceUuid;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->instanceResourceId) {
            $res['InstanceResourceId'] = $this->instanceResourceId;
        }

        if (null !== $this->kmsSecret) {
            $res['KmsSecret'] = $this->kmsSecret;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->snowflakeRole) {
            $res['SnowflakeRole'] = $this->snowflakeRole;
        }

        if (null !== $this->snowflakeWarehouse) {
            $res['SnowflakeWarehouse'] = $this->snowflakeWarehouse;
        }

        if (null !== $this->syncAlias) {
            $res['SyncAlias'] = $this->syncAlias;
        }

        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['AuthAccount'])) {
            $model->authAccount = $map['AuthAccount'];
        }

        if (isset($map['AuthPassword'])) {
            $model->authPassword = $map['AuthPassword'];
        }

        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }

        if (isset($map['DataSourceUuid'])) {
            $model->dataSourceUuid = $map['DataSourceUuid'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['InstanceResourceId'])) {
            $model->instanceResourceId = $map['InstanceResourceId'];
        }

        if (isset($map['KmsSecret'])) {
            $model->kmsSecret = $map['KmsSecret'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['SnowflakeRole'])) {
            $model->snowflakeRole = $map['SnowflakeRole'];
        }

        if (isset($map['SnowflakeWarehouse'])) {
            $model->snowflakeWarehouse = $map['SnowflakeWarehouse'];
        }

        if (isset($map['SyncAlias'])) {
            $model->syncAlias = $map['SyncAlias'];
        }

        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }

        return $model;
    }
}
