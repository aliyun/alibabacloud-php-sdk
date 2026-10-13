<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class VerifyWorkspaceAgenticFsMountRamAuthorizationRequest extends Model
{
    /**
     * @var string
     */
    public $server;
    protected $_name = [
        'server' => 'server',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->server) {
            $res['server'] = $this->server;
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
        if (isset($map['server'])) {
            $model->server = $map['server'];
        }

        return $model;
    }
}
