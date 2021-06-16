<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponseBody\data;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponseBody\data\dataList\flowInstance;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var int
     */
    public $triggerMode;

    /**
     * @var int
     */
    public $pipelineConfigId;

    /**
     * @var string
     */
    public $deletion;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $instNumber;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $packages;

    /**
     * @var int
     */
    public $flowInstId;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var flowInstance
     */
    public $flowInstance;
    protected $_name = [
        'status'           => 'Status',
        'createTime'       => 'CreateTime',
        'statusName'       => 'StatusName',
        'triggerMode'      => 'TriggerMode',
        'pipelineConfigId' => 'PipelineConfigId',
        'deletion'         => 'Deletion',
        'creator'          => 'Creator',
        'instNumber'       => 'InstNumber',
        'modifier'         => 'Modifier',
        'packages'         => 'Packages',
        'flowInstId'       => 'FlowInstId',
        'pipelineId'       => 'PipelineId',
        'id'               => 'Id',
        'modifyTime'       => 'ModifyTime',
        'flowInstance'     => 'FlowInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->triggerMode) {
            $res['TriggerMode'] = $this->triggerMode;
        }
        if (null !== $this->pipelineConfigId) {
            $res['PipelineConfigId'] = $this->pipelineConfigId;
        }
        if (null !== $this->deletion) {
            $res['Deletion'] = $this->deletion;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->instNumber) {
            $res['InstNumber'] = $this->instNumber;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->packages) {
            $res['Packages'] = $this->packages;
        }
        if (null !== $this->flowInstId) {
            $res['FlowInstId'] = $this->flowInstId;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->flowInstance) {
            $res['FlowInstance'] = null !== $this->flowInstance ? $this->flowInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['TriggerMode'])) {
            $model->triggerMode = $map['TriggerMode'];
        }
        if (isset($map['PipelineConfigId'])) {
            $model->pipelineConfigId = $map['PipelineConfigId'];
        }
        if (isset($map['Deletion'])) {
            $model->deletion = $map['Deletion'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['InstNumber'])) {
            $model->instNumber = $map['InstNumber'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['Packages'])) {
            $model->packages = $map['Packages'];
        }
        if (isset($map['FlowInstId'])) {
            $model->flowInstId = $map['FlowInstId'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['FlowInstance'])) {
            $model->flowInstance = flowInstance::fromMap($map['FlowInstance']);
        }

        return $model;
    }
}
