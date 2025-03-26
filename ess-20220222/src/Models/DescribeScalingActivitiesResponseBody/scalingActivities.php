<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody\scalingActivities\errorMessages;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody\scalingActivities\lifecycleHookContext;

class scalingActivities extends Model
{
    /**
     * @var string
     */
    public $activityMetadata;

    /**
     * @var string
     */
    public $attachedCapacity;

    /**
     * @var string
     */
    public $autoCreatedCapacity;

    /**
     * @var string
     */
    public $cause;

    /**
     * @var int
     */
    public $createdCapacity;

    /**
     * @var string[]
     */
    public $createdInstances;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $destroyedCapacity;

    /**
     * @var string[]
     */
    public $destroyedInstances;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var errorMessages[]
     */
    public $errorMessages;

    /**
     * @var string
     */
    public $instanceRefreshTaskId;

    /**
     * @var lifecycleHookContext
     */
    public $lifecycleHookContext;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $scalingActivityId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var int
     */
    public $scalingInstanceNumber;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $startedCapacity;

    /**
     * @var string[]
     */
    public $startedInstances;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusMessage;

    /**
     * @var int
     */
    public $stoppedCapacity;

    /**
     * @var string[]
     */
    public $stoppedInstances;

    /**
     * @var string
     */
    public $totalCapacity;

    /**
     * @var string
     */
    public $triggerSourceId;

    /**
     * @var string
     */
    public $triggerSourceType;
    protected $_name = [
        'activityMetadata' => 'ActivityMetadata',
        'attachedCapacity' => 'AttachedCapacity',
        'autoCreatedCapacity' => 'AutoCreatedCapacity',
        'cause' => 'Cause',
        'createdCapacity' => 'CreatedCapacity',
        'createdInstances' => 'CreatedInstances',
        'description' => 'Description',
        'destroyedCapacity' => 'DestroyedCapacity',
        'destroyedInstances' => 'DestroyedInstances',
        'detail' => 'Detail',
        'endTime' => 'EndTime',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'errorMessages' => 'ErrorMessages',
        'instanceRefreshTaskId' => 'InstanceRefreshTaskId',
        'lifecycleHookContext' => 'LifecycleHookContext',
        'progress' => 'Progress',
        'scalingActivityId' => 'ScalingActivityId',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingInstanceNumber' => 'ScalingInstanceNumber',
        'startTime' => 'StartTime',
        'startedCapacity' => 'StartedCapacity',
        'startedInstances' => 'StartedInstances',
        'statusCode' => 'StatusCode',
        'statusMessage' => 'StatusMessage',
        'stoppedCapacity' => 'StoppedCapacity',
        'stoppedInstances' => 'StoppedInstances',
        'totalCapacity' => 'TotalCapacity',
        'triggerSourceId' => 'TriggerSourceId',
        'triggerSourceType' => 'TriggerSourceType',
    ];

    public function validate()
    {
        if (\is_array($this->createdInstances)) {
            Model::validateArray($this->createdInstances);
        }
        if (\is_array($this->destroyedInstances)) {
            Model::validateArray($this->destroyedInstances);
        }
        if (\is_array($this->errorMessages)) {
            Model::validateArray($this->errorMessages);
        }
        if (null !== $this->lifecycleHookContext) {
            $this->lifecycleHookContext->validate();
        }
        if (\is_array($this->startedInstances)) {
            Model::validateArray($this->startedInstances);
        }
        if (\is_array($this->stoppedInstances)) {
            Model::validateArray($this->stoppedInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->createdInstances)) {
                $res['CreatedInstances'] = [];
                $n1 = 0;
                foreach ($this->createdInstances as $item1) {
                    $res['CreatedInstances'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destroyedCapacity) {
            $res['DestroyedCapacity'] = $this->destroyedCapacity;
        }

        if (null !== $this->destroyedInstances) {
            if (\is_array($this->destroyedInstances)) {
                $res['DestroyedInstances'] = [];
                $n1 = 0;
                foreach ($this->destroyedInstances as $item1) {
                    $res['DestroyedInstances'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->errorMessages) {
            if (\is_array($this->errorMessages)) {
                $res['ErrorMessages'] = [];
                $n1 = 0;
                foreach ($this->errorMessages as $item1) {
                    $res['ErrorMessages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceRefreshTaskId) {
            $res['InstanceRefreshTaskId'] = $this->instanceRefreshTaskId;
        }

        if (null !== $this->lifecycleHookContext) {
            $res['LifecycleHookContext'] = null !== $this->lifecycleHookContext ? $this->lifecycleHookContext->toArray($noStream) : $this->lifecycleHookContext;
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
            if (\is_array($this->startedInstances)) {
                $res['StartedInstances'] = [];
                $n1 = 0;
                foreach ($this->startedInstances as $item1) {
                    $res['StartedInstances'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->stoppedInstances)) {
                $res['StoppedInstances'] = [];
                $n1 = 0;
                foreach ($this->stoppedInstances as $item1) {
                    $res['StoppedInstances'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->createdInstances = [];
                $n1 = 0;
                foreach ($map['CreatedInstances'] as $item1) {
                    $model->createdInstances[$n1++] = $item1;
                }
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
                $model->destroyedInstances = [];
                $n1 = 0;
                foreach ($map['DestroyedInstances'] as $item1) {
                    $model->destroyedInstances[$n1++] = $item1;
                }
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

        if (isset($map['ErrorMessages'])) {
            if (!empty($map['ErrorMessages'])) {
                $model->errorMessages = [];
                $n1 = 0;
                foreach ($map['ErrorMessages'] as $item1) {
                    $model->errorMessages[$n1++] = errorMessages::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceRefreshTaskId'])) {
            $model->instanceRefreshTaskId = $map['InstanceRefreshTaskId'];
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
                $model->startedInstances = [];
                $n1 = 0;
                foreach ($map['StartedInstances'] as $item1) {
                    $model->startedInstances[$n1++] = $item1;
                }
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
                $model->stoppedInstances = [];
                $n1 = 0;
                foreach ($map['StoppedInstances'] as $item1) {
                    $model->stoppedInstances[$n1++] = $item1;
                }
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
