<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody\planDetails\assignedApprovers;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody\planDetails\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody\planDetails\tags;

class planDetails extends Model
{
    /**
     * @var assignedApprovers[]
     */
    public $assignedApprovers;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $ownerPrincipalId;

    /**
     * @var string
     */
    public $ownerPrincipalName;

    /**
     * @var string
     */
    public $ownerPrincipalType;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planType;

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
    public $provisionedProductId;

    /**
     * @var string
     */
    public $provisionedProductName;

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

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'assignedApprovers' => 'AssignedApprovers',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'operationType' => 'OperationType',
        'ownerPrincipalId' => 'OwnerPrincipalId',
        'ownerPrincipalName' => 'OwnerPrincipalName',
        'ownerPrincipalType' => 'OwnerPrincipalType',
        'parameters' => 'Parameters',
        'planId' => 'PlanId',
        'planName' => 'PlanName',
        'planType' => 'PlanType',
        'portfolioId' => 'PortfolioId',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
        'productVersionId' => 'ProductVersionId',
        'provisionedProductId' => 'ProvisionedProductId',
        'provisionedProductName' => 'ProvisionedProductName',
        'stackId' => 'StackId',
        'stackRegionId' => 'StackRegionId',
        'status' => 'Status',
        'statusMessage' => 'StatusMessage',
        'tags' => 'Tags',
        'uid' => 'Uid',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->assignedApprovers)) {
            Model::validateArray($this->assignedApprovers);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedApprovers) {
            if (\is_array($this->assignedApprovers)) {
                $res['AssignedApprovers'] = [];
                $n1 = 0;
                foreach ($this->assignedApprovers as $item1) {
                    $res['AssignedApprovers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->ownerPrincipalId) {
            $res['OwnerPrincipalId'] = $this->ownerPrincipalId;
        }

        if (null !== $this->ownerPrincipalName) {
            $res['OwnerPrincipalName'] = $this->ownerPrincipalName;
        }

        if (null !== $this->ownerPrincipalType) {
            $res['OwnerPrincipalType'] = $this->ownerPrincipalType;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
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

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }

        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
        }

        if (null !== $this->provisionedProductName) {
            $res['ProvisionedProductName'] = $this->provisionedProductName;
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AssignedApprovers'])) {
            if (!empty($map['AssignedApprovers'])) {
                $model->assignedApprovers = [];
                $n1 = 0;
                foreach ($map['AssignedApprovers'] as $item1) {
                    $model->assignedApprovers[$n1] = assignedApprovers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['OwnerPrincipalId'])) {
            $model->ownerPrincipalId = $map['OwnerPrincipalId'];
        }

        if (isset($map['OwnerPrincipalName'])) {
            $model->ownerPrincipalName = $map['OwnerPrincipalName'];
        }

        if (isset($map['OwnerPrincipalType'])) {
            $model->ownerPrincipalType = $map['OwnerPrincipalType'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
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

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }

        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
        }

        if (isset($map['ProvisionedProductName'])) {
            $model->provisionedProductName = $map['ProvisionedProductName'];
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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
