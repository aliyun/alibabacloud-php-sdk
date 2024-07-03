<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody\scalingActivities\lifecycleHookContext;
use AlibabaCloud\Tea\Model;

class scalingActivities extends Model
{
    /**
     * @description The metadata of the scaling activity.
     *
     * @example {\\"goatscaler.io/managed\\":\\"true\\"}
     *
     * @var string
     */
    public $activityMetadata;

    /**
     * @description The total number of instances that are manually added to the scaling group after the scaling activity was complete.
     *
     * @example 0
     *
     * @var string
     */
    public $attachedCapacity;

    /**
     * @description The total number of instances that are created by Auto Scaling after the scaling activity was complete.
     *
     * @example 2
     *
     * @var string
     */
    public $autoCreatedCapacity;

    /**
     * @description The reason why the scaling activity was triggered.
     *
     * @example A user requests to execute scaling rule \\"asr-bp12tcnol686y1ik****\\", changing the Total Capacity from \\"1\\" to \\"2\\".
     *
     * @var string
     */
    public $cause;

    /**
     * @description The number of instances that are created during the scale-out event.
     *
     * @example 1
     *
     * @var int
     */
    public $createdCapacity;

    /**
     * @description The instances that are created during the scale-out event.
     *
     * @var string[]
     */
    public $createdInstances;

    /**
     * @description The description of the scaling activity.
     *
     * @example Add \\"1\\" ECS instance
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of instances that are released during the scale-in event.
     *
     * @example 1
     *
     * @var int
     */
    public $destroyedCapacity;

    /**
     * @description The instances that are released during the scale-in event.
     *
     * @var string[]
     */
    public $destroyedInstances;

    /**
     * @description Details of the scaling activity.
     *
     * @example "new ECS instances "i-j6c8ilerw, i-j6c8iler4mx" are created."
     *
     * @var string
     */
    public $detail;

    /**
     * @description The time when the scaling activity was complete.
     *
     * @example 2020-09-10T09:54Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The error code that is returned when the scaling activity failed.
     *
     * @example OperationDenied.NoStock
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned when the scaling activity failed.
     *
     * @example The specified ECS resource is out of stock in this region. Please try again later.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The context of the lifecycle hook.
     *
     * @var lifecycleHookContext
     */
    public $lifecycleHookContext;

    /**
     * @description The execution progress of the scaling activity.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The ID of the scaling activity.
     *
     * @example asa-bp161xudmuxdzofe****
     *
     * @var string
     */
    public $scalingActivityId;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description If you query a scale-out activity, the value of this parameter indicates the number of instances that are created or the number of instances that are started from the Economical Mode during the scale-out event.
     *
     * If you query a scale-in activity, the value of this parameter indicates the number of instances that are deleted or the number of instances that are stopped in the Economical Mode during the scale-in event.
     * @example 1
     *
     * @var int
     */
    public $scalingInstanceNumber;

    /**
     * @description The time when the scaling activity was started.
     *
     * @example 2020-09-10T09:54Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The number of instances that are started from the Economical Mode during the scale-out event.
     *
     * @example 1
     *
     * @var int
     */
    public $startedCapacity;

    /**
     * @description The instances that are started from the Economical Mode during the scale-out event.
     *
     * @var string[]
     */
    public $startedInstances;

    /**
     * @description The status of the scaling activity. Valid values:
     *
     *   Successful: The scaling activity is successful.
     *   Warning: The scaling activity is partially successful.
     *   Failed: The scaling activity failed.
     *   InProgress: The scaling activity is in progress.
     *   Rejected: The request to trigger the scaling activity is rejected.
     *
     * @example Successful
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The status message of the scaling activity.
     *
     * @example \\"1\\" ECS instances are added
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The number of instances that are stopped in the Economical Mode during the scale-in event.
     *
     * @example 1
     *
     * @var int
     */
    public $stoppedCapacity;

    /**
     * @description The instances that are stopped in the Economical Mode during the scale-in event.
     *
     * @var string[]
     */
    public $stoppedInstances;

    /**
     * @description The total number of instances in the scaling group after the scaling activity was complete.
     *
     * @example 2
     *
     * @var string
     */
    public $totalCapacity;

    /**
     * @description The ID of the trigger source of the scaling activity.
     *
     *   If TriggerSourceType is set to Cms, the ID of the trigger source is the ID of an event-triggered task.
     *   If TriggerSourceType is set to Api, the ID of the trigger source is the ID of an Alibaba Cloud account or a RAM user.
     *   If TriggerSourceType is set to Api, the ID of the trigger source is null.
     *
     * @example 2346366580*****
     *
     * @var string
     */
    public $triggerSourceId;

    /**
     * @description The type of the trigger source of the scaling activity.
     *
     *   Cms: triggered by an event-triggered task
     *   APIs: triggered by API calling
     *   Ess: triggered by a system task
     *
     * @example Api
     *
     * @var string
     */
    public $triggerSourceType;
    protected $_name = [
        'activityMetadata'      => 'ActivityMetadata',
        'attachedCapacity'      => 'AttachedCapacity',
        'autoCreatedCapacity'   => 'AutoCreatedCapacity',
        'cause'                 => 'Cause',
        'createdCapacity'       => 'CreatedCapacity',
        'createdInstances'      => 'CreatedInstances',
        'description'           => 'Description',
        'destroyedCapacity'     => 'DestroyedCapacity',
        'destroyedInstances'    => 'DestroyedInstances',
        'detail'                => 'Detail',
        'endTime'               => 'EndTime',
        'errorCode'             => 'ErrorCode',
        'errorMessage'          => 'ErrorMessage',
        'lifecycleHookContext'  => 'LifecycleHookContext',
        'progress'              => 'Progress',
        'scalingActivityId'     => 'ScalingActivityId',
        'scalingGroupId'        => 'ScalingGroupId',
        'scalingInstanceNumber' => 'ScalingInstanceNumber',
        'startTime'             => 'StartTime',
        'startedCapacity'       => 'StartedCapacity',
        'startedInstances'      => 'StartedInstances',
        'statusCode'            => 'StatusCode',
        'statusMessage'         => 'StatusMessage',
        'stoppedCapacity'       => 'StoppedCapacity',
        'stoppedInstances'      => 'StoppedInstances',
        'totalCapacity'         => 'TotalCapacity',
        'triggerSourceId'       => 'TriggerSourceId',
        'triggerSourceType'     => 'TriggerSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityMetadata) {
            $res['ActivityMetadata'] = $this->activityMetadata;
        }
        if (null !== $this->attachedCapacity) {
            $res['AttachedCapacity'] = $this->attachedCapacity;
        }
        if (null !== $this->autoCreatedCapacity) {
            $res['AutoCreatedCapacity'] = $this->autoCreatedCapacity;
        }
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }
        if (null !== $this->createdCapacity) {
            $res['CreatedCapacity'] = $this->createdCapacity;
        }
        if (null !== $this->createdInstances) {
            $res['CreatedInstances'] = $this->createdInstances;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destroyedCapacity) {
            $res['DestroyedCapacity'] = $this->destroyedCapacity;
        }
        if (null !== $this->destroyedInstances) {
            $res['DestroyedInstances'] = $this->destroyedInstances;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->lifecycleHookContext) {
            $res['LifecycleHookContext'] = null !== $this->lifecycleHookContext ? $this->lifecycleHookContext->toMap() : null;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->scalingActivityId) {
            $res['ScalingActivityId'] = $this->scalingActivityId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingInstanceNumber) {
            $res['ScalingInstanceNumber'] = $this->scalingInstanceNumber;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startedCapacity) {
            $res['StartedCapacity'] = $this->startedCapacity;
        }
        if (null !== $this->startedInstances) {
            $res['StartedInstances'] = $this->startedInstances;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->stoppedCapacity) {
            $res['StoppedCapacity'] = $this->stoppedCapacity;
        }
        if (null !== $this->stoppedInstances) {
            $res['StoppedInstances'] = $this->stoppedInstances;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->triggerSourceId) {
            $res['TriggerSourceId'] = $this->triggerSourceId;
        }
        if (null !== $this->triggerSourceType) {
            $res['TriggerSourceType'] = $this->triggerSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingActivities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityMetadata'])) {
            $model->activityMetadata = $map['ActivityMetadata'];
        }
        if (isset($map['AttachedCapacity'])) {
            $model->attachedCapacity = $map['AttachedCapacity'];
        }
        if (isset($map['AutoCreatedCapacity'])) {
            $model->autoCreatedCapacity = $map['AutoCreatedCapacity'];
        }
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }
        if (isset($map['CreatedCapacity'])) {
            $model->createdCapacity = $map['CreatedCapacity'];
        }
        if (isset($map['CreatedInstances'])) {
            if (!empty($map['CreatedInstances'])) {
                $model->createdInstances = $map['CreatedInstances'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestroyedCapacity'])) {
            $model->destroyedCapacity = $map['DestroyedCapacity'];
        }
        if (isset($map['DestroyedInstances'])) {
            if (!empty($map['DestroyedInstances'])) {
                $model->destroyedInstances = $map['DestroyedInstances'];
            }
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['LifecycleHookContext'])) {
            $model->lifecycleHookContext = lifecycleHookContext::fromMap($map['LifecycleHookContext']);
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ScalingActivityId'])) {
            $model->scalingActivityId = $map['ScalingActivityId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingInstanceNumber'])) {
            $model->scalingInstanceNumber = $map['ScalingInstanceNumber'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartedCapacity'])) {
            $model->startedCapacity = $map['StartedCapacity'];
        }
        if (isset($map['StartedInstances'])) {
            if (!empty($map['StartedInstances'])) {
                $model->startedInstances = $map['StartedInstances'];
            }
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['StoppedCapacity'])) {
            $model->stoppedCapacity = $map['StoppedCapacity'];
        }
        if (isset($map['StoppedInstances'])) {
            if (!empty($map['StoppedInstances'])) {
                $model->stoppedInstances = $map['StoppedInstances'];
            }
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['TriggerSourceId'])) {
            $model->triggerSourceId = $map['TriggerSourceId'];
        }
        if (isset($map['TriggerSourceType'])) {
            $model->triggerSourceType = $map['TriggerSourceType'];
        }

        return $model;
    }
}
