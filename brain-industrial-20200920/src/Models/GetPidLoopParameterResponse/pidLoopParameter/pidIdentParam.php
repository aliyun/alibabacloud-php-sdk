<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\pidIdentParam\limitMax;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\pidIdentParam\limitMin;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\pidIdentParam\manualModel;
use AlibabaCloud\Tea\Model;

class pidIdentParam extends Model
{
    /**
     * @var int
     */
    public $modelType;

    /**
     * @var bool
     */
    public $integral;

    /**
     * @var bool
     */
    public $trendControl;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var int
     */
    public $smooth;

    /**
     * @var int
     */
    public $robust;

    /**
     * @var bool
     */
    public $limitSw;

    /**
     * @var bool
     */
    public $manualTrend;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pidDataProcessId;

    /**
     * @var limitMax
     */
    public $limitMax;

    /**
     * @var limitMin
     */
    public $limitMin;

    /**
     * @var manualModel
     */
    public $manualModel;
    protected $_name = [
        'modelType'        => 'ModelType',
        'integral'         => 'Integral',
        'trendControl'     => 'TrendControl',
        'delay'            => 'Delay',
        'smooth'           => 'Smooth',
        'robust'           => 'Robust',
        'limitSw'          => 'LimitSw',
        'manualTrend'      => 'ManualTrend',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'pidDataProcessId' => 'PidDataProcessId',
        'limitMax'         => 'LimitMax',
        'limitMin'         => 'LimitMin',
        'manualModel'      => 'ManualModel',
    ];

    public function validate()
    {
        Model::validateRequired('modelType', $this->modelType, true);
        Model::validateRequired('integral', $this->integral, true);
        Model::validateRequired('trendControl', $this->trendControl, true);
        Model::validateRequired('delay', $this->delay, true);
        Model::validateRequired('smooth', $this->smooth, true);
        Model::validateRequired('robust', $this->robust, true);
        Model::validateRequired('limitSw', $this->limitSw, true);
        Model::validateRequired('manualTrend', $this->manualTrend, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('pidDataProcessId', $this->pidDataProcessId, true);
        Model::validateRequired('limitMax', $this->limitMax, true);
        Model::validateRequired('limitMin', $this->limitMin, true);
        Model::validateRequired('manualModel', $this->manualModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->integral) {
            $res['Integral'] = $this->integral;
        }
        if (null !== $this->trendControl) {
            $res['TrendControl'] = $this->trendControl;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->smooth) {
            $res['Smooth'] = $this->smooth;
        }
        if (null !== $this->robust) {
            $res['Robust'] = $this->robust;
        }
        if (null !== $this->limitSw) {
            $res['LimitSw'] = $this->limitSw;
        }
        if (null !== $this->manualTrend) {
            $res['ManualTrend'] = $this->manualTrend;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pidDataProcessId) {
            $res['PidDataProcessId'] = $this->pidDataProcessId;
        }
        if (null !== $this->limitMax) {
            $res['LimitMax'] = null !== $this->limitMax ? $this->limitMax->toMap() : null;
        }
        if (null !== $this->limitMin) {
            $res['LimitMin'] = null !== $this->limitMin ? $this->limitMin->toMap() : null;
        }
        if (null !== $this->manualModel) {
            $res['ManualModel'] = null !== $this->manualModel ? $this->manualModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidIdentParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Integral'])) {
            $model->integral = $map['Integral'];
        }
        if (isset($map['TrendControl'])) {
            $model->trendControl = $map['TrendControl'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['Smooth'])) {
            $model->smooth = $map['Smooth'];
        }
        if (isset($map['Robust'])) {
            $model->robust = $map['Robust'];
        }
        if (isset($map['LimitSw'])) {
            $model->limitSw = $map['LimitSw'];
        }
        if (isset($map['ManualTrend'])) {
            $model->manualTrend = $map['ManualTrend'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PidDataProcessId'])) {
            $model->pidDataProcessId = $map['PidDataProcessId'];
        }
        if (isset($map['LimitMax'])) {
            $model->limitMax = limitMax::fromMap($map['LimitMax']);
        }
        if (isset($map['LimitMin'])) {
            $model->limitMin = limitMin::fromMap($map['LimitMin']);
        }
        if (isset($map['ManualModel'])) {
            $model->manualModel = manualModel::fromMap($map['ManualModel']);
        }

        return $model;
    }
}
