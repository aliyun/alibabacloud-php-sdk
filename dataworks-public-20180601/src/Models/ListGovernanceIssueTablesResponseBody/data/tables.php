<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListGovernanceIssueTablesResponseBody\data;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $datasourceType;

    /**
     * @var int
     */
    public $downstreamDependencyCount;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $lifeCycle;

    /**
     * @var string
     */
    public $mcProjectName;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $ruleCategory;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $tableSize;
    protected $_name = [
        'bizDate'                   => 'BizDate',
        'clusterId'                 => 'ClusterId',
        'createTime'                => 'CreateTime',
        'databaseName'              => 'DatabaseName',
        'datasourceType'            => 'DatasourceType',
        'downstreamDependencyCount' => 'DownstreamDependencyCount',
        'lastAccessTime'            => 'LastAccessTime',
        'lifeCycle'                 => 'LifeCycle',
        'mcProjectName'             => 'McProjectName',
        'ownerId'                   => 'OwnerId',
        'projectId'                 => 'ProjectId',
        'properties'                => 'Properties',
        'ruleCategory'              => 'RuleCategory',
        'ruleId'                    => 'RuleId',
        'schema'                    => 'Schema',
        'tableGuid'                 => 'TableGuid',
        'tableName'                 => 'TableName',
        'tableSize'                 => 'TableSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->datasourceType) {
            $res['DatasourceType'] = $this->datasourceType;
        }
        if (null !== $this->downstreamDependencyCount) {
            $res['DownstreamDependencyCount'] = $this->downstreamDependencyCount;
        }
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->mcProjectName) {
            $res['McProjectName'] = $this->mcProjectName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableSize) {
            $res['TableSize'] = $this->tableSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatasourceType'])) {
            $model->datasourceType = $map['DatasourceType'];
        }
        if (isset($map['DownstreamDependencyCount'])) {
            $model->downstreamDependencyCount = $map['DownstreamDependencyCount'];
        }
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['McProjectName'])) {
            $model->mcProjectName = $map['McProjectName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableSize'])) {
            $model->tableSize = $map['TableSize'];
        }

        return $model;
    }
}
