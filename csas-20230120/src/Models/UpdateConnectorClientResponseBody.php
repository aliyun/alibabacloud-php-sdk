<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateConnectorClientResponseBody\connectorClient;

class UpdateConnectorClientResponseBody extends Model
{
    /**
     * @var connectorClient
     */
    public $connectorClient;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectorClient' => 'ConnectorClient',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->connectorClient) {
            $this->connectorClient->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorClient) {
            $res['ConnectorClient'] = null !== $this->connectorClient ? $this->connectorClient->toArray($noStream) : $this->connectorClient;
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
        if (isset($map['ConnectorClient'])) {
            $model->connectorClient = connectorClient::fromMap($map['ConnectorClient']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
