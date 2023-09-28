<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductsResponseBody;

use AlibabaCloud\Tea\Model;

class provisionedProductDetails extends Model
{
    /**
     * @description The time when the product instance was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-05-23T09:46:27Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the task that was last run on the product instance.
     *
     * The task can be one of the following types:
     *
     *   LaunchProduct: a task that launches the product.
     *   UpdateProvisionedProduct: a task that updates the information about the product instance.
     *   TerminateProvisionedProduct: a task that terminates the product instance.
     *
     * @example task-bp1dmg242c****
     *
     * @var string
     */
    public $lastProvisioningTaskId;

    /**
     * @description The ID of the last task that was successfully run on the product instance.
     *
     * The task can be one of the following types:
     *
     *   LaunchProduct: a task that launches the product.
     *   UpdateProvisionedProduct: a task that updates the information about the product instance.
     *   TerminateProvisionedProduct: a task that terminates the product instance.
     *
     * @example task-bp1dmg242c****
     *
     * @var string
     */
    public $lastSuccessfulProvisioningTaskId;

    /**
     * @description The ID of the task that was last run.
     *
     * @example task-bp1dmg242c****
     *
     * @var string
     */
    public $lastTaskId;

    /**
     * @description The ID of the RAM entity to which the product instance belongs.
     *
     * @example 24477111603637****
     *
     * @var string
     */
    public $ownerPrincipalId;

    /**
     * @description The type of the Resource Access Management (RAM) entity to which the product instance belongs. Valid values:
     *
     *   RamUser: a RAM user
     *   RamRole: a RAM role
     *
     * @example RamUser
     *
     * @var string
     */
    public $ownerPrincipalType;

    /**
     * @description The ID of the product portfolio.
     *
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The ID of the product.
     *
     * @example prod-bp18r7q127****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The name of the product.
     *
     * @example DEMO-Create an ECS instance
     *
     * @var string
     */
    public $productName;

    /**
     * @description The ID of the product version.
     *
     * @example pv-bp15e79d26****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The name of the product version.
     *
     * @example 1.0
     *
     * @var string
     */
    public $productVersionName;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the product instance.
     *
     * @example acs:servicecatalog:cn-hangzhou:146611588617****:provisionedproduct/pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductArn;

    /**
     * @description The ID of the product instance.
     *
     * @example pp-bp1ddg1n2a****
     *
     * @var string
     */
    public $provisionedProductId;

    /**
     * @description The name of the product instance.
     *
     * @example DEMO-ECS instance
     *
     * @var string
     */
    public $provisionedProductName;

    /**
     * @description The type of the product instance.
     *
     * The value is fixed as RosStack, which indicates an ROS stack.
     * @example RosStack
     *
     * @var string
     */
    public $provisionedProductType;

    /**
     * @description The ID of the Resource Orchestration Service (ROS) stack.
     *
     * @example 137e31df-3754-40b4-be2f-c793ad84****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The ID of the region to which the ROS stack belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $stackRegionId;

    /**
     * @description The state of the product instance. Valid values:
     *
     *   Available: The product instance was available.
     *   UnderChange: The information about the product instance was being changed.
     *   Error: An exception occurred on the product instance.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The message that is returned for the status of the product instance.
     *
     * > This parameter is returned only when Error is returned for the Status parameter.
     * @example Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...
     *
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'createTime'                       => 'CreateTime',
        'lastProvisioningTaskId'           => 'LastProvisioningTaskId',
        'lastSuccessfulProvisioningTaskId' => 'LastSuccessfulProvisioningTaskId',
        'lastTaskId'                       => 'LastTaskId',
        'ownerPrincipalId'                 => 'OwnerPrincipalId',
        'ownerPrincipalType'               => 'OwnerPrincipalType',
        'portfolioId'                      => 'PortfolioId',
        'productId'                        => 'ProductId',
        'productName'                      => 'ProductName',
        'productVersionId'                 => 'ProductVersionId',
        'productVersionName'               => 'ProductVersionName',
        'provisionedProductArn'            => 'ProvisionedProductArn',
        'provisionedProductId'             => 'ProvisionedProductId',
        'provisionedProductName'           => 'ProvisionedProductName',
        'provisionedProductType'           => 'ProvisionedProductType',
        'stackId'                          => 'StackId',
        'stackRegionId'                    => 'StackRegionId',
        'status'                           => 'Status',
        'statusMessage'                    => 'StatusMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastProvisioningTaskId) {
            $res['LastProvisioningTaskId'] = $this->lastProvisioningTaskId;
        }
        if (null !== $this->lastSuccessfulProvisioningTaskId) {
            $res['LastSuccessfulProvisioningTaskId'] = $this->lastSuccessfulProvisioningTaskId;
        }
        if (null !== $this->lastTaskId) {
            $res['LastTaskId'] = $this->lastTaskId;
        }
        if (null !== $this->ownerPrincipalId) {
            $res['OwnerPrincipalId'] = $this->ownerPrincipalId;
        }
        if (null !== $this->ownerPrincipalType) {
            $res['OwnerPrincipalType'] = $this->ownerPrincipalType;
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->productVersionName) {
            $res['ProductVersionName'] = $this->productVersionName;
        }
        if (null !== $this->provisionedProductArn) {
            $res['ProvisionedProductArn'] = $this->provisionedProductArn;
        }
        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
        }
        if (null !== $this->provisionedProductName) {
            $res['ProvisionedProductName'] = $this->provisionedProductName;
        }
        if (null !== $this->provisionedProductType) {
            $res['ProvisionedProductType'] = $this->provisionedProductType;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackRegionId) {
            $res['StackRegionId'] = $this->stackRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return provisionedProductDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastProvisioningTaskId'])) {
            $model->lastProvisioningTaskId = $map['LastProvisioningTaskId'];
        }
        if (isset($map['LastSuccessfulProvisioningTaskId'])) {
            $model->lastSuccessfulProvisioningTaskId = $map['LastSuccessfulProvisioningTaskId'];
        }
        if (isset($map['LastTaskId'])) {
            $model->lastTaskId = $map['LastTaskId'];
        }
        if (isset($map['OwnerPrincipalId'])) {
            $model->ownerPrincipalId = $map['OwnerPrincipalId'];
        }
        if (isset($map['OwnerPrincipalType'])) {
            $model->ownerPrincipalType = $map['OwnerPrincipalType'];
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['ProductVersionName'])) {
            $model->productVersionName = $map['ProductVersionName'];
        }
        if (isset($map['ProvisionedProductArn'])) {
            $model->provisionedProductArn = $map['ProvisionedProductArn'];
        }
        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
        }
        if (isset($map['ProvisionedProductName'])) {
            $model->provisionedProductName = $map['ProvisionedProductName'];
        }
        if (isset($map['ProvisionedProductType'])) {
            $model->provisionedProductType = $map['ProvisionedProductType'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackRegionId'])) {
            $model->stackRegionId = $map['StackRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
