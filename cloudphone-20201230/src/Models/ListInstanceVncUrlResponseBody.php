<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceVncUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vncUrl;

    /**
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
