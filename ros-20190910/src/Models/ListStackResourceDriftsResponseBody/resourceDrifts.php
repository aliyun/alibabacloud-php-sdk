<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourceDriftsResponseBody\resourceDrifts\propertyDifferences;
use AlibabaCloud\Tea\Model;

class resourceDrifts extends Model
{
    /**
     * @description The actual resource properties in JSON format.
     *
     * @example {"ScalingRuleName": "test1"}
     *
     * @var string
     */
    public $actualProperties;

    /**
     * @description The time when the resource drift detection operation was initiated.
     *
     * @example 2020-02-27T07:47:47
     *
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @description The resource properties as defined in the template, in JSON format.
     *
     * @example {"ScalingRuleName": "test2"}
     *
     * @var string
     */
    public $expectedProperties;

    /**
     * @description The logical ID of the resource as defined in the template.
     *
     * @example ScalingRule
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @description The physical ID of the resource.
     *
     * @example asr-2ze4zzc3kf9yz1kd****
     *
     * @var string
     */
    public $physicalResourceId;

    /**
     * @description The property differences of the resource.
     *
     * @var propertyDifferences[]
     */
    public $propertyDifferences;

    /**
     * @description The drift status of the resource. Valid values:
     *
     *   DELETED: The actual configuration of the resource differs from its expected template configuration because the resource had been deleted.
     *   MODIFIED: The actual configuration of the resource differs from its expected template configuration.
     *   NOT_CHECKED: ROS has not checked whether the actual configuration of the resource differs from its expected template configuration.
     *   IN_SYNC: The actual configuration of the resource matches its expected template configuration.
     *
     * @example MODIFIED
     *
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @description The type of the resource.
     *
     * @example ALIYUN::ESS::ScalingRule
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the stack.
     *
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'actualProperties'    => 'ActualProperties',
        'driftDetectionTime'  => 'DriftDetectionTime',
        'expectedProperties'  => 'ExpectedProperties',
        'logicalResourceId'   => 'LogicalResourceId',
        'physicalResourceId'  => 'PhysicalResourceId',
        'propertyDifferences' => 'PropertyDifferences',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'resourceType'        => 'ResourceType',
        'stackId'             => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualProperties) {
            $res['ActualProperties'] = $this->actualProperties;
        }
        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }
        if (null !== $this->expectedProperties) {
            $res['ExpectedProperties'] = $this->expectedProperties;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->propertyDifferences) {
            $res['PropertyDifferences'] = [];
            if (null !== $this->propertyDifferences && \is_array($this->propertyDifferences)) {
                $n = 0;
                foreach ($this->propertyDifferences as $item) {
                    $res['PropertyDifferences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceDriftStatus) {
            $res['ResourceDriftStatus'] = $this->resourceDriftStatus;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDrifts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualProperties'])) {
            $model->actualProperties = $map['ActualProperties'];
        }
        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }
        if (isset($map['ExpectedProperties'])) {
            $model->expectedProperties = $map['ExpectedProperties'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['PropertyDifferences'])) {
            if (!empty($map['PropertyDifferences'])) {
                $model->propertyDifferences = [];
                $n                          = 0;
                foreach ($map['PropertyDifferences'] as $item) {
                    $model->propertyDifferences[$n++] = null !== $item ? propertyDifferences::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceDriftStatus'])) {
            $model->resourceDriftStatus = $map['ResourceDriftStatus'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
