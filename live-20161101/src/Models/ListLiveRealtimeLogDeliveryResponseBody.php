<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveRealtimeLogDeliveryResponseBody\content;
use AlibabaCloud\Tea\Model;

class ListLiveRealtimeLogDeliveryResponseBody extends Model
{
    /**
     * @description The configurations of real-time log delivery.
     *
     * @var content
     */
    public $content;

    /**
     * @description The request ID.
     *
     * @example 30559C03-86C9-4EEC-B840-0DC5F5A2189B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content' => 'Content',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRealtimeLogDeliveryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
