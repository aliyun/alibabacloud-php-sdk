<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeRCInstanceVncUrlResponseBody extends Model
{
    /**
     * @description The VNC logon address.
     *
     * >  The address returned is valid only for 15 seconds. If you do not use the returned address to establish a connection within 15 seconds, the address expires and you must call the operation again to obtain a new address.
     * @example https://g.alicdn.com/aliyun/ecs-console-vnc2/0.0.8/index.html?vncUrl=****&instanceId=i-2vcb1qjj8z5dl8iw****&isWindows=false
     *
     * @var string
     */
    public $loginUrl;

    /**
     * @description The request ID.
     *
     * @example F2911788-25E8-42E5-A3A3-1B38D263F01E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginUrl'  => 'LoginUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRCInstanceVncUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
