<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\PIdResetParam\manualCtrl;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\PIdResetParam\measuredValueRange;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\PIdResetParam\valvePositionRange;
use AlibabaCloud\Tea\Model;

class PIdResetParam extends Model
{
    /**
     * @var string
     */
    public $dcsType;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $modelType;

    /**
     * @var bool
     */
    public $integral;

    /**
     * @var int
     */
    public $ctrlMode;

    /**
     * @var int
     */
    public $ctrlStuc;

    /**
     * @var int
     */
    public $robust;

    /**
     * @var float
     */
    public $dynamic;

    /**
     * @var bool
     */
    public $manualTrend;

    /**
     * @var measuredValueRange
     */
    public $measuredValueRange;

    /**
     * @var valvePositionRange
     */
    public $valvePositionRange;

    /**
     * @var manualCtrl
     */
    public $manualCtrl;
    protected $_name = [
        'dcsType'            => 'DcsType',
        'model'              => 'Model',
        'modelType'          => 'ModelType',
        'integral'           => 'Integral',
        'ctrlMode'           => 'CtrlMode',
        'ctrlStuc'           => 'CtrlStuc',
        'robust'             => 'Robust',
        'dynamic'            => 'Dynamic',
        'manualTrend'        => 'ManualTrend',
        'measuredValueRange' => 'MeasuredValueRange',
        'valvePositionRange' => 'ValvePositionRange',
        'manualCtrl'         => 'ManualCtrl',
    ];

    public function validate()
    {
        Model::validateRequired('dcsType', $this->dcsType, true);
        Model::validateRequired('model', $this->model, true);
        Model::validateRequired('modelType', $this->modelType, true);
        Model::validateRequired('integral', $this->integral, true);
        Model::validateRequired('ctrlMode', $this->ctrlMode, true);
        Model::validateRequired('ctrlStuc', $this->ctrlStuc, true);
        Model::validateRequired('robust', $this->robust, true);
        Model::validateRequired('dynamic', $this->dynamic, true);
        Model::validateRequired('manualTrend', $this->manualTrend, true);
        Model::validateRequired('measuredValueRange', $this->measuredValueRange, true);
        Model::validateRequired('valvePositionRange', $this->valvePositionRange, true);
        Model::validateRequired('manualCtrl', $this->manualCtrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dcsType) {
            $res['DcsType'] = $this->dcsType;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->integral) {
            $res['Integral'] = $this->integral;
        }
        if (null !== $this->ctrlMode) {
            $res['CtrlMode'] = $this->ctrlMode;
        }
        if (null !== $this->ctrlStuc) {
            $res['CtrlStuc'] = $this->ctrlStuc;
        }
        if (null !== $this->robust) {
            $res['Robust'] = $this->robust;
        }
        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
        }
        if (null !== $this->manualTrend) {
            $res['ManualTrend'] = $this->manualTrend;
        }
        if (null !== $this->measuredValueRange) {
            $res['MeasuredValueRange'] = null !== $this->measuredValueRange ? $this->measuredValueRange->toMap() : null;
        }
        if (null !== $this->valvePositionRange) {
            $res['ValvePositionRange'] = null !== $this->valvePositionRange ? $this->valvePositionRange->toMap() : null;
        }
        if (null !== $this->manualCtrl) {
            $res['ManualCtrl'] = null !== $this->manualCtrl ? $this->manualCtrl->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PIdResetParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DcsType'])) {
            $model->dcsType = $map['DcsType'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['Integral'])) {
            $model->integral = $map['Integral'];
        }
        if (isset($map['CtrlMode'])) {
            $model->ctrlMode = $map['CtrlMode'];
        }
        if (isset($map['CtrlStuc'])) {
            $model->ctrlStuc = $map['CtrlStuc'];
        }
        if (isset($map['Robust'])) {
            $model->robust = $map['Robust'];
        }
        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
        }
        if (isset($map['ManualTrend'])) {
            $model->manualTrend = $map['ManualTrend'];
        }
        if (isset($map['MeasuredValueRange'])) {
            $model->measuredValueRange = measuredValueRange::fromMap($map['MeasuredValueRange']);
        }
        if (isset($map['ValvePositionRange'])) {
            $model->valvePositionRange = valvePositionRange::fromMap($map['ValvePositionRange']);
        }
        if (isset($map['ManualCtrl'])) {
            $model->manualCtrl = manualCtrl::fromMap($map['ManualCtrl']);
        }

        return $model;
    }
}
