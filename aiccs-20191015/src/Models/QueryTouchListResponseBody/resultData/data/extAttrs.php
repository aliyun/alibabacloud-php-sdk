<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData\data;

use AlibabaCloud\Tea\Model;

class extAttrs extends Model
{
    /**
     * @var int
     */
    public $evaluationScore;

    /**
     * @var int
     */
    public $evaluationLevel;

    /**
     * @var int
     */
    public $evaluationSolution;

    /**
     * @var int
     */
    public $onlineSessionSource;

    /**
     * @var int
     */
    public $onlineJoinRespInterval;

    /**
     * @var int
     */
    public $evaluationStatus;

    /**
     * @description 外呼为主叫号码
     *
     * @var string
     */
    public $outCallRouteNumber;

    /**
     * @description 外呼为被叫号码,入呼为被叫号码
     *
     * @var string
     */
    public $dnis;

    /**
     * @description 入呼为主叫号码
     *
     * @var string
     */
    public $ani;
    protected $_name = [
        'evaluationScore'        => 'EvaluationScore',
        'evaluationLevel'        => 'EvaluationLevel',
        'evaluationSolution'     => 'EvaluationSolution',
        'onlineSessionSource'    => 'OnlineSessionSource',
        'onlineJoinRespInterval' => 'OnlineJoinRespInterval',
        'evaluationStatus'       => 'EvaluationStatus',
        'outCallRouteNumber'     => 'OutCallRouteNumber',
        'dnis'                   => 'Dnis',
        'ani'                    => 'Ani',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluationScore) {
            $res['EvaluationScore'] = $this->evaluationScore;
        }
        if (null !== $this->evaluationLevel) {
            $res['EvaluationLevel'] = $this->evaluationLevel;
        }
        if (null !== $this->evaluationSolution) {
            $res['EvaluationSolution'] = $this->evaluationSolution;
        }
        if (null !== $this->onlineSessionSource) {
            $res['OnlineSessionSource'] = $this->onlineSessionSource;
        }
        if (null !== $this->onlineJoinRespInterval) {
            $res['OnlineJoinRespInterval'] = $this->onlineJoinRespInterval;
        }
        if (null !== $this->evaluationStatus) {
            $res['EvaluationStatus'] = $this->evaluationStatus;
        }
        if (null !== $this->outCallRouteNumber) {
            $res['OutCallRouteNumber'] = $this->outCallRouteNumber;
        }
        if (null !== $this->dnis) {
            $res['Dnis'] = $this->dnis;
        }
        if (null !== $this->ani) {
            $res['Ani'] = $this->ani;
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
        if (isset($map['EvaluationScore'])) {
            $model->evaluationScore = $map['EvaluationScore'];
        }
        if (isset($map['EvaluationLevel'])) {
            $model->evaluationLevel = $map['EvaluationLevel'];
        }
        if (isset($map['EvaluationSolution'])) {
            $model->evaluationSolution = $map['EvaluationSolution'];
        }
        if (isset($map['OnlineSessionSource'])) {
            $model->onlineSessionSource = $map['OnlineSessionSource'];
        }
        if (isset($map['OnlineJoinRespInterval'])) {
            $model->onlineJoinRespInterval = $map['OnlineJoinRespInterval'];
        }
        if (isset($map['EvaluationStatus'])) {
            $model->evaluationStatus = $map['EvaluationStatus'];
        }
        if (isset($map['OutCallRouteNumber'])) {
            $model->outCallRouteNumber = $map['OutCallRouteNumber'];
        }
        if (isset($map['Dnis'])) {
            $model->dnis = $map['Dnis'];
        }
        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }

        return $model;
    }
}
