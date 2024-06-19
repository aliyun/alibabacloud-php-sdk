<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class ExecContainerCommandResponseBody extends Model
{
    /**
     * @description The HTTP URL. You can use this URL to enter the container within 30 seconds after this operation is called. For more information, see [Use and integrate the Elastic Container Instance terminal](https://help.aliyun.com/document_detail/202846.html).
     *
     * @example https://eci.console.aliyun.com/terminal?param=X32a****
     *
     * @var string
     */
    public $httpUrl;

    /**
     * @description The request ID.
     *
     * @example 28B583A8-313D-4383-7817-B5A9F7E0****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The output of the command. This parameter is returned only if Sync is set to true.
     *
     * @example Hello
     *
     * @var string
     */
    public $syncResponse;

    /**
     * @description The WebSocket URL. You can use this URL to establish a WebSocket connection with the container.
     *
     * @example wss://eci-cn-shanghai.aliyun.com/exec/?s=ktHPx****
     *
     * @var string
     */
    public $webSocketUri;
    protected $_name = [
        'httpUrl'      => 'HttpUrl',
        'requestId'    => 'RequestId',
        'syncResponse' => 'SyncResponse',
        'webSocketUri' => 'WebSocketUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpUrl) {
            $res['HttpUrl'] = $this->httpUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->syncResponse) {
            $res['SyncResponse'] = $this->syncResponse;
        }
        if (null !== $this->webSocketUri) {
            $res['WebSocketUri'] = $this->webSocketUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecContainerCommandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpUrl'])) {
            $model->httpUrl = $map['HttpUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SyncResponse'])) {
            $model->syncResponse = $map['SyncResponse'];
        }
        if (isset($map['WebSocketUri'])) {
            $model->webSocketUri = $map['WebSocketUri'];
        }

        return $model;
    }
}
