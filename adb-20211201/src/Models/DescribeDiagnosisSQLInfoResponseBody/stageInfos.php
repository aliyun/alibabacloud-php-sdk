<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisSQLInfoResponseBody;

use AlibabaCloud\Tea\Model;

class stageInfos extends Model
{
    /**
     * @example 2341
     *
     * @var int
     */
    public $inputDataSize;

    /**
     * @example 2341
     *
     * @var int
     */
    public $inputRows;

    /**
     * @example 2341
     *
     * @var int
     */
    public $operatorCost;

    /**
     * @example 2341
     *
     * @var int
     */
    public $outputDataSize;

    /**
     * @example 2341
     *
     * @var int
     */
    public $outputRows;

    /**
     * @example 2341
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @example 0.3
     *
     * @var float
     */
    public $progress;

    /**
     * @description StageID。
     *
     * @example Stage[26]
     *
     * @var string
     */
    public $stageId;

    /**
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
