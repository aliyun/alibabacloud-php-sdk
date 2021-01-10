<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListMqttMessageLogsResponseBody\traces;
use AlibabaCloud\Tea\Model;

class ListMqttMessageLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var traces
     */
    public $traces;
    protected $_name = [
        'requestId' => 'RequestId',
        'traces'    => 'Traces',
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
        if (null !== $this->traces) {
            $res['Traces'] = null !== $this->traces ? $this->traces->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMqttMessageLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Traces'])) {
            $model->traces = traces::fromMap($map['Traces']);
        }

        return $model;
    }
}
