<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceRequest\namespaceResourceSpecs;
use AlibabaCloud\Tea\Model;

class QueryConvertInstancePriceRequest extends Model
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
    public $region;
    protected $_name = [
        'duration'               => 'Duration',
        'instanceId'             => 'InstanceId',
        'isAutoRenew'            => 'IsAutoRenew',
        'namespaceResourceSpecs' => 'NamespaceResourceSpecs',
        'pricingCycle'           => 'PricingCycle',
        'region'                 => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['NamespaceResourceSpecs'] = [];
            if (null !== $this->namespaceResourceSpecs && \is_array($this->namespaceResourceSpecs)) {
                $n = 0;
                foreach ($this->namespaceResourceSpecs as $item) {
                    $res['NamespaceResourceSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConvertInstancePriceRequest
     */
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
                $n                             = 0;
                foreach ($map['NamespaceResourceSpecs'] as $item) {
                    $model->namespaceResourceSpecs[$n++] = null !== $item ? namespaceResourceSpecs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
