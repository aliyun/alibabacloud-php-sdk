<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\kd;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\kp;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\op1Param;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\op2Param;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\opParam;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\pvRange;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\spOperate;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\td;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopResponse\loopConfiguration\baseParam\ti;
use AlibabaCloud\Tea\Model;

class baseParam extends Model
{
    /**
     * @var int
     */
    public $openLoopTime;

    /**
     * @var int
     */
    public $sampleTime;

    /**
     * @var int
     */
    public $suitCtrlTime;

    /**
     * @var string
     */
    public $pv;

    /**
     * @var string
     */
    public $sp;

    /**
     * @var bool
     */
    public $splitRangeControl;

    /**
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $op1;

    /**
     * @var string
     */
    public $op2;

    /**
     * @var string
     */
    public $controlSwitch;

    /**
     * @var string
     */
    public $mv;

    /**
     * @var bool
     */
    public $forwardController;

    /**
     * @var string
     */
    public $forwardVariable;

    /**
     * @var bool
     */
    public $integral;

    /**
     * @var pvRange
     */
    public $pvRange;

    /**
     * @var spOperate
     */
    public $spOperate;

    /**
     * @var opParam
     */
    public $opParam;

    /**
     * @var op1Param
     */
    public $op1Param;

    /**
     * @var op2Param
     */
    public $op2Param;

    /**
     * @var kp
     */
    public $kp;

    /**
     * @var td
     */
    public $td;

    /**
     * @var ti
     */
    public $ti;

    /**
     * @var kd
     */
    public $kd;
    protected $_name = [
        'openLoopTime'      => 'OpenLoopTime',
        'sampleTime'        => 'SampleTime',
        'suitCtrlTime'      => 'SuitCtrlTime',
        'pv'                => 'Pv',
        'sp'                => 'Sp',
        'splitRangeControl' => 'SplitRangeControl',
        'op'                => 'Op',
        'op1'               => 'Op1',
        'op2'               => 'Op2',
        'controlSwitch'     => 'ControlSwitch',
        'mv'                => 'Mv',
        'forwardController' => 'ForwardController',
        'forwardVariable'   => 'ForwardVariable',
        'integral'          => 'Integral',
        'pvRange'           => 'PvRange',
        'spOperate'         => 'SpOperate',
        'opParam'           => 'OpParam',
        'op1Param'          => 'Op1Param',
        'op2Param'          => 'Op2Param',
        'kp'                => 'Kp',
        'td'                => 'Td',
        'ti'                => 'Ti',
        'kd'                => 'Kd',
    ];

    public function validate()
    {
        Model::validateRequired('openLoopTime', $this->openLoopTime, true);
        Model::validateRequired('sampleTime', $this->sampleTime, true);
        Model::validateRequired('suitCtrlTime', $this->suitCtrlTime, true);
        Model::validateRequired('pv', $this->pv, true);
        Model::validateRequired('sp', $this->sp, true);
        Model::validateRequired('splitRangeControl', $this->splitRangeControl, true);
        Model::validateRequired('op', $this->op, true);
        Model::validateRequired('op1', $this->op1, true);
        Model::validateRequired('op2', $this->op2, true);
        Model::validateRequired('controlSwitch', $this->controlSwitch, true);
        Model::validateRequired('mv', $this->mv, true);
        Model::validateRequired('forwardController', $this->forwardController, true);
        Model::validateRequired('forwardVariable', $this->forwardVariable, true);
        Model::validateRequired('integral', $this->integral, true);
        Model::validateRequired('pvRange', $this->pvRange, true);
        Model::validateRequired('spOperate', $this->spOperate, true);
        Model::validateRequired('opParam', $this->opParam, true);
        Model::validateRequired('op1Param', $this->op1Param, true);
        Model::validateRequired('op2Param', $this->op2Param, true);
        Model::validateRequired('kp', $this->kp, true);
        Model::validateRequired('td', $this->td, true);
        Model::validateRequired('ti', $this->ti, true);
        Model::validateRequired('kd', $this->kd, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openLoopTime) {
            $res['OpenLoopTime'] = $this->openLoopTime;
        }
        if (null !== $this->sampleTime) {
            $res['SampleTime'] = $this->sampleTime;
        }
        if (null !== $this->suitCtrlTime) {
            $res['SuitCtrlTime'] = $this->suitCtrlTime;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->sp) {
            $res['Sp'] = $this->sp;
        }
        if (null !== $this->splitRangeControl) {
            $res['SplitRangeControl'] = $this->splitRangeControl;
        }
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }
        if (null !== $this->op1) {
            $res['Op1'] = $this->op1;
        }
        if (null !== $this->op2) {
            $res['Op2'] = $this->op2;
        }
        if (null !== $this->controlSwitch) {
            $res['ControlSwitch'] = $this->controlSwitch;
        }
        if (null !== $this->mv) {
            $res['Mv'] = $this->mv;
        }
        if (null !== $this->forwardController) {
            $res['ForwardController'] = $this->forwardController;
        }
        if (null !== $this->forwardVariable) {
            $res['ForwardVariable'] = $this->forwardVariable;
        }
        if (null !== $this->integral) {
            $res['Integral'] = $this->integral;
        }
        if (null !== $this->pvRange) {
            $res['PvRange'] = null !== $this->pvRange ? $this->pvRange->toMap() : null;
        }
        if (null !== $this->spOperate) {
            $res['SpOperate'] = null !== $this->spOperate ? $this->spOperate->toMap() : null;
        }
        if (null !== $this->opParam) {
            $res['OpParam'] = null !== $this->opParam ? $this->opParam->toMap() : null;
        }
        if (null !== $this->op1Param) {
            $res['Op1Param'] = null !== $this->op1Param ? $this->op1Param->toMap() : null;
        }
        if (null !== $this->op2Param) {
            $res['Op2Param'] = null !== $this->op2Param ? $this->op2Param->toMap() : null;
        }
        if (null !== $this->kp) {
            $res['Kp'] = null !== $this->kp ? $this->kp->toMap() : null;
        }
        if (null !== $this->td) {
            $res['Td'] = null !== $this->td ? $this->td->toMap() : null;
        }
        if (null !== $this->ti) {
            $res['Ti'] = null !== $this->ti ? $this->ti->toMap() : null;
        }
        if (null !== $this->kd) {
            $res['Kd'] = null !== $this->kd ? $this->kd->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenLoopTime'])) {
            $model->openLoopTime = $map['OpenLoopTime'];
        }
        if (isset($map['SampleTime'])) {
            $model->sampleTime = $map['SampleTime'];
        }
        if (isset($map['SuitCtrlTime'])) {
            $model->suitCtrlTime = $map['SuitCtrlTime'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['Sp'])) {
            $model->sp = $map['Sp'];
        }
        if (isset($map['SplitRangeControl'])) {
            $model->splitRangeControl = $map['SplitRangeControl'];
        }
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }
        if (isset($map['Op1'])) {
            $model->op1 = $map['Op1'];
        }
        if (isset($map['Op2'])) {
            $model->op2 = $map['Op2'];
        }
        if (isset($map['ControlSwitch'])) {
            $model->controlSwitch = $map['ControlSwitch'];
        }
        if (isset($map['Mv'])) {
            $model->mv = $map['Mv'];
        }
        if (isset($map['ForwardController'])) {
            $model->forwardController = $map['ForwardController'];
        }
        if (isset($map['ForwardVariable'])) {
            $model->forwardVariable = $map['ForwardVariable'];
        }
        if (isset($map['Integral'])) {
            $model->integral = $map['Integral'];
        }
        if (isset($map['PvRange'])) {
            $model->pvRange = pvRange::fromMap($map['PvRange']);
        }
        if (isset($map['SpOperate'])) {
            $model->spOperate = spOperate::fromMap($map['SpOperate']);
        }
        if (isset($map['OpParam'])) {
            $model->opParam = opParam::fromMap($map['OpParam']);
        }
        if (isset($map['Op1Param'])) {
            $model->op1Param = op1Param::fromMap($map['Op1Param']);
        }
        if (isset($map['Op2Param'])) {
            $model->op2Param = op2Param::fromMap($map['Op2Param']);
        }
        if (isset($map['Kp'])) {
            $model->kp = kp::fromMap($map['Kp']);
        }
        if (isset($map['Td'])) {
            $model->td = td::fromMap($map['Td']);
        }
        if (isset($map['Ti'])) {
            $model->ti = ti::fromMap($map['Ti']);
        }
        if (isset($map['Kd'])) {
            $model->kd = kd::fromMap($map['Kd']);
        }

        return $model;
    }
}
