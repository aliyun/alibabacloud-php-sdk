<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class GetCustomIdentValuesRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopParameterId;

    /**
     * @var string
     */
    public $pidLoopId;
    protected $_name = [
        'pidLoopParameterId' => 'PidLoopParameterId',
        'pidLoopId'          => 'PidLoopId',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopParameterId', $this->pidLoopParameterId, true);
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopParameterId) {
            $res['PidLoopParameterId'] = $this->pidLoopParameterId;
        }
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCustomIdentValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopParameterId'])) {
            $model->pidLoopParameterId = $map['PidLoopParameterId'];
        }
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }

        return $model;
    }
}
