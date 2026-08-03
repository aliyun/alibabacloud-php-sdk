<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms\offers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms\offers\cancelPolicy\penalties;

class cancelPolicy extends Model
{
    /**
     * @var string
     */
    public $policyType;

    /**
     * @var penalties[]
     */
    public $penalties;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'policyType' => 'PolicyType',
        'penalties' => 'Penalties',
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
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

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
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

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

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
