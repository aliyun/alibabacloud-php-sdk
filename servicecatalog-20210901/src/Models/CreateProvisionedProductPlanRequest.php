<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProvisionedProductPlanRequest\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProvisionedProductPlanRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateProvisionedProductPlanRequest extends Model
{
    /**
     * @description The description of the plan.
     *
     * The value must be 1 to 128 characters in length.
     * @example Create an ECS instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the operation that you want the plan to perform. Valid values:
     *
     *   LaunchProduct: launches the product. This is the default value.
     *   UpdateProvisionedProduct: updates the information about the product instance.
     *   TerminateProvisionedProduct: terminates the product instance.
     *
     * @example LaunchProduct
     *
     * @var string
     */
    public $operationType;

    /**
     * @description An array that consists of the parameters in the template.
     *
     * > If you specify Parameters, you must specify ParameterKey and ParameterValue.
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The plan name.
     *
     * The value must be 1 to 128 characters in length.
     * @example DEMO-ECS instance
     *
     * @var string
     */
    public $planName;

    /**
     * @description The plan type.
     *
     * Set the value to Ros, which specifies Resource Orchestration Service (ROS).
     * @example Ros
     *
     * @var string
     */
    public $planType;

    /**
     * @description The product portfolio ID.
     *
     * > If PortfolioId is not required, you do not need to specify PortfolioId. If PortfolioId is required, you must specify PortfolioId. For more information about how to obtain the value of PortfolioId, see [ListLaunchOptions](~~ListLaunchOptions~~).
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The product ID.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The product version ID.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The product instance name.
     *
     * The value must be 1 to 128 characters in length.
     * @example DEMO-ECS instance
     *
     * @var string
     */
    public $provisionedProductName;

    /**
     * @description The ID of the region to which the ROS stack belongs.
     *
     * For more information about how to obtain the regions that are supported by ROS, see [DescribeRegions](~~131035~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $stackRegionId;

    /**
     * @description An array that consists of custom tags.
     *
     * >
     *   If you specify Tags, you must specify Tags.N.Key and Tags.N.Value.
     *   The tag of a stack is propagated to each resource that supports the tag feature in the stack.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'description'            => 'Description',
        'operationType'          => 'OperationType',
        'parameters'             => 'Parameters',
        'planName'               => 'PlanName',
        'planType'               => 'PlanType',
        'portfolioId'            => 'PortfolioId',
        'productId'              => 'ProductId',
        'productVersionId'       => 'ProductVersionId',
        'provisionedProductName' => 'ProvisionedProductName',
        'stackRegionId'          => 'StackRegionId',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->provisionedProductName) {
            $res['ProvisionedProductName'] = $this->provisionedProductName;
        }
        if (null !== $this->stackRegionId) {
            $res['StackRegionId'] = $this->stackRegionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProvisionedProductPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['ProvisionedProductName'])) {
            $model->provisionedProductName = $map['ProvisionedProductName'];
        }
        if (isset($map['StackRegionId'])) {
            $model->stackRegionId = $map['StackRegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
