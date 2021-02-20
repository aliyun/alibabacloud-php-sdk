<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateSubscribeResponseBody extends Model
{
    /**
     * @var string
     */
    public $subscribeId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'subscribeId' => 'SubscribeId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscribeId) {
            $res['SubscribeId'] = $this->subscribeId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscribeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubscribeId'])) {
            $model->subscribeId = $map['SubscribeId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
