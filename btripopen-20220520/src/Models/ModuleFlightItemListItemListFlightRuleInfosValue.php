<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ModuleFlightItemListItemListFlightRuleInfosValue extends Model
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
        'baggageDesc'          => 'baggage_desc',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModuleFlightItemListItemListFlightRuleInfosValue
     */
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
