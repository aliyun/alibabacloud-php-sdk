<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingOverviewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingOverviewResponseBody\data\groups;

class data extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var string
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $totalAmount;
    protected $_name = [
        'currency' => 'currency',
        'groups' => 'groups',
        'pretaxAmount' => 'pretaxAmount',
        'taxAmount' => 'taxAmount',
        'totalAmount' => 'totalAmount',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pretaxAmount) {
            $res['pretaxAmount'] = $this->pretaxAmount;
        }

        if (null !== $this->taxAmount) {
            $res['taxAmount'] = $this->taxAmount;
        }

        if (null !== $this->totalAmount) {
            $res['totalAmount'] = $this->totalAmount;
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
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pretaxAmount'])) {
            $model->pretaxAmount = $map['pretaxAmount'];
        }

        if (isset($map['taxAmount'])) {
            $model->taxAmount = $map['taxAmount'];
        }

        if (isset($map['totalAmount'])) {
            $model->totalAmount = $map['totalAmount'];
        }

        return $model;
    }
}
