<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the tag. The following system preset fields are provided:
     *
     *   traceId: the ID of the trace.
     *   serverApp: the name of the server application.
     *   clientApp: the name of the client application.
     *   service: the name of the operation.
     *   rpc: the type of the call.
     *   msOfSpan: the duration exceeds a specific value.
     *   clientIp: the IP address of the client.
     *   serverIp: the IP address of the server.
     *   isError: specifies whether the call is abnormal.
     *   hasTprof: contains only thread profiling.
     *
     * @example TestKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     * @example TestValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
