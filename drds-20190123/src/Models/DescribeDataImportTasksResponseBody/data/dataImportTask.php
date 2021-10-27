<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTasksResponseBody\data;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportTasksResponseBody\data\dataImportTask\jingweiProgress;
use AlibabaCloud\Tea\Model;

class dataImportTask extends Model
{
    /**
     * @var int
     */
    public $batchEvaluateTaskId;

    /**
     * @var int
     */
    public $createDbProgress;

    /**
     * @var int
     */
    public $createTablesProgress;

    /**
     * @var string
     */
    public $dstDbName;

    /**
     * @var string
     */
    public $dstInstId;

    /**
     * @var int
     */
    public $evaluateTaskId;

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
     * @var jingweiProgress
     */
    public $jingweiProgress;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $srcDbName;

    /**
     * @var string
     */
    public $srcInstId;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'batchEvaluateTaskId'  => 'BatchEvaluateTaskId',
        'createDbProgress'     => 'CreateDbProgress',
        'createTablesProgress' => 'CreateTablesProgress',
        'dstDbName'            => 'DstDbName',
        'dstInstId'            => 'DstInstId',
        'evaluateTaskId'       => 'EvaluateTaskId',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'id'                   => 'Id',
        'jingweiProgress'      => 'JingweiProgress',
        'progress'             => 'Progress',
        'srcDbName'            => 'SrcDbName',
        'srcInstId'            => 'SrcInstId',
        'stage'                => 'Stage',
        'status'               => 'Status',
        'taskName'             => 'TaskName',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchEvaluateTaskId) {
            $res['BatchEvaluateTaskId'] = $this->batchEvaluateTaskId;
        }
        if (null !== $this->createDbProgress) {
            $res['CreateDbProgress'] = $this->createDbProgress;
        }
        if (null !== $this->createTablesProgress) {
            $res['CreateTablesProgress'] = $this->createTablesProgress;
        }
        if (null !== $this->dstDbName) {
            $res['DstDbName'] = $this->dstDbName;
        }
        if (null !== $this->dstInstId) {
            $res['DstInstId'] = $this->dstInstId;
        }
        if (null !== $this->evaluateTaskId) {
            $res['EvaluateTaskId'] = $this->evaluateTaskId;
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
        if (null !== $this->jingweiProgress) {
            $res['JingweiProgress'] = null !== $this->jingweiProgress ? $this->jingweiProgress->toMap() : null;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->srcDbName) {
            $res['SrcDbName'] = $this->srcDbName;
        }
        if (null !== $this->srcInstId) {
            $res['SrcInstId'] = $this->srcInstId;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataImportTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchEvaluateTaskId'])) {
            $model->batchEvaluateTaskId = $map['BatchEvaluateTaskId'];
        }
        if (isset($map['CreateDbProgress'])) {
            $model->createDbProgress = $map['CreateDbProgress'];
        }
        if (isset($map['CreateTablesProgress'])) {
            $model->createTablesProgress = $map['CreateTablesProgress'];
        }
        if (isset($map['DstDbName'])) {
            $model->dstDbName = $map['DstDbName'];
        }
        if (isset($map['DstInstId'])) {
            $model->dstInstId = $map['DstInstId'];
        }
        if (isset($map['EvaluateTaskId'])) {
            $model->evaluateTaskId = $map['EvaluateTaskId'];
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
        if (isset($map['JingweiProgress'])) {
            $model->jingweiProgress = jingweiProgress::fromMap($map['JingweiProgress']);
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SrcDbName'])) {
            $model->srcDbName = $map['SrcDbName'];
        }
        if (isset($map['SrcInstId'])) {
            $model->srcInstId = $map['SrcInstId'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
