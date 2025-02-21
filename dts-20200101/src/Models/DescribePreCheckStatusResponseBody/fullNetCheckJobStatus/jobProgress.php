<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\fullNetCheckJobStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\fullNetCheckJobStatus\jobProgress\logs;

class jobProgress extends Model
{
    /**
     * @var string
     */
    public $bootTime;
    /**
     * @var bool
     */
    public $canSkip;
    /**
     * @var string
     */
    public $current;
    /**
     * @var string
     */
    public $ddlSql;
    /**
     * @var int
     */
    public $delaySeconds;
    /**
     * @var string
     */
    public $destSchema;
    /**
     * @var int
     */
    public $diffRow;
    /**
     * @var string
     */
    public $errDetail;
    /**
     * @var string
     */
    public $errMsg;
    /**
     * @var string
     */
    public $finishTime;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $ignoreFlag;
    /**
     * @var string
     */
    public $item;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var logs[]
     */
    public $logs;
    /**
     * @var string
     */
    public $names;
    /**
     * @var int
     */
    public $orderNum;
    /**
     * @var string
     */
    public $parentObj;
    /**
     * @var string
     */
    public $repairMethod;
    /**
     * @var bool
     */
    public $skip;
    /**
     * @var string
     */
    public $sourceSchema;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $sub;
    /**
     * @var string
     */
    public $targetNames;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'bootTime'     => 'BootTime',
        'canSkip'      => 'CanSkip',
        'current'      => 'Current',
        'ddlSql'       => 'DdlSql',
        'delaySeconds' => 'DelaySeconds',
        'destSchema'   => 'DestSchema',
        'diffRow'      => 'DiffRow',
        'errDetail'    => 'ErrDetail',
        'errMsg'       => 'ErrMsg',
        'finishTime'   => 'FinishTime',
        'id'           => 'Id',
        'ignoreFlag'   => 'IgnoreFlag',
        'item'         => 'Item',
        'jobId'        => 'JobId',
        'logs'         => 'Logs',
        'names'        => 'Names',
        'orderNum'     => 'OrderNum',
        'parentObj'    => 'ParentObj',
        'repairMethod' => 'RepairMethod',
        'skip'         => 'Skip',
        'sourceSchema' => 'SourceSchema',
        'state'        => 'State',
        'sub'          => 'Sub',
        'targetNames'  => 'TargetNames',
        'total'        => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }

        if (null !== $this->canSkip) {
            $res['CanSkip'] = $this->canSkip;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->ddlSql) {
            $res['DdlSql'] = $this->ddlSql;
        }

        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }

        if (null !== $this->destSchema) {
            $res['DestSchema'] = $this->destSchema;
        }

        if (null !== $this->diffRow) {
            $res['DiffRow'] = $this->diffRow;
        }

        if (null !== $this->errDetail) {
            $res['ErrDetail'] = $this->errDetail;
        }

        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ignoreFlag) {
            $res['IgnoreFlag'] = $this->ignoreFlag;
        }

        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1          = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }

        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }

        if (null !== $this->parentObj) {
            $res['ParentObj'] = $this->parentObj;
        }

        if (null !== $this->repairMethod) {
            $res['RepairMethod'] = $this->repairMethod;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->sourceSchema) {
            $res['SourceSchema'] = $this->sourceSchema;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->sub) {
            $res['Sub'] = $this->sub;
        }

        if (null !== $this->targetNames) {
            $res['TargetNames'] = $this->targetNames;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }

        if (isset($map['CanSkip'])) {
            $model->canSkip = $map['CanSkip'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['DdlSql'])) {
            $model->ddlSql = $map['DdlSql'];
        }

        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }

        if (isset($map['DestSchema'])) {
            $model->destSchema = $map['DestSchema'];
        }

        if (isset($map['DiffRow'])) {
            $model->diffRow = $map['DiffRow'];
        }

        if (isset($map['ErrDetail'])) {
            $model->errDetail = $map['ErrDetail'];
        }

        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IgnoreFlag'])) {
            $model->ignoreFlag = $map['IgnoreFlag'];
        }

        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n1          = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1++] = logs::fromMap($item1);
                }
            }
        }

        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }

        if (isset($map['ParentObj'])) {
            $model->parentObj = $map['ParentObj'];
        }

        if (isset($map['RepairMethod'])) {
            $model->repairMethod = $map['RepairMethod'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['SourceSchema'])) {
            $model->sourceSchema = $map['SourceSchema'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Sub'])) {
            $model->sub = $map['Sub'];
        }

        if (isset($map['TargetNames'])) {
            $model->targetNames = $map['TargetNames'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
