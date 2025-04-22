<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class Activity extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var int
     */
    public $eventType;

    /**
     * @var string
     */
    public $latestEventTime;

    /**
     * @var int
     */
    public $resourceCategory;

    /**
     * @var mixed[][]
     */
    public $resourceList;

    /**
     * @var int
     */
    public $totalResourceCount;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'activityId' => 'activity_id',
        'device' => 'device',
        'driveId' => 'drive_id',
        'eventType' => 'event_type',
        'latestEventTime' => 'latest_event_time',
        'resourceCategory' => 'resource_category',
        'resourceList' => 'resource_list',
        'totalResourceCount' => 'total_resource_count',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->resourceList)) {
            Model::validateArray($this->resourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['activity_id'] = $this->activityId;
        }

        if (null !== $this->device) {
            $res['device'] = $this->device;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->eventType) {
            $res['event_type'] = $this->eventType;
        }

        if (null !== $this->latestEventTime) {
            $res['latest_event_time'] = $this->latestEventTime;
        }

        if (null !== $this->resourceCategory) {
            $res['resource_category'] = $this->resourceCategory;
        }

        if (null !== $this->resourceList) {
            if (\is_array($this->resourceList)) {
                $res['resource_list'] = [];
                $n1 = 0;
                foreach ($this->resourceList as $item1) {
                    if (\is_array($item1)) {
                        $res['resource_list'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['resource_list'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->totalResourceCount) {
            $res['total_resource_count'] = $this->totalResourceCount;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['activity_id'])) {
            $model->activityId = $map['activity_id'];
        }

        if (isset($map['device'])) {
            $model->device = $map['device'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['event_type'])) {
            $model->eventType = $map['event_type'];
        }

        if (isset($map['latest_event_time'])) {
            $model->latestEventTime = $map['latest_event_time'];
        }

        if (isset($map['resource_category'])) {
            $model->resourceCategory = $map['resource_category'];
        }

        if (isset($map['resource_list'])) {
            if (!empty($map['resource_list'])) {
                $model->resourceList = [];
                $n1 = 0;
                foreach ($map['resource_list'] as $item1) {
                    if (!empty($item1)) {
                        $model->resourceList[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->resourceList[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['total_resource_count'])) {
            $model->totalResourceCount = $map['total_resource_count'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
