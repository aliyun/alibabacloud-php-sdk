<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\promDetailList;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\ruleIds;

class subOrder extends Model
{
    /**
     * @var bool
     */
    public $contractActivity;

    /**
     * @var depreciateInfo
     */
    public $depreciateInfo;

    /**
     * @var string
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isContractActivity;

    /**
     * @var moduleInstance
     */
    public $moduleInstance;

    /**
     * @var optionalPromotions
     */
    public $optionalPromotions;

    /**
     * @var string
     */
    public $originalAmount;

    /**
     * @var promDetailList
     */
    public $promDetailList;

    /**
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @var int
     */
    public $standDiscountPrice;

    /**
     * @var int
     */
    public $standPrice;

    /**
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'contractActivity' => 'ContractActivity',
        'depreciateInfo' => 'DepreciateInfo',
        'discountAmount' => 'DiscountAmount',
        'instanceId' => 'InstanceId',
        'isContractActivity' => 'IsContractActivity',
        'moduleInstance' => 'ModuleInstance',
        'optionalPromotions' => 'OptionalPromotions',
        'originalAmount' => 'OriginalAmount',
        'promDetailList' => 'PromDetailList',
        'ruleIds' => 'RuleIds',
        'standDiscountPrice' => 'StandDiscountPrice',
        'standPrice' => 'StandPrice',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate()
    {
        if (null !== $this->depreciateInfo) {
            $this->depreciateInfo->validate();
        }
        if (null !== $this->moduleInstance) {
            $this->moduleInstance->validate();
        }
        if (null !== $this->optionalPromotions) {
            $this->optionalPromotions->validate();
        }
        if (null !== $this->promDetailList) {
            $this->promDetailList->validate();
        }
        if (null !== $this->ruleIds) {
            $this->ruleIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contractActivity) {
            $res['ContractActivity'] = $this->contractActivity;
        }

        if (null !== $this->depreciateInfo) {
            $res['DepreciateInfo'] = null !== $this->depreciateInfo ? $this->depreciateInfo->toArray($noStream) : $this->depreciateInfo;
        }

        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isContractActivity) {
            $res['IsContractActivity'] = $this->isContractActivity;
        }

        if (null !== $this->moduleInstance) {
            $res['ModuleInstance'] = null !== $this->moduleInstance ? $this->moduleInstance->toArray($noStream) : $this->moduleInstance;
        }

        if (null !== $this->optionalPromotions) {
            $res['OptionalPromotions'] = null !== $this->optionalPromotions ? $this->optionalPromotions->toArray($noStream) : $this->optionalPromotions;
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->promDetailList) {
            $res['PromDetailList'] = null !== $this->promDetailList ? $this->promDetailList->toArray($noStream) : $this->promDetailList;
        }

        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toArray($noStream) : $this->ruleIds;
        }

        if (null !== $this->standDiscountPrice) {
            $res['StandDiscountPrice'] = $this->standDiscountPrice;
        }

        if (null !== $this->standPrice) {
            $res['StandPrice'] = $this->standPrice;
        }

        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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
        if (isset($map['ContractActivity'])) {
            $model->contractActivity = $map['ContractActivity'];
        }

        if (isset($map['DepreciateInfo'])) {
            $model->depreciateInfo = depreciateInfo::fromMap($map['DepreciateInfo']);
        }

        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsContractActivity'])) {
            $model->isContractActivity = $map['IsContractActivity'];
        }

        if (isset($map['ModuleInstance'])) {
            $model->moduleInstance = moduleInstance::fromMap($map['ModuleInstance']);
        }

        if (isset($map['OptionalPromotions'])) {
            $model->optionalPromotions = optionalPromotions::fromMap($map['OptionalPromotions']);
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['PromDetailList'])) {
            $model->promDetailList = promDetailList::fromMap($map['PromDetailList']);
        }

        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }

        if (isset($map['StandDiscountPrice'])) {
            $model->standDiscountPrice = $map['StandDiscountPrice'];
        }

        if (isset($map['StandPrice'])) {
            $model->standPrice = $map['StandPrice'];
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
