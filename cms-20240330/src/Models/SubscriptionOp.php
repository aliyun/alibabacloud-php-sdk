<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SubscriptionOp extends Model
{
    /**
     * @var string
     */
    public $op;

    /**
     * @var SubscriptionForModify
     */
    public $payload;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'op' => 'op',
        'payload' => 'payload',
        'uuid' => 'uuid',
    ];

    public function validate()
    {
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }

        if (null !== $this->payload) {
            $res['payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }

        if (isset($map['payload'])) {
            $model->payload = SubscriptionForModify::fromMap($map['payload']);
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
