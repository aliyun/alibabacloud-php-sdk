<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ValidatePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ValidatePriceResponseBody\data\cancellationPolicies;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ValidatePriceResponseBody\data\pricing;

class data extends Model
{
    /**
     * @var cancellationPolicies[]
     */
    public $cancellationPolicies;

    /**
     * @var string
     */
    public $itemOfferId;

    /**
     * @var pricing
     */
    public $pricing;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'cancellationPolicies' => 'CancellationPolicies',
        'itemOfferId' => 'ItemOfferId',
        'pricing' => 'Pricing',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->cancellationPolicies)) {
            Model::validateArray($this->cancellationPolicies);
        }
        if (null !== $this->pricing) {
            $this->pricing->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancellationPolicies) {
            if (\is_array($this->cancellationPolicies)) {
                $res['CancellationPolicies'] = [];
                $n1 = 0;
                foreach ($this->cancellationPolicies as $item1) {
                    $res['CancellationPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemOfferId) {
            $res['ItemOfferId'] = $this->itemOfferId;
        }

        if (null !== $this->pricing) {
            $res['Pricing'] = null !== $this->pricing ? $this->pricing->toArray($noStream) : $this->pricing;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['CancellationPolicies'])) {
            if (!empty($map['CancellationPolicies'])) {
                $model->cancellationPolicies = [];
                $n1 = 0;
                foreach ($map['CancellationPolicies'] as $item1) {
                    $model->cancellationPolicies[$n1] = cancellationPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemOfferId'])) {
            $model->itemOfferId = $map['ItemOfferId'];
        }

        if (isset($map['Pricing'])) {
            $model->pricing = pricing::fromMap($map['Pricing']);
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
