<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\GetDataSourceConnectionInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Database connection string address (domain or IP).
     *
     * @example 172.**.**.48
     *
     * @var string
     */
    public $address;

    /**
     * @description Permission level:
     *
     * - 0 -- Private
     * - 1 -- Collaborative Editing (old)
     * - 11 -- Collaborative Editing - Space Members
     * - 12 -- Collaborative Editing - Specified to Individuals
     *
     * @example 0
     *
     * @var string
     */
    public $authLevel;

    /**
     * @description Quick BI user ID of the creator.
     *
     * @example U240****0880C6095
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description Data source ID.
     *
     * @example a201c85c-******
     *
     * @var string
     */
    public $dsId;

    /**
     * @description Data source type.
     *
     * @example mysql
     *
     * @var string
     */
    public $dsType;

    /**
     * @description Version of the data source.
     *
     * @example 5.7
     *
     * @var string
     */
    public $dsVersion;

    /**
     * @description Database instance, corresponding to the database name, and for ODPS, it is the project.
     *
     * @example rm*********t44ju1
     *
     * @var string
     */
    public $instance;

    /**
     * @description Instance ID.
     *
     * @example rm*********t44ju1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Quick BI user ID of the modifier.
     *
     * @example U240****0880C6095
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description Whether the impala data source requires authentication to log in:
     *
     * - true - Requires account and password login
     * - false - No authentication required (default)
     *
     * @example true
     *
     * @var bool
     */
    public $noSasl;

    /**
     * @description Primary data source type for multi-engine data sources.
     *
     * @example dataphin
     *
     * @var string
     */
    public $parentDsType;

    /**
     * @description Port.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description Used for front-end display when obtaining connection details for ODPS.
     *
     * @example prod-ossdoc
     *
     * @var string
     */
    public $project;

    /**
     * @description Database schema, only needs to be set for databases that support schemas.
     *
     * @example Analysis
     *
     * @var string
     */
    public $schema;

    /**
     * @description Display name of the data source on the front end.
     *
     * @example 0327
     *
     * @var string
     */
    public $showName;

    /**
     * @description Workspace ID to which the data source belongs.
     *
     * @example 0de6**2-d**-4720-8836-0cc****1394c
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'address' => 'Address',
        'authLevel' => 'AuthLevel',
        'creatorId' => 'CreatorId',
        'dsId' => 'DsId',
        'dsType' => 'DsType',
        'dsVersion' => 'DsVersion',
        'instance' => 'Instance',
        'instanceId' => 'InstanceId',
        'modifyUser' => 'ModifyUser',
        'noSasl' => 'NoSasl',
        'parentDsType' => 'ParentDsType',
        'port' => 'Port',
        'project' => 'Project',
        'schema' => 'Schema',
        'showName' => 'ShowName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->authLevel) {
            $res['AuthLevel'] = $this->authLevel;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->dsVersion) {
            $res['DsVersion'] = $this->dsVersion;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->noSasl) {
            $res['NoSasl'] = $this->noSasl;
        }
        if (null !== $this->parentDsType) {
            $res['ParentDsType'] = $this->parentDsType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AuthLevel'])) {
            $model->authLevel = $map['AuthLevel'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['DsVersion'])) {
            $model->dsVersion = $map['DsVersion'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['NoSasl'])) {
            $model->noSasl = $map['NoSasl'];
        }
        if (isset($map['ParentDsType'])) {
            $model->parentDsType = $map['ParentDsType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
