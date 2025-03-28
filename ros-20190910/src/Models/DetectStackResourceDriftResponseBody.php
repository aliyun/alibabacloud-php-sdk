<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\DetectStackResourceDriftResponseBody\propertyDifferences;

class DetectStackResourceDriftResponseBody extends Model
{
    /**
     * @var string
     */
    public $actualProperties;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var string
     */
    public $expectedProperties;

    /**
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $physicalResourceId;

    /**
     * @var propertyDifferences[]
     */
    public $propertyDifferences;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceDriftStatus;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'actualProperties' => 'ActualProperties',
        'driftDetectionTime' => 'DriftDetectionTime',
        'expectedProperties' => 'ExpectedProperties',
        'logicalResourceId' => 'LogicalResourceId',
        'physicalResourceId' => 'PhysicalResourceId',
        'propertyDifferences' => 'PropertyDifferences',
        'requestId' => 'RequestId',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'resourceType' => 'ResourceType',
        'stackId' => 'StackId',
    ];

    public function validate()
    {
        if (\is_array($this->propertyDifferences)) {
            Model::validateArray($this->propertyDifferences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->propertyDifferences)) {
                $res['PropertyDifferences'] = [];
                $n1 = 0;
                foreach ($this->propertyDifferences as $item1) {
                    $res['PropertyDifferences'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PropertyDifferences'] as $item1) {
                    $model->propertyDifferences[$n1++] = propertyDifferences::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
