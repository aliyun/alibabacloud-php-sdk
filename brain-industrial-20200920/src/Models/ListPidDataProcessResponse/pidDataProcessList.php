<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListPidDataProcessResponse;

use AlibabaCloud\Tea\Model;

class pidDataProcessList extends Model
{
    /**
     * @var string
     */
    public $pidDataProcessId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $pidDataProcessStatus;

    /**
     * @var string
     */
    public $pidDataProcessProgress;
    protected $_name = [
        'pidDataProcessId'       => 'PidDataProcessId',
        'startTime'              => 'StartTime',
        'endTime'                => 'EndTime',
        'pidDataProcessStatus'   => 'PidDataProcessStatus',
        'pidDataProcessProgress' => 'PidDataProcessProgress',
    ];

    public function validate()
    {
        Model::validateRequired('pidDataProcessId', $this->pidDataProcessId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('pidDataProcessStatus', $this->pidDataProcessStatus, true);
        Model::validateRequired('pidDataProcessProgress', $this->pidDataProcessProgress, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidDataProcessId) {
            $res['PidDataProcessId'] = $this->pidDataProcessId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pidDataProcessStatus) {
            $res['PidDataProcessStatus'] = $this->pidDataProcessStatus;
        }
        if (null !== $this->pidDataProcessProgress) {
            $res['PidDataProcessProgress'] = $this->pidDataProcessProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidDataProcessList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidDataProcessId'])) {
            $model->pidDataProcessId = $map['PidDataProcessId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PidDataProcessStatus'])) {
            $model->pidDataProcessStatus = $map['PidDataProcessStatus'];
        }
        if (isset($map['PidDataProcessProgress'])) {
            $model->pidDataProcessProgress = $map['PidDataProcessProgress'];
        }

        return $model;
    }
}
