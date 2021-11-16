<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @var int
     */
    public $bindingCalcEngineId;

    /**
     * @var int
     */
    public $connectStatus;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $defaultEngine;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
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
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var bool
     */
    public $shared;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'bindingCalcEngineId' => 'BindingCalcEngineId',
        'connectStatus'       => 'ConnectStatus',
        'connectionType'      => 'ConnectionType',
        'content'             => 'Content',
        'defaultEngine'       => 'DefaultEngine',
        'description'         => 'Description',
        'envType'             => 'EnvType',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'name'                => 'Name',
        'operator'            => 'Operator',
        'projectId'           => 'ProjectId',
        'sequence'            => 'Sequence',
        'shared'              => 'Shared',
        'status'              => 'Status',
        'subType'             => 'SubType',
        'tenantId'            => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindingCalcEngineId) {
            $res['BindingCalcEngineId'] = $this->bindingCalcEngineId;
        }
        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->defaultEngine) {
            $res['DefaultEngine'] = $this->defaultEngine;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->shared) {
            $res['Shared'] = $this->shared;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindingCalcEngineId'])) {
            $model->bindingCalcEngineId = $map['BindingCalcEngineId'];
        }
        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DefaultEngine'])) {
            $model->defaultEngine = $map['DefaultEngine'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Shared'])) {
            $model->shared = $map['Shared'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
