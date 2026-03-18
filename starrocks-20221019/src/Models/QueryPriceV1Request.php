<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryPriceV1Request\agentNodeGroup;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryPriceV1Request\backendNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryPriceV1Request\frontendNodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\QueryPriceV1Request\observerNodeGroups;

class QueryPriceV1Request extends Model
{
    /**
     * @var agentNodeGroup
     */
    public $agentNodeGroup;

    /**
     * @var backendNodeGroups[]
     */
    public $backendNodeGroups;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var frontendNodeGroups[]
     */
    public $frontendNodeGroups;

    /**
     * @var observerNodeGroups[]
     */
    public $observerNodeGroups;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $runMode;
    protected $_name = [
        'agentNodeGroup' => 'AgentNodeGroup',
        'backendNodeGroups' => 'BackendNodeGroups',
        'duration' => 'Duration',
        'frontendNodeGroups' => 'FrontendNodeGroups',
        'observerNodeGroups' => 'ObserverNodeGroups',
        'packageType' => 'PackageType',
        'payType' => 'PayType',
        'pricingCycle' => 'PricingCycle',
        'promotionOptionNo' => 'PromotionOptionNo',
        'regionId' => 'RegionId',
        'runMode' => 'RunMode',
    ];

    public function validate()
    {
        if (null !== $this->agentNodeGroup) {
            $this->agentNodeGroup->validate();
        }
        if (\is_array($this->backendNodeGroups)) {
            Model::validateArray($this->backendNodeGroups);
        }
        if (\is_array($this->frontendNodeGroups)) {
            Model::validateArray($this->frontendNodeGroups);
        }
        if (\is_array($this->observerNodeGroups)) {
            Model::validateArray($this->observerNodeGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentNodeGroup) {
            $res['AgentNodeGroup'] = null !== $this->agentNodeGroup ? $this->agentNodeGroup->toArray($noStream) : $this->agentNodeGroup;
        }

        if (null !== $this->backendNodeGroups) {
            if (\is_array($this->backendNodeGroups)) {
                $res['BackendNodeGroups'] = [];
                $n1 = 0;
                foreach ($this->backendNodeGroups as $item1) {
                    $res['BackendNodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->frontendNodeGroups) {
            if (\is_array($this->frontendNodeGroups)) {
                $res['FrontendNodeGroups'] = [];
                $n1 = 0;
                foreach ($this->frontendNodeGroups as $item1) {
                    $res['FrontendNodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->observerNodeGroups) {
            if (\is_array($this->observerNodeGroups)) {
                $res['ObserverNodeGroups'] = [];
                $n1 = 0;
                foreach ($this->observerNodeGroups as $item1) {
                    $res['ObserverNodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
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
        if (isset($map['AgentNodeGroup'])) {
            $model->agentNodeGroup = agentNodeGroup::fromMap($map['AgentNodeGroup']);
        }

        if (isset($map['BackendNodeGroups'])) {
            if (!empty($map['BackendNodeGroups'])) {
                $model->backendNodeGroups = [];
                $n1 = 0;
                foreach ($map['BackendNodeGroups'] as $item1) {
                    $model->backendNodeGroups[$n1] = backendNodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FrontendNodeGroups'])) {
            if (!empty($map['FrontendNodeGroups'])) {
                $model->frontendNodeGroups = [];
                $n1 = 0;
                foreach ($map['FrontendNodeGroups'] as $item1) {
                    $model->frontendNodeGroups[$n1] = frontendNodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ObserverNodeGroups'])) {
            if (!empty($map['ObserverNodeGroups'])) {
                $model->observerNodeGroups = [];
                $n1 = 0;
                foreach ($map['ObserverNodeGroups'] as $item1) {
                    $model->observerNodeGroups[$n1] = observerNodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        return $model;
    }
}
