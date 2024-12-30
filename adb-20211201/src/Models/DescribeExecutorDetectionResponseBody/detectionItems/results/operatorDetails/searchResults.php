<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeExecutorDetectionResponseBody\detectionItems\results\operatorDetails;

use AlibabaCloud\Tea\Model;

class searchResults extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $inputRows;

    /**
     * @example 345
     *
     * @var int
     */
    public $inputSize;

    /**
     * @example 123
     *
     * @var float
     */
    public $operatorCost;

    /**
     * @var string
     */
    public $operatorInfo;

    /**
     * @example Join
     *
     * @var string
     */
    public $operatorName;

    /**
     * @example 2345
     *
     * @var int
     */
    public $outputRows;

    /**
     * @example 234
     *
     * @var int
     */
    public $outputSize;

    /**
     * @example 234
     *
     * @var int
     */
    public $peakMemory;

    /**
     * @example 2024080110010002102500023803151627972
     *
     * @var string
     */
    public $processId;

    /**
     * @description StageID。
     *
     * @example Stage[3]
     *
     * @var string
     */
    public $stageId;
    protected $_name = [
        'inputRows'    => 'InputRows',
        'inputSize'    => 'InputSize',
        'operatorCost' => 'OperatorCost',
        'operatorInfo' => 'OperatorInfo',
        'operatorName' => 'OperatorName',
        'outputRows'   => 'OutputRows',
        'outputSize'   => 'OutputSize',
        'peakMemory'   => 'PeakMemory',
        'processId'    => 'ProcessId',
        'stageId'      => 'StageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputRows) {
            $res['InputRows'] = $this->inputRows;
        }
        if (null !== $this->inputSize) {
            $res['InputSize'] = $this->inputSize;
        }
        if (null !== $this->operatorCost) {
            $res['OperatorCost'] = $this->operatorCost;
        }
        if (null !== $this->operatorInfo) {
            $res['OperatorInfo'] = $this->operatorInfo;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->outputRows) {
            $res['OutputRows'] = $this->outputRows;
        }
        if (null !== $this->outputSize) {
            $res['OutputSize'] = $this->outputSize;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputRows'])) {
            $model->inputRows = $map['InputRows'];
        }
        if (isset($map['InputSize'])) {
            $model->inputSize = $map['InputSize'];
        }
        if (isset($map['OperatorCost'])) {
            $model->operatorCost = $map['OperatorCost'];
        }
        if (isset($map['OperatorInfo'])) {
            $model->operatorInfo = $map['OperatorInfo'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['OutputRows'])) {
            $model->outputRows = $map['OutputRows'];
        }
        if (isset($map['OutputSize'])) {
            $model->outputSize = $map['OutputSize'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }

        return $model;
    }
}
