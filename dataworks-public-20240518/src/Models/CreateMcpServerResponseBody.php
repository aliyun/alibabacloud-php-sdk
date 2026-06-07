<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateMcpServerResponseBody\mcpServer;

class CreateMcpServerResponseBody extends Model
{
    /**
     * @var mcpServer
     */
    public $mcpServer;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mcpServer' => 'McpServer',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mcpServer) {
            $this->mcpServer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServer) {
            $res['McpServer'] = null !== $this->mcpServer ? $this->mcpServer->toArray($noStream) : $this->mcpServer;
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
        if (isset($map['McpServer'])) {
            $model->mcpServer = mcpServer::fromMap($map['McpServer']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
