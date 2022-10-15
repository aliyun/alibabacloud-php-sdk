<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceResponseBody;

use AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceResponseBody\data\channel;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var channel
     */
    public $channel;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'channel'   => 'Channel',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'token'     => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = null !== $this->channel ? $this->channel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = channel::fromMap($map['Channel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
