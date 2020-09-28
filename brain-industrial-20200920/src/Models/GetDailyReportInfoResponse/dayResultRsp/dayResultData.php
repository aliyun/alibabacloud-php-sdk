<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportInfoResponse\dayResultRsp;

use AlibabaCloud\Tea\Model;

class dayResultData extends Model
{
    /**
     * @var string
     */
    public $loopName;

    /**
     * @var string
     */
    public $reportDate;

    /**
     * @var string
     */
    public $multipleScore;

    /**
     * @var string
     */
    public $performMetrics;

    /**
     * @var string
     */
    public $multipleScoreIndex;

    /**
     * @var string
     */
    public $operationRate;

    /**
     * @var string
     */
    public $validOperationRate;

    /**
     * @var string
     */
    public $oscillationIndex;

    /**
     * @var string
     */
    public $valveStickIndex;

    /**
     * @var string
     */
    public $pvMean;

    /**
     * @var string
     */
    public $pvStd;

    /**
     * @var string
     */
    public $pvMax;

    /**
     * @var string
     */
    public $pvMin;

    /**
     * @var string
     */
    public $errMean;

    /**
     * @var string
     */
    public $errStd;

    /**
     * @var string
     */
    public $errMax;

    /**
     * @var string
     */
    public $errMin;

    /**
     * @var string
     */
    public $opMean;

    /**
     * @var string
     */
    public $opStd;

    /**
     * @var string
     */
    public $opMax;

    /**
     * @var string
     */
    public $opMin;

    /**
     * @var string
     */
    public $loopTrans;

    /**
     * @var string
     */
    public $spCross;

    /**
     * @var string
     */
    public $opTurn;

    /**
     * @var string
     */
    public $opSum;

    /**
     * @var string
     */
    public $goodRate;

    /**
     * @var string
     */
    public $satuRate;
    protected $_name = [
        'loopName'           => 'LoopName',
        'reportDate'         => 'ReportDate',
        'multipleScore'      => 'MultipleScore',
        'performMetrics'     => 'PerformMetrics',
        'multipleScoreIndex' => 'MultipleScoreIndex',
        'operationRate'      => 'OperationRate',
        'validOperationRate' => 'ValidOperationRate',
        'oscillationIndex'   => 'OscillationIndex',
        'valveStickIndex'    => 'ValveStickIndex',
        'pvMean'             => 'PvMean',
        'pvStd'              => 'PvStd',
        'pvMax'              => 'PvMax',
        'pvMin'              => 'PvMin',
        'errMean'            => 'ErrMean',
        'errStd'             => 'ErrStd',
        'errMax'             => 'ErrMax',
        'errMin'             => 'ErrMin',
        'opMean'             => 'OpMean',
        'opStd'              => 'OpStd',
        'opMax'              => 'OpMax',
        'opMin'              => 'OpMin',
        'loopTrans'          => 'LoopTrans',
        'spCross'            => 'SpCross',
        'opTurn'             => 'OpTurn',
        'opSum'              => 'OpSum',
        'goodRate'           => 'GoodRate',
        'satuRate'           => 'SatuRate',
    ];

    public function validate()
    {
        Model::validateRequired('loopName', $this->loopName, true);
        Model::validateRequired('reportDate', $this->reportDate, true);
        Model::validateRequired('multipleScore', $this->multipleScore, true);
        Model::validateRequired('performMetrics', $this->performMetrics, true);
        Model::validateRequired('multipleScoreIndex', $this->multipleScoreIndex, true);
        Model::validateRequired('operationRate', $this->operationRate, true);
        Model::validateRequired('validOperationRate', $this->validOperationRate, true);
        Model::validateRequired('oscillationIndex', $this->oscillationIndex, true);
        Model::validateRequired('valveStickIndex', $this->valveStickIndex, true);
        Model::validateRequired('pvMean', $this->pvMean, true);
        Model::validateRequired('pvStd', $this->pvStd, true);
        Model::validateRequired('pvMax', $this->pvMax, true);
        Model::validateRequired('pvMin', $this->pvMin, true);
        Model::validateRequired('errMean', $this->errMean, true);
        Model::validateRequired('errStd', $this->errStd, true);
        Model::validateRequired('errMax', $this->errMax, true);
        Model::validateRequired('errMin', $this->errMin, true);
        Model::validateRequired('opMean', $this->opMean, true);
        Model::validateRequired('opStd', $this->opStd, true);
        Model::validateRequired('opMax', $this->opMax, true);
        Model::validateRequired('opMin', $this->opMin, true);
        Model::validateRequired('loopTrans', $this->loopTrans, true);
        Model::validateRequired('spCross', $this->spCross, true);
        Model::validateRequired('opTurn', $this->opTurn, true);
        Model::validateRequired('opSum', $this->opSum, true);
        Model::validateRequired('goodRate', $this->goodRate, true);
        Model::validateRequired('satuRate', $this->satuRate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loopName) {
            $res['LoopName'] = $this->loopName;
        }
        if (null !== $this->reportDate) {
            $res['ReportDate'] = $this->reportDate;
        }
        if (null !== $this->multipleScore) {
            $res['MultipleScore'] = $this->multipleScore;
        }
        if (null !== $this->performMetrics) {
            $res['PerformMetrics'] = $this->performMetrics;
        }
        if (null !== $this->multipleScoreIndex) {
            $res['MultipleScoreIndex'] = $this->multipleScoreIndex;
        }
        if (null !== $this->operationRate) {
            $res['OperationRate'] = $this->operationRate;
        }
        if (null !== $this->validOperationRate) {
            $res['ValidOperationRate'] = $this->validOperationRate;
        }
        if (null !== $this->oscillationIndex) {
            $res['OscillationIndex'] = $this->oscillationIndex;
        }
        if (null !== $this->valveStickIndex) {
            $res['ValveStickIndex'] = $this->valveStickIndex;
        }
        if (null !== $this->pvMean) {
            $res['PvMean'] = $this->pvMean;
        }
        if (null !== $this->pvStd) {
            $res['PvStd'] = $this->pvStd;
        }
        if (null !== $this->pvMax) {
            $res['PvMax'] = $this->pvMax;
        }
        if (null !== $this->pvMin) {
            $res['PvMin'] = $this->pvMin;
        }
        if (null !== $this->errMean) {
            $res['ErrMean'] = $this->errMean;
        }
        if (null !== $this->errStd) {
            $res['ErrStd'] = $this->errStd;
        }
        if (null !== $this->errMax) {
            $res['ErrMax'] = $this->errMax;
        }
        if (null !== $this->errMin) {
            $res['ErrMin'] = $this->errMin;
        }
        if (null !== $this->opMean) {
            $res['OpMean'] = $this->opMean;
        }
        if (null !== $this->opStd) {
            $res['OpStd'] = $this->opStd;
        }
        if (null !== $this->opMax) {
            $res['OpMax'] = $this->opMax;
        }
        if (null !== $this->opMin) {
            $res['OpMin'] = $this->opMin;
        }
        if (null !== $this->loopTrans) {
            $res['LoopTrans'] = $this->loopTrans;
        }
        if (null !== $this->spCross) {
            $res['SpCross'] = $this->spCross;
        }
        if (null !== $this->opTurn) {
            $res['OpTurn'] = $this->opTurn;
        }
        if (null !== $this->opSum) {
            $res['OpSum'] = $this->opSum;
        }
        if (null !== $this->goodRate) {
            $res['GoodRate'] = $this->goodRate;
        }
        if (null !== $this->satuRate) {
            $res['SatuRate'] = $this->satuRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayResultData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoopName'])) {
            $model->loopName = $map['LoopName'];
        }
        if (isset($map['ReportDate'])) {
            $model->reportDate = $map['ReportDate'];
        }
        if (isset($map['MultipleScore'])) {
            $model->multipleScore = $map['MultipleScore'];
        }
        if (isset($map['PerformMetrics'])) {
            $model->performMetrics = $map['PerformMetrics'];
        }
        if (isset($map['MultipleScoreIndex'])) {
            $model->multipleScoreIndex = $map['MultipleScoreIndex'];
        }
        if (isset($map['OperationRate'])) {
            $model->operationRate = $map['OperationRate'];
        }
        if (isset($map['ValidOperationRate'])) {
            $model->validOperationRate = $map['ValidOperationRate'];
        }
        if (isset($map['OscillationIndex'])) {
            $model->oscillationIndex = $map['OscillationIndex'];
        }
        if (isset($map['ValveStickIndex'])) {
            $model->valveStickIndex = $map['ValveStickIndex'];
        }
        if (isset($map['PvMean'])) {
            $model->pvMean = $map['PvMean'];
        }
        if (isset($map['PvStd'])) {
            $model->pvStd = $map['PvStd'];
        }
        if (isset($map['PvMax'])) {
            $model->pvMax = $map['PvMax'];
        }
        if (isset($map['PvMin'])) {
            $model->pvMin = $map['PvMin'];
        }
        if (isset($map['ErrMean'])) {
            $model->errMean = $map['ErrMean'];
        }
        if (isset($map['ErrStd'])) {
            $model->errStd = $map['ErrStd'];
        }
        if (isset($map['ErrMax'])) {
            $model->errMax = $map['ErrMax'];
        }
        if (isset($map['ErrMin'])) {
            $model->errMin = $map['ErrMin'];
        }
        if (isset($map['OpMean'])) {
            $model->opMean = $map['OpMean'];
        }
        if (isset($map['OpStd'])) {
            $model->opStd = $map['OpStd'];
        }
        if (isset($map['OpMax'])) {
            $model->opMax = $map['OpMax'];
        }
        if (isset($map['OpMin'])) {
            $model->opMin = $map['OpMin'];
        }
        if (isset($map['LoopTrans'])) {
            $model->loopTrans = $map['LoopTrans'];
        }
        if (isset($map['SpCross'])) {
            $model->spCross = $map['SpCross'];
        }
        if (isset($map['OpTurn'])) {
            $model->opTurn = $map['OpTurn'];
        }
        if (isset($map['OpSum'])) {
            $model->opSum = $map['OpSum'];
        }
        if (isset($map['GoodRate'])) {
            $model->goodRate = $map['GoodRate'];
        }
        if (isset($map['SatuRate'])) {
            $model->satuRate = $map['SatuRate'];
        }

        return $model;
    }
}
