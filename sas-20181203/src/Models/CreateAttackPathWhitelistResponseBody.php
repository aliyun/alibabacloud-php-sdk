<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateAttackPathWhitelistResponseBody\attackPathWhitelist;

class CreateAttackPathWhitelistResponseBody extends Model
{
    /**
     * @var attackPathWhitelist
     */
    public $attackPathWhitelist;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackPathWhitelist' => 'AttackPathWhitelist',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->attackPathWhitelist) {
            $this->attackPathWhitelist->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathWhitelist) {
            $res['AttackPathWhitelist'] = null !== $this->attackPathWhitelist ? $this->attackPathWhitelist->toArray($noStream) : $this->attackPathWhitelist;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AttackPathWhitelist'])) {
            $model->attackPathWhitelist = attackPathWhitelist::fromMap($map['AttackPathWhitelist']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
