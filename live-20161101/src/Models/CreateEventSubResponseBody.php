<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateEventSubResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 760bad53276431c499e30dc36f6b****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The subscription ID.
     *
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
     * @return CreateEventSubResponseBody
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
