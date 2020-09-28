<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ListPidDataProcessRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var bool
     */
    public $onlyCompleteStatus;

    /**
     * @var string
     */
    public $pidDataProcessType;
    protected $_name = [
        'pidLoopId'          => 'PidLoopId',
        'onlyCompleteStatus' => 'OnlyCompleteStatus',
        'pidDataProcessType' => 'PidDataProcessType',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('onlyCompleteStatus', $this->onlyCompleteStatus, true);
        Model::validateRequired('pidDataProcessType', $this->pidDataProcessType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->onlyCompleteStatus) {
            $res['OnlyCompleteStatus'] = $this->onlyCompleteStatus;
        }
        if (null !== $this->pidDataProcessType) {
            $res['PidDataProcessType'] = $this->pidDataProcessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPidDataProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['OnlyCompleteStatus'])) {
            $model->onlyCompleteStatus = $map['OnlyCompleteStatus'];
        }
        if (isset($map['PidDataProcessType'])) {
            $model->pidDataProcessType = $map['PidDataProcessType'];
        }

        return $model;
    }
}
