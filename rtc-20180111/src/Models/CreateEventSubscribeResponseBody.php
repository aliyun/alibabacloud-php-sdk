<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateEventSubscribeResponseBody extends Model
{
    /**
     * @example 760bad53276431c499e30dc36f6b26be
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ad53276431c****
     *
     * @var string
     */
    public $subscribeId;
    protected $_name = [
        'requestId' => 'RequestId',
        'subscribeId' => 'SubscribeId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateEventSubscribeResponseBody
     */
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
