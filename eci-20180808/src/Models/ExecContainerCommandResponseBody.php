<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Dara\Model;

class ExecContainerCommandResponseBody extends Model
{
    /**
     * @var string
     */
    public $httpUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $syncResponse;

    /**
     * @var string
     */
    public $webSocketUri;
    protected $_name = [
        'httpUrl' => 'HttpUrl',
        'requestId' => 'RequestId',
        'syncResponse' => 'SyncResponse',
        'webSocketUri' => 'WebSocketUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
