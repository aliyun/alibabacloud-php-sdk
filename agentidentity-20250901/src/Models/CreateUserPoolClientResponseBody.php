<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateUserPoolClientResponseBody\client;

class CreateUserPoolClientResponseBody extends Model
{
    /**
     * @var client
     */
    public $client;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'client' => 'Client',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->client) {
            $this->client->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->client) {
            $res['Client'] = null !== $this->client ? $this->client->toArray($noStream) : $this->client;
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
        if (isset($map['Client'])) {
            $model->client = client::fromMap($map['Client']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
