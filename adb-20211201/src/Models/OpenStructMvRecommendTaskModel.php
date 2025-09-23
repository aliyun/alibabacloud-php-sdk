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
    public $minRewriteQueryCount;

    /**
     * @var int
     */
    public $minRewriteQueryPattern;

    /**
     * @var int
     */
    public $scanQueriesRange;

    /**
     * @var string
     */
    public $schedulingSettings;

    /**
     * @var int
     */
    public $slowQueryThreshold;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'lastRunAt' => 'LastRunAt',
        'minRewriteQueryCount' => 'MinRewriteQueryCount',
        'minRewriteQueryPattern' => 'MinRewriteQueryPattern',
        'scanQueriesRange' => 'ScanQueriesRange',
        'schedulingSettings' => 'SchedulingSettings',
        'slowQueryThreshold' => 'SlowQueryThreshold',
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

        if (null !== $this->minRewriteQueryCount) {
            $res['MinRewriteQueryCount'] = $this->minRewriteQueryCount;
        }

        if (null !== $this->minRewriteQueryPattern) {
            $res['MinRewriteQueryPattern'] = $this->minRewriteQueryPattern;
        }

        if (null !== $this->scanQueriesRange) {
            $res['ScanQueriesRange'] = $this->scanQueriesRange;
        }

        if (null !== $this->schedulingSettings) {
            $res['SchedulingSettings'] = $this->schedulingSettings;
        }

        if (null !== $this->slowQueryThreshold) {
            $res['SlowQueryThreshold'] = $this->slowQueryThreshold;
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

        if (isset($map['MinRewriteQueryCount'])) {
            $model->minRewriteQueryCount = $map['MinRewriteQueryCount'];
        }

        if (isset($map['MinRewriteQueryPattern'])) {
            $model->minRewriteQueryPattern = $map['MinRewriteQueryPattern'];
        }

        if (isset($map['ScanQueriesRange'])) {
            $model->scanQueriesRange = $map['ScanQueriesRange'];
        }

        if (isset($map['SchedulingSettings'])) {
            $model->schedulingSettings = $map['SchedulingSettings'];
        }

        if (isset($map['SlowQueryThreshold'])) {
            $model->slowQueryThreshold = $map['SlowQueryThreshold'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
