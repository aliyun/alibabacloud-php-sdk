<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetSummaryInfoResponseBody;

use AlibabaCloud\Tea\Model;

class agentBotInstanceSummaryList extends Model
{
    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 12
     *
     * @var int
     */
    public $totalCallCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCallTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $usedRecordingStorageSpace;
    protected $_name = [
        'instanceId'                => 'InstanceId',
        'totalCallCount'            => 'TotalCallCount',
        'totalCallTime'             => 'TotalCallTime',
        'usedRecordingStorageSpace' => 'UsedRecordingStorageSpace',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return agentBotInstanceSummaryList
     */
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
