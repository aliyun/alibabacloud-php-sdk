<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponseBody\data\dataList;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponseBody\data\dataList\flowInstance\groups;
use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstHistoryResponseBody\data\dataList\flowInstance\result;
use AlibabaCloud\Tea\Model;

class flowInstance extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $stages;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $runningStatus;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $stageTopo;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var bool
     */
    public $autoDrivenStatus;

    /**
     * @var string
     */
    public $resultStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $systemCode;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $systemId;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var result
     */
    public $result;
    protected $_name = [
        'status'           => 'Status',
        'stages'           => 'Stages',
        'createTime'       => 'CreateTime',
        'statusName'       => 'StatusName',
        'runningStatus'    => 'RunningStatus',
        'creator'          => 'Creator',
        'stageTopo'        => 'StageTopo',
        'modifier'         => 'Modifier',
        'autoDrivenStatus' => 'AutoDrivenStatus',
        'resultStatus'     => 'ResultStatus',
        'id'               => 'Id',
        'systemCode'       => 'SystemCode',
        'modifyTime'       => 'ModifyTime',
        'systemId'         => 'SystemId',
        'groups'           => 'Groups',
        'result'           => 'Result',
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
        if (null !== $this->stages) {
            $res['Stages'] = $this->stages;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->runningStatus) {
            $res['RunningStatus'] = $this->runningStatus;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->stageTopo) {
            $res['StageTopo'] = $this->stageTopo;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->autoDrivenStatus) {
            $res['AutoDrivenStatus'] = $this->autoDrivenStatus;
        }
        if (null !== $this->resultStatus) {
            $res['ResultStatus'] = $this->resultStatus;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->systemCode) {
            $res['SystemCode'] = $this->systemCode;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->systemId) {
            $res['SystemId'] = $this->systemId;
        }
        if (null !== $this->groups) {
            $res['Groups'] = [];
            if (null !== $this->groups && \is_array($this->groups)) {
                $n = 0;
                foreach ($this->groups as $item) {
                    $res['Groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Stages'])) {
            $model->stages = $map['Stages'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['RunningStatus'])) {
            $model->runningStatus = $map['RunningStatus'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['StageTopo'])) {
            $model->stageTopo = $map['StageTopo'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['AutoDrivenStatus'])) {
            $model->autoDrivenStatus = $map['AutoDrivenStatus'];
        }
        if (isset($map['ResultStatus'])) {
            $model->resultStatus = $map['ResultStatus'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SystemCode'])) {
            $model->systemCode = $map['SystemCode'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['SystemId'])) {
            $model->systemId = $map['SystemId'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n             = 0;
                foreach ($map['Groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
