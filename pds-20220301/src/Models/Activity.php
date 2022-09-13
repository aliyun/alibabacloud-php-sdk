<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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
        'activityId'         => 'activity_id',
        'device'             => 'device',
        'driveId'            => 'drive_id',
        'eventType'          => 'event_type',
        'latestEventTime'    => 'latest_event_time',
        'resourceCategory'   => 'resource_category',
        'resourceList'       => 'resource_list',
        'totalResourceCount' => 'total_resource_count',
        'userId'             => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['resource_list'] = $this->resourceList;
        }
        if (null !== $this->totalResourceCount) {
            $res['total_resource_count'] = $this->totalResourceCount;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Activity
     */
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
                $model->resourceList = $map['resource_list'];
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
