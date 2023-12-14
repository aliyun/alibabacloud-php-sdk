<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\SearchManualDagNodeInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class nodeInsInfo extends Model
{
    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $beginRunningTime;

    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $beginWaitResTime;

    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $beginWaitTimeTime;

    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $bizdate;

    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 12434232423
     *
     * @var int
     */
    public $dagId;

    /**
     * @example 5
     *
     * @var int
     */
    public $dagType;

    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example 12322434112
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example 2018-12-12 00:00:00
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example test_node
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example param_k1=param_v1
     *
     * @var string
     */
    public $paraValue;

    /**
     * @example 6
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'beginRunningTime'  => 'BeginRunningTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'bizdate'           => 'Bizdate',
        'createTime'        => 'CreateTime',
        'dagId'             => 'DagId',
        'dagType'           => 'DagType',
        'finishTime'        => 'FinishTime',
        'instanceId'        => 'InstanceId',
        'modifyTime'        => 'ModifyTime',
        'nodeName'          => 'NodeName',
        'paraValue'         => 'ParaValue',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->dagType) {
            $res['DagType'] = $this->dagType;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagType'])) {
            $model->dagType = $map['DagType'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
