<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDagsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dags extends Model
{
    /**
     * @example 1605052800000
     *
     * @var int
     */
    public $bizdate;

    /**
     * @example 1605052800000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1736629400048545
     *
     * @var string
     */
    public $createUser;

    /**
     * @description DagId。
     *
     * @example 351249682
     *
     * @var int
     */
    public $dagId;

    /**
     * @example 1605052800000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description Gmtdate。
     *
     * @example 1605052800000
     *
     * @var int
     */
    public $gmtdate;

    /**
     * @example 1605052800000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example test_dag
     *
     * @var string
     */
    public $name;

    /**
     * @example 123
     *
     * @var int
     */
    public $opSeq;

    /**
     * @example 112345
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 1605052800000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example FAILURE
     *
     * @var string
     */
    public $status;

    /**
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
     * @return dags
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
