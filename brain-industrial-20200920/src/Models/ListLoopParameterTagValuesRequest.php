<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ListLoopParameterTagValuesRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopParameterId;

    /**
     * @var string
     */
    public $dataStartTime;

    /**
     * @var string
     */
    public $dataEndTime;

    /**
     * @var string
     */
    public $pidLoopId;
    protected $_name = [
        'pidLoopParameterId' => 'PidLoopParameterId',
        'dataStartTime'      => 'DataStartTime',
        'dataEndTime'        => 'DataEndTime',
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
        if (null !== $this->dataStartTime) {
            $res['DataStartTime'] = $this->dataStartTime;
        }
        if (null !== $this->dataEndTime) {
            $res['DataEndTime'] = $this->dataEndTime;
        }
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLoopParameterTagValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopParameterId'])) {
            $model->pidLoopParameterId = $map['PidLoopParameterId'];
        }
        if (isset($map['DataStartTime'])) {
            $model->dataStartTime = $map['DataStartTime'];
        }
        if (isset($map['DataEndTime'])) {
            $model->dataEndTime = $map['DataEndTime'];
        }
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }

        return $model;
    }
}
