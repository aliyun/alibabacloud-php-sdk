<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem\flightRuleInfoList;

use AlibabaCloud\Tea\Model;

class flightRuleInfo extends Model
{
    /**
     * @var string
     */
    public $baggageDesc;

    /**
     * @var string
     */
    public $refundChangeRuleDesc;
    protected $_name = [
        'baggageDesc'          => 'baggage_desc',
        'refundChangeRuleDesc' => 'refund_change_rule_desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageDesc) {
            $res['baggage_desc'] = $this->baggageDesc;
        }
        if (null !== $this->refundChangeRuleDesc) {
            $res['refund_change_rule_desc'] = $this->refundChangeRuleDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flightRuleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_desc'])) {
            $model->baggageDesc = $map['baggage_desc'];
        }
        if (isset($map['refund_change_rule_desc'])) {
            $model->refundChangeRuleDesc = $map['refund_change_rule_desc'];
        }

        return $model;
    }
}
