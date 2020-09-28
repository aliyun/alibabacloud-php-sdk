<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class SetPidLoopDefaultParameterRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var string
     */
    public $pidLoopParameterId;
    protected $_name = [
        'pidLoopId'          => 'PidLoopId',
        'pidLoopParameterId' => 'PidLoopParameterId',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('pidLoopParameterId', $this->pidLoopParameterId, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return SetPidLoopDefaultParameterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['PidLoopParameterId'])) {
            $model->pidLoopParameterId = $map['PidLoopParameterId'];
        }

        return $model;
    }
}
