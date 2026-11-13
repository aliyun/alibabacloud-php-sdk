<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerModelCardGrantsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerModelCardGrantsResponseBody\data\entitlementState;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumerModelCardGrantsResponseBody\data\grants;

class data extends Model
{
    /**
     * @var entitlementState
     */
    public $entitlementState;

    /**
     * @var grants
     */
    public $grants;
    protected $_name = [
        'entitlementState' => 'entitlementState',
        'grants' => 'grants',
    ];

    public function validate()
    {
        if (null !== $this->entitlementState) {
            $this->entitlementState->validate();
        }
        if (null !== $this->grants) {
            $this->grants->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entitlementState) {
            $res['entitlementState'] = null !== $this->entitlementState ? $this->entitlementState->toArray($noStream) : $this->entitlementState;
        }

        if (null !== $this->grants) {
            $res['grants'] = null !== $this->grants ? $this->grants->toArray($noStream) : $this->grants;
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
        if (isset($map['entitlementState'])) {
            $model->entitlementState = entitlementState::fromMap($map['entitlementState']);
        }

        if (isset($map['grants'])) {
            $model->grants = grants::fromMap($map['grants']);
        }

        return $model;
    }
}
