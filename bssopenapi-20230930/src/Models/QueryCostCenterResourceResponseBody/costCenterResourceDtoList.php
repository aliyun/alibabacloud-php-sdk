<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceResponseBody;

use AlibabaCloud\Dara\Model;

class costCenterResourceDtoList extends Model
{
    /**
     * @var string
     */
    public $addStrategy;

    /**
     * @var string
     */
    public $addStrategyName;

    /**
     * @var int
     */
    public $applicablePeriodNum;

    /**
     * @var string
     */
    public $apportionItemCode;

    /**
     * @var string
     */
    public $apportionItemName;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var string
     */
    public $costCenterCode;

    /**
     * @var string
     */
    public $costCenterCreateTime;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $costCenterUpdateTime;

    /**
     * @var int
     */
    public $financeUnitRuleVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $masterCommodityCode;

    /**
     * @var string
     */
    public $masterInstanceId;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var string
     */
    public $ownerAccountName;

    /**
     * @var int
     */
    public $parentCostCenterId;

    /**
     * @var string
     */
    public $pipCode;

    /**
     * @var string
     */
    public $pipName;

    /**
     * @var int
     */
    public $recentBillingMonth;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceNick;

    /**
     * @var string
     */
    public $resourceSource;

    /**
     * @var string
     */
    public $resourceTag;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceUpdateTime;

    /**
     * @var int
     */
    public $resourceUserId;

    /**
     * @var string
     */
    public $resourceUserName;

    /**
     * @var int
     */
    public $rootCostCenterId;

    /**
     * @var int
     */
    public $startBillingMonth;
    protected $_name = [
        'addStrategy' => 'AddStrategy',
        'addStrategyName' => 'AddStrategyName',
        'applicablePeriodNum' => 'ApplicablePeriodNum',
        'apportionItemCode' => 'ApportionItemCode',
        'apportionItemName' => 'ApportionItemName',
        'commodityCode' => 'CommodityCode',
        'commodityName' => 'CommodityName',
        'costCenterCode' => 'CostCenterCode',
        'costCenterCreateTime' => 'CostCenterCreateTime',
        'costCenterId' => 'CostCenterId',
        'costCenterName' => 'CostCenterName',
        'costCenterUpdateTime' => 'CostCenterUpdateTime',
        'financeUnitRuleVersion' => 'FinanceUnitRuleVersion',
        'instanceId' => 'InstanceId',
        'masterCommodityCode' => 'MasterCommodityCode',
        'masterInstanceId' => 'MasterInstanceId',
        'ownerAccountId' => 'OwnerAccountId',
        'ownerAccountName' => 'OwnerAccountName',
        'parentCostCenterId' => 'ParentCostCenterId',
        'pipCode' => 'PipCode',
        'pipName' => 'PipName',
        'recentBillingMonth' => 'RecentBillingMonth',
        'regionName' => 'RegionName',
        'regionNo' => 'RegionNo',
        'resourceGroup' => 'ResourceGroup',
        'resourceId' => 'ResourceId',
        'resourceNick' => 'ResourceNick',
        'resourceSource' => 'ResourceSource',
        'resourceTag' => 'ResourceTag',
        'resourceType' => 'ResourceType',
        'resourceUpdateTime' => 'ResourceUpdateTime',
        'resourceUserId' => 'ResourceUserId',
        'resourceUserName' => 'ResourceUserName',
        'rootCostCenterId' => 'RootCostCenterId',
        'startBillingMonth' => 'StartBillingMonth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addStrategy) {
            $res['AddStrategy'] = $this->addStrategy;
        }

        if (null !== $this->addStrategyName) {
            $res['AddStrategyName'] = $this->addStrategyName;
        }

        if (null !== $this->applicablePeriodNum) {
            $res['ApplicablePeriodNum'] = $this->applicablePeriodNum;
        }

        if (null !== $this->apportionItemCode) {
            $res['ApportionItemCode'] = $this->apportionItemCode;
        }

        if (null !== $this->apportionItemName) {
            $res['ApportionItemName'] = $this->apportionItemName;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }

        if (null !== $this->costCenterCode) {
            $res['CostCenterCode'] = $this->costCenterCode;
        }

        if (null !== $this->costCenterCreateTime) {
            $res['CostCenterCreateTime'] = $this->costCenterCreateTime;
        }

        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->costCenterName) {
            $res['CostCenterName'] = $this->costCenterName;
        }

        if (null !== $this->costCenterUpdateTime) {
            $res['CostCenterUpdateTime'] = $this->costCenterUpdateTime;
        }

        if (null !== $this->financeUnitRuleVersion) {
            $res['FinanceUnitRuleVersion'] = $this->financeUnitRuleVersion;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->masterCommodityCode) {
            $res['MasterCommodityCode'] = $this->masterCommodityCode;
        }

        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->ownerAccountName) {
            $res['OwnerAccountName'] = $this->ownerAccountName;
        }

        if (null !== $this->parentCostCenterId) {
            $res['ParentCostCenterId'] = $this->parentCostCenterId;
        }

        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
        }

        if (null !== $this->pipName) {
            $res['PipName'] = $this->pipName;
        }

        if (null !== $this->recentBillingMonth) {
            $res['RecentBillingMonth'] = $this->recentBillingMonth;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceNick) {
            $res['ResourceNick'] = $this->resourceNick;
        }

        if (null !== $this->resourceSource) {
            $res['ResourceSource'] = $this->resourceSource;
        }

        if (null !== $this->resourceTag) {
            $res['ResourceTag'] = $this->resourceTag;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resourceUpdateTime) {
            $res['ResourceUpdateTime'] = $this->resourceUpdateTime;
        }

        if (null !== $this->resourceUserId) {
            $res['ResourceUserId'] = $this->resourceUserId;
        }

        if (null !== $this->resourceUserName) {
            $res['ResourceUserName'] = $this->resourceUserName;
        }

        if (null !== $this->rootCostCenterId) {
            $res['RootCostCenterId'] = $this->rootCostCenterId;
        }

        if (null !== $this->startBillingMonth) {
            $res['StartBillingMonth'] = $this->startBillingMonth;
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
        if (isset($map['AddStrategy'])) {
            $model->addStrategy = $map['AddStrategy'];
        }

        if (isset($map['AddStrategyName'])) {
            $model->addStrategyName = $map['AddStrategyName'];
        }

        if (isset($map['ApplicablePeriodNum'])) {
            $model->applicablePeriodNum = $map['ApplicablePeriodNum'];
        }

        if (isset($map['ApportionItemCode'])) {
            $model->apportionItemCode = $map['ApportionItemCode'];
        }

        if (isset($map['ApportionItemName'])) {
            $model->apportionItemName = $map['ApportionItemName'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }

        if (isset($map['CostCenterCode'])) {
            $model->costCenterCode = $map['CostCenterCode'];
        }

        if (isset($map['CostCenterCreateTime'])) {
            $model->costCenterCreateTime = $map['CostCenterCreateTime'];
        }

        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }

        if (isset($map['CostCenterName'])) {
            $model->costCenterName = $map['CostCenterName'];
        }

        if (isset($map['CostCenterUpdateTime'])) {
            $model->costCenterUpdateTime = $map['CostCenterUpdateTime'];
        }

        if (isset($map['FinanceUnitRuleVersion'])) {
            $model->financeUnitRuleVersion = $map['FinanceUnitRuleVersion'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MasterCommodityCode'])) {
            $model->masterCommodityCode = $map['MasterCommodityCode'];
        }

        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['OwnerAccountName'])) {
            $model->ownerAccountName = $map['OwnerAccountName'];
        }

        if (isset($map['ParentCostCenterId'])) {
            $model->parentCostCenterId = $map['ParentCostCenterId'];
        }

        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
        }

        if (isset($map['PipName'])) {
            $model->pipName = $map['PipName'];
        }

        if (isset($map['RecentBillingMonth'])) {
            $model->recentBillingMonth = $map['RecentBillingMonth'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceNick'])) {
            $model->resourceNick = $map['ResourceNick'];
        }

        if (isset($map['ResourceSource'])) {
            $model->resourceSource = $map['ResourceSource'];
        }

        if (isset($map['ResourceTag'])) {
            $model->resourceTag = $map['ResourceTag'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ResourceUpdateTime'])) {
            $model->resourceUpdateTime = $map['ResourceUpdateTime'];
        }

        if (isset($map['ResourceUserId'])) {
            $model->resourceUserId = $map['ResourceUserId'];
        }

        if (isset($map['ResourceUserName'])) {
            $model->resourceUserName = $map['ResourceUserName'];
        }

        if (isset($map['RootCostCenterId'])) {
            $model->rootCostCenterId = $map['RootCostCenterId'];
        }

        if (isset($map['StartBillingMonth'])) {
            $model->startBillingMonth = $map['StartBillingMonth'];
        }

        return $model;
    }
}
