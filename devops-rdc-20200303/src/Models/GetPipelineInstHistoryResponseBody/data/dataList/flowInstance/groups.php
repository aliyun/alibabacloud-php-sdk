<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponseBody\data\dataList\flowInstance;

use AlibabaCloud\Tea\Model;

class groups extends Model
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
    public $deleteStatus;

    /**
     * @var int
     */
    public $idExtent;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $resultStatus;

    /**
     * @var int
     */
    public $flowInstId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modifyTime;
    protected $_name = [
        'status'       => 'Status',
        'createTime'   => 'CreateTime',
        'deleteStatus' => 'DeleteStatus',
        'idExtent'     => 'IdExtent',
        'creator'      => 'Creator',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'modifier'     => 'Modifier',
        'resultStatus' => 'ResultStatus',
        'flowInstId'   => 'FlowInstId',
        'name'         => 'Name',
        'id'           => 'Id',
        'modifyTime'   => 'ModifyTime',
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
        if (null !== $this->deleteStatus) {
            $res['DeleteStatus'] = $this->deleteStatus;
        }
        if (null !== $this->idExtent) {
            $res['IdExtent'] = $this->idExtent;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->resultStatus) {
            $res['ResultStatus'] = $this->resultStatus;
        }
        if (null !== $this->flowInstId) {
            $res['FlowInstId'] = $this->flowInstId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
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
        if (isset($map['DeleteStatus'])) {
            $model->deleteStatus = $map['DeleteStatus'];
        }
        if (isset($map['IdExtent'])) {
            $model->idExtent = $map['IdExtent'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['ResultStatus'])) {
            $model->resultStatus = $map['ResultStatus'];
        }
        if (isset($map['FlowInstId'])) {
            $model->flowInstId = $map['FlowInstId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
