<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDagResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The data timestamp.
     *
     * @example 1605052800000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description The time when the DAG was created.
     *
     * @example 1605052800000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The creator.
     *
     * @example 1736629400048545
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The DAG ID.
     *
     * @example 351249682
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The time when the DAG finished running.
     *
     * @example 1605052800000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The time when the DAG was scheduled to run.
     *
     * @example 1605052800000
     *
     * @var int
     */
    public $gmtdate;

    /**
     * @description The time when the DAG was last modified.
     *
     * @example 1605052800000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the DAG.
     *
     * @example test_dag
     *
     * @var string
     */
    public $name;

    /**
     * @description The sequence number of the operation.
     *
     * @example 123
     *
     * @var int
     */
    public $opSeq;

    /**
     * @description The workspace ID.
     *
     * @example 112345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The time when the DAG started to run.
     *
     * @example 1605052800000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the DAG. Valid values: CREATED, RUNNING, FAILURE, and SUCCESS.
     *
     * @example FAILURE
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the DAG. Valid values: MANUAL, SMOKE_TEST, SUPPLY_DATA, and BUSINESS_PROCESS_DAG. The value MANUAL indicates the DAG for a manually triggered workflow. The value SMOKE_TEST indicates the DAG for a smoke testing workflow. The value SUPPLY_DATA indicates the DAG for a data backfill instance. The value BUSINESS_PROCESS_DAG indicates the DAG for a one-time workflow.
     *
     * @example MANUAL_FLOW
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizdate'    => 'Bizdate',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dagId'      => 'DagId',
        'finishTime' => 'FinishTime',
        'gmtdate'    => 'Gmtdate',
        'modifyTime' => 'ModifyTime',
        'name'       => 'Name',
        'opSeq'      => 'OpSeq',
        'projectId'  => 'ProjectId',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->gmtdate) {
            $res['Gmtdate'] = $this->gmtdate;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->opSeq) {
            $res['OpSeq'] = $this->opSeq;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Gmtdate'])) {
            $model->gmtdate = $map['Gmtdate'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpSeq'])) {
            $model->opSeq = $map['OpSeq'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
