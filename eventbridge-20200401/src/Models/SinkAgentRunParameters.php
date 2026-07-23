<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkAgentRunParameters\body;

class SinkAgentRunParameters extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeName;

    /**
     * @var body
     */
    public $body;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $timeout;
    protected $_name = [
        'agentRuntimeName' => 'AgentRuntimeName',
        'body' => 'Body',
        'endpointName' => 'EndpointName',
        'roleName' => 'RoleName',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeName) {
            $res['AgentRuntimeName'] = $this->agentRuntimeName;
        }

        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['AgentRuntimeName'])) {
            $model->agentRuntimeName = $map['AgentRuntimeName'];
        }

        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
