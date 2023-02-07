<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData\data;

use AlibabaCloud\Tea\Model;

class extAttrs extends Model
{
    /**
     * @example 187****0000
     *
     * @var string
     */
    public $ani;

    /**
     * @example 05712688****
     *
     * @var string
     */
    public $dnis;

    /**
     * @example 2
     *
     * @var int
     */
    public $evaluationLevel;

    /**
     * @example 1
     *
     * @var int
     */
    public $evaluationScore;

    /**
     * @example 0
     *
     * @var int
     */
    public $evaluationSolution;

    /**
     * @example 1
     *
     * @var int
     */
    public $evaluationStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $onlineJoinRespInterval;

    /**
     * @example 0
     *
     * @var int
     */
    public $onlineSessionSource;

    /**
     * @example 05712688****
     *
     * @var string
     */
    public $outCallRouteNumber;
    protected $_name = [
        'ani'                    => 'Ani',
        'dnis'                   => 'Dnis',
        'evaluationLevel'        => 'EvaluationLevel',
        'evaluationScore'        => 'EvaluationScore',
        'evaluationSolution'     => 'EvaluationSolution',
        'evaluationStatus'       => 'EvaluationStatus',
        'onlineJoinRespInterval' => 'OnlineJoinRespInterval',
        'onlineSessionSource'    => 'OnlineSessionSource',
        'outCallRouteNumber'     => 'OutCallRouteNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ani) {
            $res['Ani'] = $this->ani;
        }
        if (null !== $this->dnis) {
            $res['Dnis'] = $this->dnis;
        }
        if (null !== $this->evaluationLevel) {
            $res['EvaluationLevel'] = $this->evaluationLevel;
        }
        if (null !== $this->evaluationScore) {
            $res['EvaluationScore'] = $this->evaluationScore;
        }
        if (null !== $this->evaluationSolution) {
            $res['EvaluationSolution'] = $this->evaluationSolution;
        }
        if (null !== $this->evaluationStatus) {
            $res['EvaluationStatus'] = $this->evaluationStatus;
        }
        if (null !== $this->onlineJoinRespInterval) {
            $res['OnlineJoinRespInterval'] = $this->onlineJoinRespInterval;
        }
        if (null !== $this->onlineSessionSource) {
            $res['OnlineSessionSource'] = $this->onlineSessionSource;
        }
        if (null !== $this->outCallRouteNumber) {
            $res['OutCallRouteNumber'] = $this->outCallRouteNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extAttrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }
        if (isset($map['Dnis'])) {
            $model->dnis = $map['Dnis'];
        }
        if (isset($map['EvaluationLevel'])) {
            $model->evaluationLevel = $map['EvaluationLevel'];
        }
        if (isset($map['EvaluationScore'])) {
            $model->evaluationScore = $map['EvaluationScore'];
        }
        if (isset($map['EvaluationSolution'])) {
            $model->evaluationSolution = $map['EvaluationSolution'];
        }
        if (isset($map['EvaluationStatus'])) {
            $model->evaluationStatus = $map['EvaluationStatus'];
        }
        if (isset($map['OnlineJoinRespInterval'])) {
            $model->onlineJoinRespInterval = $map['OnlineJoinRespInterval'];
        }
        if (isset($map['OnlineSessionSource'])) {
            $model->onlineSessionSource = $map['OnlineSessionSource'];
        }
        if (isset($map['OutCallRouteNumber'])) {
            $model->outCallRouteNumber = $map['OutCallRouteNumber'];
        }

        return $model;
    }
}
