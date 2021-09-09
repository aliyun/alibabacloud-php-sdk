<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsOnSliceResponseBody;

use AlibabaCloud\Tea\Model;

class sliceLogItems extends Model
{
    /**
     * @var string
     */
    public $executeStatus;

    /**
     * @var float
     */
    public $executeCost;

    /**
     * @var int
     */
    public $returnRowCounts;

    /**
     * @var string
     */
    public $operationExecuteTime;

    /**
     * @var string
     */
    public $segmentId;

    /**
     * @var float
     */
    public $peakMemory;

    /**
     * @var string
     */
    public $operationExecuteEndTime;

    /**
     * @var string
     */
    public $segmentName;
    protected $_name = [
        'executeStatus'           => 'ExecuteStatus',
        'executeCost'             => 'ExecuteCost',
        'returnRowCounts'         => 'ReturnRowCounts',
        'operationExecuteTime'    => 'OperationExecuteTime',
        'segmentId'               => 'SegmentId',
        'peakMemory'              => 'PeakMemory',
        'operationExecuteEndTime' => 'OperationExecuteEndTime',
        'segmentName'             => 'SegmentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeStatus) {
            $res['ExecuteStatus'] = $this->executeStatus;
        }
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->operationExecuteTime) {
            $res['OperationExecuteTime'] = $this->operationExecuteTime;
        }
        if (null !== $this->segmentId) {
            $res['SegmentId'] = $this->segmentId;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->operationExecuteEndTime) {
            $res['OperationExecuteEndTime'] = $this->operationExecuteEndTime;
        }
        if (null !== $this->segmentName) {
            $res['SegmentName'] = $this->segmentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sliceLogItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecuteStatus'])) {
            $model->executeStatus = $map['ExecuteStatus'];
        }
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['OperationExecuteTime'])) {
            $model->operationExecuteTime = $map['OperationExecuteTime'];
        }
        if (isset($map['SegmentId'])) {
            $model->segmentId = $map['SegmentId'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['OperationExecuteEndTime'])) {
            $model->operationExecuteEndTime = $map['OperationExecuteEndTime'];
        }
        if (isset($map['SegmentName'])) {
            $model->segmentName = $map['SegmentName'];
        }

        return $model;
    }
}
