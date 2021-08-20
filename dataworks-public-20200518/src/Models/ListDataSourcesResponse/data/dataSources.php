<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesResponse\data;

use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @var bool
     */
    public $shared;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $connectStatus;

    /**
     * @var int
     */
    public $bindingCalcEngineId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var bool
     */
    public $defaultEngine;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'shared'              => 'Shared',
        'gmtModified'         => 'GmtModified',
        'connectStatus'       => 'ConnectStatus',
        'bindingCalcEngineId' => 'BindingCalcEngineId',
        'description'         => 'Description',
        'dataSourceType'      => 'DataSourceType',
        'gmtCreate'           => 'GmtCreate',
        'defaultEngine'       => 'DefaultEngine',
        'operator'            => 'Operator',
        'sequence'            => 'Sequence',
        'envType'             => 'EnvType',
        'tenantId'            => 'TenantId',
        'name'                => 'Name',
        'subType'             => 'SubType',
        'id'                  => 'Id',
        'projectId'           => 'ProjectId',
        'status'              => 'Status',
        'content'             => 'Content',
    ];

    public function validate()
    {
        Model::validateRequired('shared', $this->shared, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('connectStatus', $this->connectStatus, true);
        Model::validateRequired('bindingCalcEngineId', $this->bindingCalcEngineId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('dataSourceType', $this->dataSourceType, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('defaultEngine', $this->defaultEngine, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('sequence', $this->sequence, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('subType', $this->subType, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shared) {
            $res['Shared'] = $this->shared;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
        }
        if (null !== $this->bindingCalcEngineId) {
            $res['BindingCalcEngineId'] = $this->bindingCalcEngineId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->defaultEngine) {
            $res['DefaultEngine'] = $this->defaultEngine;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Shared'])) {
            $model->shared = $map['Shared'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }
        if (isset($map['BindingCalcEngineId'])) {
            $model->bindingCalcEngineId = $map['BindingCalcEngineId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DefaultEngine'])) {
            $model->defaultEngine = $map['DefaultEngine'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
