<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceVncUrlResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Virtual Network Computing (VNC) connection URL.
     *
     * @example wss%3A%2F%2Fhz01-vncproxy.aliyun.com%2Fwebsockify%2F%3Fs%3DDvh%252FIA%252BYc73gWO48cBx2gBxUDVzaAnSKr74pq30mzqUYgeUMcB%252FbkNixDxdEA996
     *
     * @var string
     */
    public $vncUrl;

    /**
     * @description The token that is used for WebRTC logon.
     *
     * @example D3EC1DE8C12E******
     *
     * @var string
     */
    public $webRtcToken;
    protected $_name = [
        'requestId'   => 'RequestId',
        'vncUrl'      => 'VncUrl',
        'webRtcToken' => 'WebRtcToken',
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
        if (null !== $this->webRtcToken) {
            $res['WebRtcToken'] = $this->webRtcToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceVncUrlResponseBody
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
        if (isset($map['WebRtcToken'])) {
            $model->webRtcToken = $map['WebRtcToken'];
        }

        return $model;
    }
}
