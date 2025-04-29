<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ModuleFlightItemListBestPriceItemFlightRuleInfosValue extends Model
{
    /**
     * @var string
     */
    public $refundChangeRuleDesc;

    /**
     * @var string
     */
    public $baggageDesc;
    protected $_name = [
        'refundChangeRuleDesc' => 'refund_change_rule_desc',
        'baggageDesc' => 'baggage_desc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refundChangeRuleDesc) {
            $res['refund_change_rule_desc'] = $this->refundChangeRuleDesc;
        }

        if (null !== $this->baggageDesc) {
            $res['baggage_desc'] = $this->baggageDesc;
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
        if (isset($map['refund_change_rule_desc'])) {
            $model->refundChangeRuleDesc = $map['refund_change_rule_desc'];
        }

        if (isset($map['baggage_desc'])) {
            $model->baggageDesc = $map['baggage_desc'];
        }

        return $model;
    }
}
