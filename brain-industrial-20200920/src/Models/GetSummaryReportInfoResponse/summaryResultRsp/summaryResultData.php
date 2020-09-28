<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData\multipleScoreIndexRsp;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData\multipleScoreRsp;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData\operationRate;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData\oscillationIndex;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData\performMetrics;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData\validOperationRate;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetSummaryReportInfoResponse\summaryResultRsp\summaryResultData\valveStickIndex;
use AlibabaCloud\Tea\Model;

class summaryResultData extends Model
{
    /**
     * @var string
     */
    public $loopName;

    /**
     * @var multipleScoreIndexRsp
     */
    public $multipleScoreIndexRsp;

    /**
     * @var multipleScoreRsp
     */
    public $multipleScoreRsp;

    /**
     * @var operationRate
     */
    public $operationRate;

    /**
     * @var oscillationIndex
     */
    public $oscillationIndex;

    /**
     * @var performMetrics
     */
    public $performMetrics;

    /**
     * @var validOperationRate
     */
    public $validOperationRate;

    /**
     * @var valveStickIndex
     */
    public $valveStickIndex;
    protected $_name = [
        'loopName'              => 'LoopName',
        'multipleScoreIndexRsp' => 'MultipleScoreIndexRsp',
        'multipleScoreRsp'      => 'MultipleScoreRsp',
        'operationRate'         => 'OperationRate',
        'oscillationIndex'      => 'OscillationIndex',
        'performMetrics'        => 'PerformMetrics',
        'validOperationRate'    => 'ValidOperationRate',
        'valveStickIndex'       => 'ValveStickIndex',
    ];

    public function validate()
    {
        Model::validateRequired('loopName', $this->loopName, true);
        Model::validateRequired('multipleScoreIndexRsp', $this->multipleScoreIndexRsp, true);
        Model::validateRequired('multipleScoreRsp', $this->multipleScoreRsp, true);
        Model::validateRequired('operationRate', $this->operationRate, true);
        Model::validateRequired('oscillationIndex', $this->oscillationIndex, true);
        Model::validateRequired('performMetrics', $this->performMetrics, true);
        Model::validateRequired('validOperationRate', $this->validOperationRate, true);
        Model::validateRequired('valveStickIndex', $this->valveStickIndex, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loopName) {
            $res['LoopName'] = $this->loopName;
        }
        if (null !== $this->multipleScoreIndexRsp) {
            $res['MultipleScoreIndexRsp'] = null !== $this->multipleScoreIndexRsp ? $this->multipleScoreIndexRsp->toMap() : null;
        }
        if (null !== $this->multipleScoreRsp) {
            $res['MultipleScoreRsp'] = null !== $this->multipleScoreRsp ? $this->multipleScoreRsp->toMap() : null;
        }
        if (null !== $this->operationRate) {
            $res['OperationRate'] = null !== $this->operationRate ? $this->operationRate->toMap() : null;
        }
        if (null !== $this->oscillationIndex) {
            $res['OscillationIndex'] = null !== $this->oscillationIndex ? $this->oscillationIndex->toMap() : null;
        }
        if (null !== $this->performMetrics) {
            $res['PerformMetrics'] = null !== $this->performMetrics ? $this->performMetrics->toMap() : null;
        }
        if (null !== $this->validOperationRate) {
            $res['ValidOperationRate'] = null !== $this->validOperationRate ? $this->validOperationRate->toMap() : null;
        }
        if (null !== $this->valveStickIndex) {
            $res['ValveStickIndex'] = null !== $this->valveStickIndex ? $this->valveStickIndex->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryResultData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoopName'])) {
            $model->loopName = $map['LoopName'];
        }
        if (isset($map['MultipleScoreIndexRsp'])) {
            $model->multipleScoreIndexRsp = multipleScoreIndexRsp::fromMap($map['MultipleScoreIndexRsp']);
        }
        if (isset($map['MultipleScoreRsp'])) {
            $model->multipleScoreRsp = multipleScoreRsp::fromMap($map['MultipleScoreRsp']);
        }
        if (isset($map['OperationRate'])) {
            $model->operationRate = operationRate::fromMap($map['OperationRate']);
        }
        if (isset($map['OscillationIndex'])) {
            $model->oscillationIndex = oscillationIndex::fromMap($map['OscillationIndex']);
        }
        if (isset($map['PerformMetrics'])) {
            $model->performMetrics = performMetrics::fromMap($map['PerformMetrics']);
        }
        if (isset($map['ValidOperationRate'])) {
            $model->validOperationRate = validOperationRate::fromMap($map['ValidOperationRate']);
        }
        if (isset($map['ValveStickIndex'])) {
            $model->valveStickIndex = valveStickIndex::fromMap($map['ValveStickIndex']);
        }

        return $model;
    }
}
