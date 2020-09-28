<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class SubmitPidLoopEvaluationRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $pidLoopIdList;

    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'pidLoopIdList' => 'PidLoopIdList',
        'pidProjectId'  => 'PidProjectId',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopIdList', $this->pidLoopIdList, true);
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopIdList) {
            $res['PidLoopIdList'] = $this->pidLoopIdList;
        }
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitPidLoopEvaluationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopIdList'])) {
            $model->pidLoopIdList = $map['PidLoopIdList'];
        }
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
