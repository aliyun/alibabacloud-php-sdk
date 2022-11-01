<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $otaVersion;

    /**
     * @var string
     */
    public $taskDisplayStatus;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStartTime;
    protected $_name = [
        'otaVersion'        => 'OtaVersion',
        'taskDisplayStatus' => 'TaskDisplayStatus',
        'taskId'            => 'TaskId',
        'taskStartTime'     => 'TaskStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->otaVersion) {
            $res['OtaVersion'] = $this->otaVersion;
        }
        if (null !== $this->taskDisplayStatus) {
            $res['TaskDisplayStatus'] = $this->taskDisplayStatus;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStartTime) {
            $res['TaskStartTime'] = $this->taskStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OtaVersion'])) {
            $model->otaVersion = $map['OtaVersion'];
        }
        if (isset($map['TaskDisplayStatus'])) {
            $model->taskDisplayStatus = $map['TaskDisplayStatus'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStartTime'])) {
            $model->taskStartTime = $map['TaskStartTime'];
        }

        return $model;
    }
}
