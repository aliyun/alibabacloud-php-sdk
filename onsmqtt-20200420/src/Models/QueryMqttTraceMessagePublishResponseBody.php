<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessagePublishResponseBody\messageTraceLists;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessagePublishResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var messageTraceLists[]
     */
    public $messageTraceLists;
    protected $_name = [
        'requestId'         => 'RequestId',
        'messageTraceLists' => 'MessageTraceLists',
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
        if (null !== $this->messageTraceLists) {
            $res['MessageTraceLists'] = [];
            if (null !== $this->messageTraceLists && \is_array($this->messageTraceLists)) {
                $n = 0;
                foreach ($this->messageTraceLists as $item) {
                    $res['MessageTraceLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMqttTraceMessagePublishResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MessageTraceLists'])) {
            if (!empty($map['MessageTraceLists'])) {
                $model->messageTraceLists = [];
                $n                        = 0;
                foreach ($map['MessageTraceLists'] as $item) {
                    $model->messageTraceLists[$n++] = null !== $item ? messageTraceLists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
