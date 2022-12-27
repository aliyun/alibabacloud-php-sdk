<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponseBody;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyBillingPublicResponseBody\data\sceneBillingList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1234
     *
     * @var string
     */
    public $amountSum;

    /**
     * @var sceneBillingList[]
     */
    public $sceneBillingList;
    protected $_name = [
        'amountSum'        => 'AmountSum',
        'sceneBillingList' => 'SceneBillingList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amountSum) {
            $res['AmountSum'] = $this->amountSum;
        }
        if (null !== $this->sceneBillingList) {
            $res['SceneBillingList'] = [];
            if (null !== $this->sceneBillingList && \is_array($this->sceneBillingList)) {
                $n = 0;
                foreach ($this->sceneBillingList as $item) {
                    $res['SceneBillingList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AmountSum'])) {
            $model->amountSum = $map['AmountSum'];
        }
        if (isset($map['SceneBillingList'])) {
            if (!empty($map['SceneBillingList'])) {
                $model->sceneBillingList = [];
                $n                       = 0;
                foreach ($map['SceneBillingList'] as $item) {
                    $model->sceneBillingList[$n++] = null !== $item ? sceneBillingList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
