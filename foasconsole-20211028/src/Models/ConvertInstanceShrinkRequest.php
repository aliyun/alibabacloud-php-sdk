<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class ConvertInstanceShrinkRequest extends Model
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
     * @var string
     */
    public $namespaceResourceSpecsShrink;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'duration' => 'Duration',
        'instanceId' => 'InstanceId',
        'isAutoRenew' => 'IsAutoRenew',
        'namespaceResourceSpecsShrink' => 'NamespaceResourceSpecs',
        'pricingCycle' => 'PricingCycle',
        'region' => 'Region',
    ];

    public function validate()
    {
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

        if (null !== $this->namespaceResourceSpecsShrink) {
            $res['NamespaceResourceSpecs'] = $this->namespaceResourceSpecsShrink;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
            $model->namespaceResourceSpecsShrink = $map['NamespaceResourceSpecs'];
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
