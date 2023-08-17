<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisSQLInfoResponseBody;

use AlibabaCloud\Tea\Model;

class stageInfos extends Model
{
    /**
     * @description The total amount of input data in the stage. Unit: bytes.
     *
     * @example 2341
     *
     * @var int
     */
    public $inputDataSize;

    /**
     * @description The total number of input rows in the stage.
     *
     * @example 123
     *
     * @var int
     */
    public $inputRows;

    /**
     * @description The total amount of time consumed by all operators in the stage. Unit: milliseconds.
     *
     * @example 2341
     *
     * @var int
     */
    public $operatorCost;

    /**
     * @description The total amount of output data in the stage. Unit: bytes.
     *
     * @example 12344
     *
     * @var int
     */
    public $outputDataSize;

    /**
     * @description The total number of output rows in the stage.
     *
     * @example 231
     *
     * @var int
     */
    public $outputRows;

    /**
     * @description The total peak memory of the stage. Unit: bytes.
     *
     * @example 3421
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @description The execution progress of the stage.
     *
     * @example 0.3
     *
     * @var float
     */
    public $progress;

    /**
     * @description The ID of the stage.
     *
     * @example Stage[26]
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The state of the stage.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'inputDataSize'  => 'InputDataSize',
        'inputRows'      => 'InputRows',
        'operatorCost'   => 'OperatorCost',
        'outputDataSize' => 'OutputDataSize',
        'outputRows'     => 'OutputRows',
        'peakMemory'     => 'PeakMemory',
        'progress'       => 'Progress',
        'stageId'        => 'StageId',
        'state'          => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputDataSize) {
            $res['InputDataSize'] = $this->inputDataSize;
        }
        if (null !== $this->inputRows) {
            $res['InputRows'] = $this->inputRows;
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->outputDataSize) {
            $res['OutputDataSize'] = $this->outputDataSize;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputDataSize'])) {
            $model->inputDataSize = $map['InputDataSize'];
        }
        if (isset($map['InputRows'])) {
            $model->inputRows = $map['InputRows'];
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['OutputDataSize'])) {
            $model->outputDataSize = $map['OutputDataSize'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
