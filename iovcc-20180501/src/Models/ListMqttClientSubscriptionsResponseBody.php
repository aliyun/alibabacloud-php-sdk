<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttClientSubscriptionsResponseBody\clientSubscriptions;
use AlibabaCloud\Tea\Model;

class ListMqttClientSubscriptionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clientSubscriptions
     */
    public $clientSubscriptions;
    protected $_name = [
        'requestId'           => 'RequestId',
        'clientSubscriptions' => 'ClientSubscriptions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clientSubscriptions) {
            $res['ClientSubscriptions'] = null !== $this->clientSubscriptions ? $this->clientSubscriptions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMqttClientSubscriptionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientSubscriptions'])) {
            $model->clientSubscriptions = clientSubscriptions::fromMap($map['ClientSubscriptions']);
        }

        return $model;
    }
}
