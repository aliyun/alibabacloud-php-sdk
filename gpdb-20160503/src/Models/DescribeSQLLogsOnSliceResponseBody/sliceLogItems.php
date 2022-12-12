<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSQLLogsOnSliceResponseBody;

use AlibabaCloud\Tea\Model;

class sliceLogItems extends Model
{
    /**
     * @example 100
     *
     * @var float
     */
    public $executeCost;

    /**
     * @example success
     *
     * @var string
     */
    public $executeStatus;

    /**
     * @example 2021-08-12T04:37:02Z
     *
     * @var string
     */
    public $operationExecuteEndTime;

    /**
     * @example 2021-08-12T04:37:02Z
     *
     * @var string
     */
    public $operationExecuteTime;

    /**
     * @example 128B
     *
     * @var float
     */
    public $peakMemory;

    /**
     * @example 1
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description Segment ID。
     *
     * @example gp-xxxxxxxxxx
     *
     * @var string
     */
    public $segmentId;

    /**
     * @example gp-xxxxxxxxxx
     *
     * @var string
     */
    public $segmentName;
    protected $_name = [
        'executeCost'             => 'ExecuteCost',
        'executeStatus'           => 'ExecuteStatus',
        'operationExecuteEndTime' => 'OperationExecuteEndTime',
        'operationExecuteTime'    => 'OperationExecuteTime',
        'peakMemory'              => 'PeakMemory',
        'returnRowCounts'         => 'ReturnRowCounts',
        'segmentId'               => 'SegmentId',
        'segmentName'             => 'SegmentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeCost) {
            $res['ExecuteCost'] = $this->executeCost;
        }
        if (null !== $this->executeStatus) {
            $res['ExecuteStatus'] = $this->executeStatus;
        }
        if (null !== $this->operationExecuteEndTime) {
            $res['OperationExecuteEndTime'] = $this->operationExecuteEndTime;
        }
        if (null !== $this->operationExecuteTime) {
            $res['OperationExecuteTime'] = $this->operationExecuteTime;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->segmentId) {
            $res['SegmentId'] = $this->segmentId;
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
        if (isset($map['ExecuteCost'])) {
            $model->executeCost = $map['ExecuteCost'];
        }
        if (isset($map['ExecuteStatus'])) {
            $model->executeStatus = $map['ExecuteStatus'];
        }
        if (isset($map['OperationExecuteEndTime'])) {
            $model->operationExecuteEndTime = $map['OperationExecuteEndTime'];
        }
        if (isset($map['OperationExecuteTime'])) {
            $model->operationExecuteTime = $map['OperationExecuteTime'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['SegmentId'])) {
            $model->segmentId = $map['SegmentId'];
        }
        if (isset($map['SegmentName'])) {
            $model->segmentName = $map['SegmentName'];
        }

        return $model;
    }
}
