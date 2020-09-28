<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\pidIdentParam;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPidLoopParameterResponse\pidLoopParameter\PIdResetParam;
use AlibabaCloud\Tea\Model;

class pidLoopParameter extends Model
{
    /**
     * @var string
     */
    public $pidLoopParameterId;

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
    public $pidIdentTaskDate;

    /**
     * @var string
     */
    public $pidResetTaskDate;

    /**
     * @var pidIdentParam
     */
    public $pidIdentParam;

    /**
     * @var PIdResetParam
     */
    public $PIdResetParam;
    protected $_name = [
        'pidLoopParameterId' => 'PidLoopParameterId',
        'pidProjectId'       => 'PidProjectId',
        'pidLoopId'          => 'PidLoopId',
        'pidIdentTaskDate'   => 'PidIdentTaskDate',
        'pidResetTaskDate'   => 'PidResetTaskDate',
        'pidIdentParam'      => 'PidIdentParam',
        'PIdResetParam'      => 'PIdResetParam',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopParameterId', $this->pidLoopParameterId, true);
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('pidIdentTaskDate', $this->pidIdentTaskDate, true);
        Model::validateRequired('pidResetTaskDate', $this->pidResetTaskDate, true);
        Model::validateRequired('pidIdentParam', $this->pidIdentParam, true);
        Model::validateRequired('PIdResetParam', $this->PIdResetParam, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopParameterId) {
            $res['PidLoopParameterId'] = $this->pidLoopParameterId;
        }
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->pidIdentTaskDate) {
            $res['PidIdentTaskDate'] = $this->pidIdentTaskDate;
        }
        if (null !== $this->pidResetTaskDate) {
            $res['PidResetTaskDate'] = $this->pidResetTaskDate;
        }
        if (null !== $this->pidIdentParam) {
            $res['PidIdentParam'] = null !== $this->pidIdentParam ? $this->pidIdentParam->toMap() : null;
        }
        if (null !== $this->PIdResetParam) {
            $res['PIdResetParam'] = null !== $this->PIdResetParam ? $this->PIdResetParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidLoopParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopParameterId'])) {
            $model->pidLoopParameterId = $map['PidLoopParameterId'];
        }
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['PidIdentTaskDate'])) {
            $model->pidIdentTaskDate = $map['PidIdentTaskDate'];
        }
        if (isset($map['PidResetTaskDate'])) {
            $model->pidResetTaskDate = $map['PidResetTaskDate'];
        }
        if (isset($map['PidIdentParam'])) {
            $model->pidIdentParam = pidIdentParam::fromMap($map['PidIdentParam']);
        }
        if (isset($map['PIdResetParam'])) {
            $model->PIdResetParam = PIdResetParam::fromMap($map['PIdResetParam']);
        }

        return $model;
    }
}
