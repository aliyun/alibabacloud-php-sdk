<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListAgenticDataSourcesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
    public $catalogUuid;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

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
    public $instanceSource;

    /**
     * @var string
     */
    public $kmsSecret;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceAccountId;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var int
     */
    public $state;

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
        'catalogUuid' => 'CatalogUuid',
        'dataSourceUuid' => 'DataSourceUuid',
        'dbType' => 'DbType',
        'envType' => 'EnvType',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'host' => 'Host',
        'instanceResourceId' => 'InstanceResourceId',
        'instanceSource' => 'InstanceSource',
        'kmsSecret' => 'KmsSecret',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'resourceAccountId' => 'ResourceAccountId',
        'roleArn' => 'RoleArn',
        'schema' => 'Schema',
        'state' => 'State',
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

        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
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

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->instanceResourceId) {
            $res['InstanceResourceId'] = $this->instanceResourceId;
        }

        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }

        if (null !== $this->kmsSecret) {
            $res['KmsSecret'] = $this->kmsSecret;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceAccountId) {
            $res['ResourceAccountId'] = $this->resourceAccountId;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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

        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
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

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['InstanceResourceId'])) {
            $model->instanceResourceId = $map['InstanceResourceId'];
        }

        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }

        if (isset($map['KmsSecret'])) {
            $model->kmsSecret = $map['KmsSecret'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceAccountId'])) {
            $model->resourceAccountId = $map['ResourceAccountId'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
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
