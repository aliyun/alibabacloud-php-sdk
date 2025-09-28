<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponseBody\data\sceneBillingList;

class data extends Model
{
    /**
     * @var string
     */
    public $amountSum;

    /**
     * @var sceneBillingList[]
     */
    public $sceneBillingList;
    protected $_name = [
        'amountSum' => 'AmountSum',
        'sceneBillingList' => 'SceneBillingList',
    ];

    public function validate()
    {
        if (\is_array($this->sceneBillingList)) {
            Model::validateArray($this->sceneBillingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amountSum) {
            $res['AmountSum'] = $this->amountSum;
        }

        if (null !== $this->sceneBillingList) {
            if (\is_array($this->sceneBillingList)) {
                $res['SceneBillingList'] = [];
                $n1 = 0;
                foreach ($this->sceneBillingList as $item1) {
                    $res['SceneBillingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AmountSum'])) {
            $model->amountSum = $map['AmountSum'];
        }

        if (isset($map['SceneBillingList'])) {
            if (!empty($map['SceneBillingList'])) {
                $model->sceneBillingList = [];
                $n1 = 0;
                foreach ($map['SceneBillingList'] as $item1) {
                    $model->sceneBillingList[$n1] = sceneBillingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
