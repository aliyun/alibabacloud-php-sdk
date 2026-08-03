<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data\cancellationPolicies\penalties;

class cancellationPolicies extends Model
{
    /**
     * @var penalties[]
     */
    public $penalties;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'penalties' => 'Penalties',
        'policyType' => 'PolicyType',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->penalties)) {
            Model::validateArray($this->penalties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->penalties) {
            if (\is_array($this->penalties)) {
                $res['Penalties'] = [];
                $n1 = 0;
                foreach ($this->penalties as $item1) {
                    $res['Penalties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
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
        if (isset($map['Penalties'])) {
            if (!empty($map['Penalties'])) {
                $model->penalties = [];
                $n1 = 0;
                foreach ($map['Penalties'] as $item1) {
                    $model->penalties[$n1] = penalties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
