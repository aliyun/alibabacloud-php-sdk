<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceVncUrlResponseBody extends Model
{
    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 管理终端Url。
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
