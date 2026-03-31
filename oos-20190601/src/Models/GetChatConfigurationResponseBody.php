<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetChatConfigurationResponseBody\chatConfiguration;

class GetChatConfigurationResponseBody extends Model
{
    /**
     * @var chatConfiguration
     */
    public $chatConfiguration;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chatConfiguration' => 'ChatConfiguration',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->chatConfiguration) {
            $this->chatConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatConfiguration) {
            $res['ChatConfiguration'] = null !== $this->chatConfiguration ? $this->chatConfiguration->toArray($noStream) : $this->chatConfiguration;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChatConfiguration'])) {
            $model->chatConfiguration = chatConfiguration::fromMap($map['ChatConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
