<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDiagnosisSQLInfoResponseBody;

use AlibabaCloud\Dara\Model;

class stageInfos extends Model
{
    /**
     * @var int
     */
    public $inputDataSize;
    /**
     * @var int
     */
    public $inputRows;
    /**
     * @var int
     */
    public $operatorCost;
    /**
     * @var int
     */
    public $outputDataSize;
    /**
     * @var int
     */
    public $outputRows;
    /**
     * @var int
     */
    public $peakMemory;
    /**
     * @var float
     */
    public $progress;
    /**
     * @var string
     */
    public $stageId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
