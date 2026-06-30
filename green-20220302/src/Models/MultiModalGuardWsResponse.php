<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Dara\Model;
use Darabonba\OpenApi\Models\WebSocketClient;

class MultiModalGuardWsResponse extends Model
{
    /**
     * @var WebSocketClient
     */
    public $webSocketClient;
    protected $_name = [
        'webSocketClient' => 'webSocketClient',
    ];

    public function validate()
    {
        if (null !== $this->webSocketClient) {
            $this->webSocketClient->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webSocketClient) {
            $res['webSocketClient'] = null !== $this->webSocketClient ? $this->webSocketClient->toArray($noStream) : $this->webSocketClient;
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
        if (isset($map['webSocketClient'])) {
            $model->webSocketClient = WebSocketClient::fromMap($map['webSocketClient']);
        }

        return $model;
    }
}
