<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryMqttTraceMessagePublishResponseBody\messageTraceLists;
use AlibabaCloud\Tea\Model;

class QueryMqttTraceMessagePublishResponseBody extends Model
{
    /**
     * @description The message traces.
     *
     * @var messageTraceLists[]
     */
    public $messageTraceLists;

    /**
     * @description The request ID. You can use the ID to troubleshoot issues. This parameter is a common parameter.
     *
     * @example 69AD5550-BF22-438A-9202-A6E89185****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageTraceLists' => 'MessageTraceLists',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageTraceLists) {
            $res['MessageTraceLists'] = [];
            if (null !== $this->messageTraceLists && \is_array($this->messageTraceLists)) {
                $n = 0;
                foreach ($this->messageTraceLists as $item) {
                    $res['MessageTraceLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MessageTraceLists'])) {
            if (!empty($map['MessageTraceLists'])) {
                $model->messageTraceLists = [];
                $n                        = 0;
                foreach ($map['MessageTraceLists'] as $item) {
                    $model->messageTraceLists[$n++] = null !== $item ? messageTraceLists::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
