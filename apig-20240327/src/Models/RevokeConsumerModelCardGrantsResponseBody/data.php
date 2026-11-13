<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\RevokeConsumerModelCardGrantsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\RevokeConsumerModelCardGrantsResponseBody\data\entitlementState;

class data extends Model
{
    /**
     * @var int
     */
    public $changedCount;

    /**
     * @var entitlementState
     */
    public $entitlementState;
    protected $_name = [
        'changedCount' => 'changedCount',
        'entitlementState' => 'entitlementState',
    ];

    public function validate()
    {
        if (null !== $this->entitlementState) {
            $this->entitlementState->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changedCount) {
            $res['changedCount'] = $this->changedCount;
        }

        if (null !== $this->entitlementState) {
            $res['entitlementState'] = null !== $this->entitlementState ? $this->entitlementState->toArray($noStream) : $this->entitlementState;
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
        if (isset($map['changedCount'])) {
            $model->changedCount = $map['changedCount'];
        }

        if (isset($map['entitlementState'])) {
            $model->entitlementState = entitlementState::fromMap($map['entitlementState']);
        }

        return $model;
    }
}
