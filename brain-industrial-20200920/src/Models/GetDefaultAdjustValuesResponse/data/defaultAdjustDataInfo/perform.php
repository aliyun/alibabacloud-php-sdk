<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse\data\defaultAdjustDataInfo;

use AlibabaCloud\Tea\Model;

class perform extends Model
{
    /**
     * @var float
     */
    public $raiseTime;

    /**
     * @var float
     */
    public $finalValue;

    /**
     * @var float
     */
    public $overValue;

    /**
     * @var float
     */
    public $stableError;

    /**
     * @var float
     */
    public $adjustTime;

    /**
     * @var float
     */
    public $dynamic;

    /**
     * @var float
     */
    public $robust;
    protected $_name = [
        'raiseTime'   => 'RaiseTime',
        'finalValue'  => 'FinalValue',
        'overValue'   => 'OverValue',
        'stableError' => 'StableError',
        'adjustTime'  => 'AdjustTime',
        'dynamic'     => 'Dynamic',
        'robust'      => 'Robust',
    ];

    public function validate()
    {
        Model::validateRequired('raiseTime', $this->raiseTime, true);
        Model::validateRequired('finalValue', $this->finalValue, true);
        Model::validateRequired('overValue', $this->overValue, true);
        Model::validateRequired('stableError', $this->stableError, true);
        Model::validateRequired('adjustTime', $this->adjustTime, true);
        Model::validateRequired('dynamic', $this->dynamic, true);
        Model::validateRequired('robust', $this->robust, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->raiseTime) {
            $res['RaiseTime'] = $this->raiseTime;
        }
        if (null !== $this->finalValue) {
            $res['FinalValue'] = $this->finalValue;
        }
        if (null !== $this->overValue) {
            $res['OverValue'] = $this->overValue;
        }
        if (null !== $this->stableError) {
            $res['StableError'] = $this->stableError;
        }
        if (null !== $this->adjustTime) {
            $res['AdjustTime'] = $this->adjustTime;
        }
        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
        }
        if (null !== $this->robust) {
            $res['Robust'] = $this->robust;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return perform
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RaiseTime'])) {
            $model->raiseTime = $map['RaiseTime'];
        }
        if (isset($map['FinalValue'])) {
            $model->finalValue = $map['FinalValue'];
        }
        if (isset($map['OverValue'])) {
            $model->overValue = $map['OverValue'];
        }
        if (isset($map['StableError'])) {
            $model->stableError = $map['StableError'];
        }
        if (isset($map['AdjustTime'])) {
            $model->adjustTime = $map['AdjustTime'];
        }
        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
        }
        if (isset($map['Robust'])) {
            $model->robust = $map['Robust'];
        }

        return $model;
    }
}
