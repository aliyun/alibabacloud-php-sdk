<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class OpenStructMvRecommendTaskModel extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastRunAt;

    /**
     * @var int
     */
    public $scanQueriesRange;

    /**
     * @var string
     */
    public $schedulingSettings;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'lastRunAt' => 'LastRunAt',
        'scanQueriesRange' => 'ScanQueriesRange',
        'schedulingSettings' => 'SchedulingSettings',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lastRunAt) {
            $res['LastRunAt'] = $this->lastRunAt;
        }

        if (null !== $this->scanQueriesRange) {
            $res['ScanQueriesRange'] = $this->scanQueriesRange;
        }

        if (null !== $this->schedulingSettings) {
            $res['SchedulingSettings'] = $this->schedulingSettings;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LastRunAt'])) {
            $model->lastRunAt = $map['LastRunAt'];
        }

        if (isset($map['ScanQueriesRange'])) {
            $model->scanQueriesRange = $map['ScanQueriesRange'];
        }

        if (isset($map['SchedulingSettings'])) {
            $model->schedulingSettings = $map['SchedulingSettings'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
