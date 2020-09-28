<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidLoopEvaluationsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $afterPidParameters;

    /**
     * @var mixed[]
     */
    public $beforePidParameters;

    /**
     * @var string
     */
    public $pidLoopRemark;

    /**
     * @var int
     */
    public $assessTime;

    /**
     * @var float
     */
    public $robust;

    /**
     * @var float
     */
    public $validOperationRate;

    /**
     * @var float
     */
    public $operationRate;

    /**
     * @var float
     */
    public $performMetrics;

    /**
     * @var float
     */
    public $multipleScore;

    /**
     * @var string
     */
    public $grade;

    /**
     * @var string
     */
    public $pidLoopName;

    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var string
     */
    public $pidLoopParameterId;
    protected $_name = [
        'afterPidParameters'  => 'AfterPidParameters',
        'beforePidParameters' => 'BeforePidParameters',
        'pidLoopRemark'       => 'PidLoopRemark',
        'assessTime'          => 'AssessTime',
        'robust'              => 'Robust',
        'validOperationRate'  => 'ValidOperationRate',
        'operationRate'       => 'OperationRate',
        'performMetrics'      => 'PerformMetrics',
        'multipleScore'       => 'MultipleScore',
        'grade'               => 'Grade',
        'pidLoopName'         => 'PidLoopName',
        'pidProjectId'        => 'PidProjectId',
        'pidLoopId'           => 'PidLoopId',
        'pidLoopParameterId'  => 'PidLoopParameterId',
    ];

    public function validate()
    {
        Model::validateRequired('afterPidParameters', $this->afterPidParameters, true);
        Model::validateRequired('beforePidParameters', $this->beforePidParameters, true);
        Model::validateRequired('pidLoopRemark', $this->pidLoopRemark, true);
        Model::validateRequired('assessTime', $this->assessTime, true);
        Model::validateRequired('robust', $this->robust, true);
        Model::validateRequired('validOperationRate', $this->validOperationRate, true);
        Model::validateRequired('operationRate', $this->operationRate, true);
        Model::validateRequired('performMetrics', $this->performMetrics, true);
        Model::validateRequired('multipleScore', $this->multipleScore, true);
        Model::validateRequired('grade', $this->grade, true);
        Model::validateRequired('pidLoopName', $this->pidLoopName, true);
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('pidLoopParameterId', $this->pidLoopParameterId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterPidParameters) {
            $res['AfterPidParameters'] = $this->afterPidParameters;
        }
        if (null !== $this->beforePidParameters) {
            $res['BeforePidParameters'] = $this->beforePidParameters;
        }
        if (null !== $this->pidLoopRemark) {
            $res['PidLoopRemark'] = $this->pidLoopRemark;
        }
        if (null !== $this->assessTime) {
            $res['AssessTime'] = $this->assessTime;
        }
        if (null !== $this->robust) {
            $res['Robust'] = $this->robust;
        }
        if (null !== $this->validOperationRate) {
            $res['ValidOperationRate'] = $this->validOperationRate;
        }
        if (null !== $this->operationRate) {
            $res['OperationRate'] = $this->operationRate;
        }
        if (null !== $this->performMetrics) {
            $res['PerformMetrics'] = $this->performMetrics;
        }
        if (null !== $this->multipleScore) {
            $res['MultipleScore'] = $this->multipleScore;
        }
        if (null !== $this->grade) {
            $res['Grade'] = $this->grade;
        }
        if (null !== $this->pidLoopName) {
            $res['PidLoopName'] = $this->pidLoopName;
        }
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->pidLoopParameterId) {
            $res['PidLoopParameterId'] = $this->pidLoopParameterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterPidParameters'])) {
            $model->afterPidParameters = $map['AfterPidParameters'];
        }
        if (isset($map['BeforePidParameters'])) {
            $model->beforePidParameters = $map['BeforePidParameters'];
        }
        if (isset($map['PidLoopRemark'])) {
            $model->pidLoopRemark = $map['PidLoopRemark'];
        }
        if (isset($map['AssessTime'])) {
            $model->assessTime = $map['AssessTime'];
        }
        if (isset($map['Robust'])) {
            $model->robust = $map['Robust'];
        }
        if (isset($map['ValidOperationRate'])) {
            $model->validOperationRate = $map['ValidOperationRate'];
        }
        if (isset($map['OperationRate'])) {
            $model->operationRate = $map['OperationRate'];
        }
        if (isset($map['PerformMetrics'])) {
            $model->performMetrics = $map['PerformMetrics'];
        }
        if (isset($map['MultipleScore'])) {
            $model->multipleScore = $map['MultipleScore'];
        }
        if (isset($map['Grade'])) {
            $model->grade = $map['Grade'];
        }
        if (isset($map['PidLoopName'])) {
            $model->pidLoopName = $map['PidLoopName'];
        }
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['PidLoopParameterId'])) {
            $model->pidLoopParameterId = $map['PidLoopParameterId'];
        }

        return $model;
    }
}
