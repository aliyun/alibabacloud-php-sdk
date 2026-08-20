<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule\contactRule\contactFieldRule;

class contactRule extends Model
{
    /**
     * @var contactFieldRule
     */
    public $contactFieldRule;
    protected $_name = [
        'contactFieldRule' => 'ContactFieldRule',
    ];

    public function validate()
    {
        if (null !== $this->contactFieldRule) {
            $this->contactFieldRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactFieldRule) {
            $res['ContactFieldRule'] = null !== $this->contactFieldRule ? $this->contactFieldRule->toArray($noStream) : $this->contactFieldRule;
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
        if (isset($map['ContactFieldRule'])) {
            $model->contactFieldRule = contactFieldRule::fromMap($map['ContactFieldRule']);
        }

        return $model;
    }
}
