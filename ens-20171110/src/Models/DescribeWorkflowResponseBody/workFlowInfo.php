<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowResponseBody;

use AlibabaCloud\Tea\Model;

class workFlowInfo extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bussinessId;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtEnd;

    /**
     * @var string
     */
    public $gmtExpire;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $gmtStart;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $initAttributes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workerNode;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'aliUid'         => 'AliUid',
        'bizType'        => 'BizType',
        'bussinessId'    => 'BussinessId',
        'duration'       => 'Duration',
        'ensRegionId'    => 'EnsRegionId',
        'gmtCreate'      => 'GmtCreate',
        'gmtEnd'         => 'GmtEnd',
        'gmtExpire'      => 'GmtExpire',
        'gmtModify'      => 'GmtModify',
        'gmtStart'       => 'GmtStart',
        'id'             => 'Id',
        'initAttributes' => 'InitAttributes',
        'instanceId'     => 'InstanceId',
        'name'           => 'Name',
        'priority'       => 'Priority',
        'status'         => 'Status',
        'workerNode'     => 'WorkerNode',
        'workflowId'     => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bussinessId) {
            $res['BussinessId'] = $this->bussinessId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtEnd) {
            $res['GmtEnd'] = $this->gmtEnd;
        }
        if (null !== $this->gmtExpire) {
            $res['GmtExpire'] = $this->gmtExpire;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->gmtStart) {
            $res['GmtStart'] = $this->gmtStart;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->initAttributes) {
            $res['InitAttributes'] = $this->initAttributes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workerNode) {
            $res['WorkerNode'] = $this->workerNode;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workFlowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BussinessId'])) {
            $model->bussinessId = $map['BussinessId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtEnd'])) {
            $model->gmtEnd = $map['GmtEnd'];
        }
        if (isset($map['GmtExpire'])) {
            $model->gmtExpire = $map['GmtExpire'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['GmtStart'])) {
            $model->gmtStart = $map['GmtStart'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InitAttributes'])) {
            $model->initAttributes = $map['InitAttributes'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkerNode'])) {
            $model->workerNode = $map['WorkerNode'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
