<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceRequest\namespaceResourceSpecs;

class ConvertInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAutoRenew;

    /**
     * @var namespaceResourceSpecs[]
     */
    public $namespaceResourceSpecs;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $region;

    /**
     * @var bool
     */
    public $usePromotionCode;
    protected $_name = [
        'duration' => 'Duration',
        'instanceId' => 'InstanceId',
        'isAutoRenew' => 'IsAutoRenew',
        'namespaceResourceSpecs' => 'NamespaceResourceSpecs',
        'pricingCycle' => 'PricingCycle',
        'promotionCode' => 'PromotionCode',
        'region' => 'Region',
        'usePromotionCode' => 'UsePromotionCode',
    ];

    public function validate()
    {
        if (\is_array($this->namespaceResourceSpecs)) {
            Model::validateArray($this->namespaceResourceSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isAutoRenew) {
            $res['IsAutoRenew'] = $this->isAutoRenew;
        }

        if (null !== $this->namespaceResourceSpecs) {
            if (\is_array($this->namespaceResourceSpecs)) {
                $res['NamespaceResourceSpecs'] = [];
                $n1 = 0;
                foreach ($this->namespaceResourceSpecs as $item1) {
                    $res['NamespaceResourceSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->usePromotionCode) {
            $res['UsePromotionCode'] = $this->usePromotionCode;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsAutoRenew'])) {
            $model->isAutoRenew = $map['IsAutoRenew'];
        }

        if (isset($map['NamespaceResourceSpecs'])) {
            if (!empty($map['NamespaceResourceSpecs'])) {
                $model->namespaceResourceSpecs = [];
                $n1 = 0;
                foreach ($map['NamespaceResourceSpecs'] as $item1) {
                    $model->namespaceResourceSpecs[$n1] = namespaceResourceSpecs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['UsePromotionCode'])) {
            $model->usePromotionCode = $map['UsePromotionCode'];
        }

        return $model;
    }
}
