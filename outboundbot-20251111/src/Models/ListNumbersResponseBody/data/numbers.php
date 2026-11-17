<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListNumbersResponseBody\data;

use AlibabaCloud\Dara\Model;

class numbers extends Model
{
    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $sipTrunkName;
    protected $_name = [
        'number' => 'Number',
        'sipTrunkName' => 'SipTrunkName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->sipTrunkName) {
            $res['SipTrunkName'] = $this->sipTrunkName;
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
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['SipTrunkName'])) {
            $model->sipTrunkName = $map['SipTrunkName'];
        }

        return $model;
    }
}
