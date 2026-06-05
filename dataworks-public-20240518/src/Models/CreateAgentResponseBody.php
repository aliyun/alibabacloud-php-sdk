<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateAgentResponseBody\agent;

class CreateAgentResponseBody extends Model
{
    /**
     * @var agent
     */
    public $agent;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'agent' => 'Agent',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->agent) {
            $this->agent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toArray($noStream) : $this->agent;
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
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
