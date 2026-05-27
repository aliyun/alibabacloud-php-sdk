<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\STAROps\V20260428\Models\FetchRemoteMcpToolsRequest\connection;
use AlibabaCloud\SDK\STAROps\V20260428\Models\FetchRemoteMcpToolsRequest\network;

class FetchRemoteMcpToolsRequest extends Model
{
    /**
     * @var connection
     */
    public $connection;

    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'connection' => 'connection',
        'network' => 'network',
    ];

    public function validate()
    {
        if (null !== $this->connection) {
            $this->connection->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connection) {
            $res['connection'] = null !== $this->connection ? $this->connection->toArray($noStream) : $this->connection;
        }

        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
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
        if (isset($map['connection'])) {
            $model->connection = connection::fromMap($map['connection']);
        }

        if (isset($map['network'])) {
            $model->network = network::fromMap($map['network']);
        }

        return $model;
    }
}
