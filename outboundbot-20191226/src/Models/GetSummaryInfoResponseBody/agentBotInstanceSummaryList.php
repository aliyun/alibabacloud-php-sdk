<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetSummaryInfoResponseBody;

use AlibabaCloud\Dara\Model;

class agentBotInstanceSummaryList extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $totalCallCount;

    /**
     * @var int
     */
    public $totalCallTime;

    /**
     * @var int
     */
    public $usedRecordingStorageSpace;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'totalCallCount' => 'TotalCallCount',
        'totalCallTime' => 'TotalCallTime',
        'usedRecordingStorageSpace' => 'UsedRecordingStorageSpace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->totalCallCount) {
            $res['TotalCallCount'] = $this->totalCallCount;
        }

        if (null !== $this->totalCallTime) {
            $res['TotalCallTime'] = $this->totalCallTime;
        }

        if (null !== $this->usedRecordingStorageSpace) {
            $res['UsedRecordingStorageSpace'] = $this->usedRecordingStorageSpace;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TotalCallCount'])) {
            $model->totalCallCount = $map['TotalCallCount'];
        }

        if (isset($map['TotalCallTime'])) {
            $model->totalCallTime = $map['TotalCallTime'];
        }

        if (isset($map['UsedRecordingStorageSpace'])) {
            $model->usedRecordingStorageSpace = $map['UsedRecordingStorageSpace'];
        }

        return $model;
    }
}
