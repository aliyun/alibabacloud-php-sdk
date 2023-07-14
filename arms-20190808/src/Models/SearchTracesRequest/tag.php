<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key. The following system preset fields are provided:
     *
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
     * @example http.status_code
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag.
     *
     * @example 200
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

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
     * @return tag
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
