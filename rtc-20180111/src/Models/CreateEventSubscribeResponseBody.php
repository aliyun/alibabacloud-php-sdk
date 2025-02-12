<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class CreateEventSubscribeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $subscribeId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'subscribeId' => 'SubscribeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subscribeId) {
            $res['SubscribeId'] = $this->subscribeId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SubscribeId'])) {
            $model->subscribeId = $map['SubscribeId'];
        }

        return $model;
    }
}
