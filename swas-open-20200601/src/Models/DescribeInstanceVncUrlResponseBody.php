<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceVncUrlResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F534F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The VNC connection address of the server.
     *
     * @example wss%3A%2F%2Fhz01-vncproxy.aliyun.com%2Fwebsockify%2F%3Fs%3Dwz3L8wEMO6KMt7%252FXInEMtKVubBB%252F7rv055kOm8eUOD%252*****YlmsKjOfz6
     *
     * @var string
     */
    public $vncUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'vncUrl'    => 'VncUrl',
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
        if (null !== $this->vncUrl) {
            $res['VncUrl'] = $this->vncUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceVncUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VncUrl'])) {
            $model->vncUrl = $map['VncUrl'];
        }

        return $model;
    }
}
