<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductsResponseBody;

use AlibabaCloud\Dara\Model;

class provisionedProductDetails extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $lastProvisioningTaskId;

    /**
     * @var string
     */
    public $lastSuccessfulProvisioningTaskId;

    /**
     * @var string
     */
    public $lastTaskId;

    /**
     * @var string
     */
    public $ownerPrincipalId;

    /**
     * @var string
     */
    public $ownerPrincipalType;

    /**
     * @var string
     */
    public $portfolioId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productVersionId;

    /**
     * @var string
     */
    public $productVersionName;

    /**
     * @var string
     */
    public $provisionedProductArn;

    /**
     * @var string
     */
    public $provisionedProductId;

    /**
     * @var string
     */
    public $provisionedProductName;

    /**
     * @var string
     */
    public $provisionedProductType;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $stackRegionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'createTime' => 'CreateTime',
        'lastProvisioningTaskId' => 'LastProvisioningTaskId',
        'lastSuccessfulProvisioningTaskId' => 'LastSuccessfulProvisioningTaskId',
        'lastTaskId' => 'LastTaskId',
        'ownerPrincipalId' => 'OwnerPrincipalId',
        'ownerPrincipalType' => 'OwnerPrincipalType',
        'portfolioId' => 'PortfolioId',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
        'productVersionId' => 'ProductVersionId',
        'productVersionName' => 'ProductVersionName',
        'provisionedProductArn' => 'ProvisionedProductArn',
        'provisionedProductId' => 'ProvisionedProductId',
        'provisionedProductName' => 'ProvisionedProductName',
        'provisionedProductType' => 'ProvisionedProductType',
        'stackId' => 'StackId',
        'stackRegionId' => 'StackRegionId',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
