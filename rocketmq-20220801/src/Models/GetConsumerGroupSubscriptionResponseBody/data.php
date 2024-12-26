<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data\connectionDTO;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupSubscriptionResponseBody\data\subscriptionDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The connection details.
     *
     * @var connectionDTO
     */
    public $connectionDTO;

    /**
     * @description The subscription details.
     *
     * @var subscriptionDTO
     */
    public $subscriptionDTO;
    protected $_name = [
        'connectionDTO'   => 'connectionDTO',
        'subscriptionDTO' => 'subscriptionDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionDTO) {
            $res['connectionDTO'] = null !== $this->connectionDTO ? $this->connectionDTO->toMap() : null;
        }
        if (null !== $this->subscriptionDTO) {
            $res['subscriptionDTO'] = null !== $this->subscriptionDTO ? $this->subscriptionDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
