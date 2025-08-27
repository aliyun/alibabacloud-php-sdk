<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class baggageRule extends Model
{
    /**
     * @var string
     */
    public $baggageRuleDesc;
    protected $_name = [
        'baggageRuleDesc' => 'baggage_rule_desc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageRuleDesc) {
            $res['baggage_rule_desc'] = $this->baggageRuleDesc;
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
        if (isset($map['baggage_rule_desc'])) {
            $model->baggageRuleDesc = $map['baggage_rule_desc'];
        }

        return $model;
    }
}
