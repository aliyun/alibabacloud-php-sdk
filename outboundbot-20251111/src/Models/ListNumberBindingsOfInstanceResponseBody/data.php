<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListNumberBindingsOfInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $bound;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $sipTrunkId;

    /**
     * @var string
     */
    public $sipTrunkName;
    protected $_name = [
        'bound' => 'Bound',
        'number' => 'Number',
        'sipTrunkId' => 'SipTrunkId',
        'sipTrunkName' => 'SipTrunkName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->sipTrunkId) {
            $res['SipTrunkId'] = $this->sipTrunkId;
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
        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['SipTrunkId'])) {
            $model->sipTrunkId = $map['SipTrunkId'];
        }

        if (isset($map['SipTrunkName'])) {
            $model->sipTrunkName = $map['SipTrunkName'];
        }

        return $model;
    }
}
