<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsResponseBody\resources\resourceProperties;

class resources extends Model
{
    /**
     * @var string
     */
    public $complianceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceClassification;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var resourceProperties[]
     */
    public $resourceProperties;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'regionId' => 'RegionId',
        'resourceClassification' => 'ResourceClassification',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceProperties' => 'ResourceProperties',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->resourceProperties)) {
            Model::validateArray($this->resourceProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceClassification) {
            $res['ResourceClassification'] = $this->resourceClassification;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceProperties) {
            if (\is_array($this->resourceProperties)) {
                $res['ResourceProperties'] = [];
                $n1 = 0;
                foreach ($this->resourceProperties as $item1) {
                    $res['ResourceProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceClassification'])) {
            $model->resourceClassification = $map['ResourceClassification'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceProperties'])) {
            if (!empty($map['ResourceProperties'])) {
                $model->resourceProperties = [];
                $n1 = 0;
                foreach ($map['ResourceProperties'] as $item1) {
                    $model->resourceProperties[$n1] = resourceProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
