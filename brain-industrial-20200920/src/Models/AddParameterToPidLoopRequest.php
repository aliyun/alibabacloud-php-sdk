<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class AddParameterToPidLoopRequest extends Model
{
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

    /**
     * @var int
     */
    public $adjustType;

    /**
     * @var mixed[]
     */
    public $modelDistinguish;

    /**
     * @var mixed[]
     */
    public $parameterTuning;
    protected $_name = [
        'pidProjectId'       => 'PidProjectId',
        'pidLoopId'          => 'PidLoopId',
        'pidLoopParameterId' => 'PidLoopParameterId',
        'adjustType'         => 'AdjustType',
        'modelDistinguish'   => 'ModelDistinguish',
        'parameterTuning'    => 'ParameterTuning',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('pidLoopParameterId', $this->pidLoopParameterId, true);
        Model::validateRequired('adjustType', $this->adjustType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->pidLoopParameterId) {
            $res['PidLoopParameterId'] = $this->pidLoopParameterId;
        }
        if (null !== $this->adjustType) {
            $res['AdjustType'] = $this->adjustType;
        }
        if (null !== $this->modelDistinguish) {
            $res['ModelDistinguish'] = $this->modelDistinguish;
        }
        if (null !== $this->parameterTuning) {
            $res['ParameterTuning'] = $this->parameterTuning;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddParameterToPidLoopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['PidLoopParameterId'])) {
            $model->pidLoopParameterId = $map['PidLoopParameterId'];
        }
        if (isset($map['AdjustType'])) {
            $model->adjustType = $map['AdjustType'];
        }
        if (isset($map['ModelDistinguish'])) {
            $model->modelDistinguish = $map['ModelDistinguish'];
        }
        if (isset($map['ParameterTuning'])) {
            $model->parameterTuning = $map['ParameterTuning'];
        }

        return $model;
    }
}
