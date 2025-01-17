<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody\guideTaskConfigList\rewardData;

class guideTaskConfigList extends Model
{
    /**
     * @var rewardData
     */
    public $rewardData;
    /**
     * @var int
     */
    public $securityScore;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskTypeName;
    protected $_name = [
        'rewardData'    => 'RewardData',
        'securityScore' => 'SecurityScore',
        'status'        => 'Status',
        'taskId'        => 'TaskId',
        'taskTypeName'  => 'TaskTypeName',
    ];

    public function validate()
    {
        if (null !== $this->rewardData) {
            $this->rewardData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rewardData) {
            $res['RewardData'] = null !== $this->rewardData ? $this->rewardData->toArray($noStream) : $this->rewardData;
        }

        if (null !== $this->securityScore) {
            $res['SecurityScore'] = $this->securityScore;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskTypeName) {
            $res['TaskTypeName'] = $this->taskTypeName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RewardData'])) {
            $model->rewardData = rewardData::fromMap($map['RewardData']);
        }

        if (isset($map['SecurityScore'])) {
            $model->securityScore = $map['SecurityScore'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskTypeName'])) {
            $model->taskTypeName = $map['TaskTypeName'];
        }

        return $model;
    }
}
