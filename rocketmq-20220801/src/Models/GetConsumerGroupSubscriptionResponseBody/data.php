<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data\connectionDTO;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data\subscriptionDTO;

class data extends Model
{
    /**
     * @var connectionDTO
     */
    public $connectionDTO;

    /**
     * @var subscriptionDTO
     */
    public $subscriptionDTO;
    protected $_name = [
        'connectionDTO' => 'connectionDTO',
        'subscriptionDTO' => 'subscriptionDTO',
    ];

    public function validate()
    {
        if (null !== $this->connectionDTO) {
            $this->connectionDTO->validate();
        }
        if (null !== $this->subscriptionDTO) {
            $this->subscriptionDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionDTO) {
            $res['connectionDTO'] = null !== $this->connectionDTO ? $this->connectionDTO->toArray($noStream) : $this->connectionDTO;
        }

        if (null !== $this->subscriptionDTO) {
            $res['subscriptionDTO'] = null !== $this->subscriptionDTO ? $this->subscriptionDTO->toArray($noStream) : $this->subscriptionDTO;
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
        if (isset($map['connectionDTO'])) {
            $model->connectionDTO = connectionDTO::fromMap($map['connectionDTO']);
        }

        if (isset($map['subscriptionDTO'])) {
            $model->subscriptionDTO = subscriptionDTO::fromMap($map['subscriptionDTO']);
        }

        return $model;
    }
}
