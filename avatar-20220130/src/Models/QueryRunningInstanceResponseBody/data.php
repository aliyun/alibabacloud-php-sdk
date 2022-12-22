<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceResponseBody;

use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceResponseBody\data\channel;
use AlibabaCloud\SDK\Avatar\V20220130\Models\QueryRunningInstanceResponseBody\data\user;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var channel
     */
    public $channel;

    /**
     * @example 4f63f9e9788449f9adc88d9438c8dec3
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var user
     */
    public $user;
    protected $_name = [
        'channel'   => 'Channel',
        'sessionId' => 'SessionId',
        'user'      => 'User',
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
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
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
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
