<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data\groups\groupMeta;

class groups extends Model
{
    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $firstOccurrenceTime;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $groupKey;

    /**
     * @var groupMeta
     */
    public $groupMeta;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupTitle;

    /**
     * @var int
     */
    public $lastOccurrenceTime;

    /**
     * @var int
     */
    public $latestModifiedTime;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failedCount' => 'FailedCount',
        'firstOccurrenceTime' => 'FirstOccurrenceTime',
        'groupBy' => 'GroupBy',
        'groupKey' => 'GroupKey',
        'groupMeta' => 'GroupMeta',
        'groupName' => 'GroupName',
        'groupTitle' => 'GroupTitle',
        'lastOccurrenceTime' => 'LastOccurrenceTime',
        'latestModifiedTime' => 'LatestModifiedTime',
        'runningCount' => 'RunningCount',
        'successCount' => 'SuccessCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->groupMeta) {
            $this->groupMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->firstOccurrenceTime) {
            $res['FirstOccurrenceTime'] = $this->firstOccurrenceTime;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->groupKey) {
            $res['GroupKey'] = $this->groupKey;
        }

        if (null !== $this->groupMeta) {
            $res['GroupMeta'] = null !== $this->groupMeta ? $this->groupMeta->toArray($noStream) : $this->groupMeta;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupTitle) {
            $res['GroupTitle'] = $this->groupTitle;
        }

        if (null !== $this->lastOccurrenceTime) {
            $res['LastOccurrenceTime'] = $this->lastOccurrenceTime;
        }

        if (null !== $this->latestModifiedTime) {
            $res['LatestModifiedTime'] = $this->latestModifiedTime;
        }

        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['FirstOccurrenceTime'])) {
            $model->firstOccurrenceTime = $map['FirstOccurrenceTime'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['GroupKey'])) {
            $model->groupKey = $map['GroupKey'];
        }

        if (isset($map['GroupMeta'])) {
            $model->groupMeta = groupMeta::fromMap($map['GroupMeta']);
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupTitle'])) {
            $model->groupTitle = $map['GroupTitle'];
        }

        if (isset($map['LastOccurrenceTime'])) {
            $model->lastOccurrenceTime = $map['LastOccurrenceTime'];
        }

        if (isset($map['LatestModifiedTime'])) {
            $model->latestModifiedTime = $map['LatestModifiedTime'];
        }

        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
