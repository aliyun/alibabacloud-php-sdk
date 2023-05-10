<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedResourceTypes\stackOperationRisk;
use AlibabaCloud\Tea\Model;

class supportedResourceTypes extends Model
{
    /**
     * @description Indicates whether the resource scope can be specified by tag, resource group, or resource. Valid values:
     *
     * - false
     * @var string[]
     */
    public $customTag;

    /**
     * @description Indicates whether the resource scope can be specified by resource group. Valid values:
     *
     * - false
     * @var string[]
     */
    public $estimateCost;

    /**
     * @description Details of the resource cleaner feature.
     *
     * @var string[]
     */
    public $resourceGroup;

    /**
     * @description The resource type that can be cleaned up.
     *
     * @var stackOperationRisk
     */
    public $stackOperationRisk;

    /**
     * @description The resource types that support the scenario feature.
     *
     * @var string[]
     */
    public $systemTag;
    protected $_name = [
        'customTag'          => 'CustomTag',
        'estimateCost'       => 'EstimateCost',
        'resourceGroup'      => 'ResourceGroup',
        'stackOperationRisk' => 'StackOperationRisk',
        'systemTag'          => 'SystemTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTag) {
            $res['CustomTag'] = $this->customTag;
        }
        if (null !== $this->estimateCost) {
            $res['EstimateCost'] = $this->estimateCost;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->stackOperationRisk) {
            $res['StackOperationRisk'] = null !== $this->stackOperationRisk ? $this->stackOperationRisk->toMap() : null;
        }
        if (null !== $this->systemTag) {
            $res['SystemTag'] = $this->systemTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTag'])) {
            if (!empty($map['CustomTag'])) {
                $model->customTag = $map['CustomTag'];
            }
        }
        if (isset($map['EstimateCost'])) {
            if (!empty($map['EstimateCost'])) {
                $model->estimateCost = $map['EstimateCost'];
            }
        }
        if (isset($map['ResourceGroup'])) {
            if (!empty($map['ResourceGroup'])) {
                $model->resourceGroup = $map['ResourceGroup'];
            }
        }
        if (isset($map['StackOperationRisk'])) {
            $model->stackOperationRisk = stackOperationRisk::fromMap($map['StackOperationRisk']);
        }
        if (isset($map['SystemTag'])) {
            if (!empty($map['SystemTag'])) {
                $model->systemTag = $map['SystemTag'];
            }
        }

        return $model;
    }
}
