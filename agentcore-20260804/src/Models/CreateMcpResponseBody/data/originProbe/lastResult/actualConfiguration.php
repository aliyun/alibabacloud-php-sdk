<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateMcpResponseBody\data\originProbe\lastResult;

use AlibabaCloud\Dara\Model;

class actualConfiguration extends Model
{
    /**
     * @var string
     */
    public $backendMcpProtocol;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $protocolVersion;

    /**
     * @var string
     */
    public $sessionMode;
    protected $_name = [
        'backendMcpProtocol' => 'backendMcpProtocol',
        'protocol' => 'protocol',
        'protocolVersion' => 'protocolVersion',
        'sessionMode' => 'sessionMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendMcpProtocol) {
            $res['backendMcpProtocol'] = $this->backendMcpProtocol;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->protocolVersion) {
            $res['protocolVersion'] = $this->protocolVersion;
        }

        if (null !== $this->sessionMode) {
            $res['sessionMode'] = $this->sessionMode;
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
        if (isset($map['backendMcpProtocol'])) {
            $model->backendMcpProtocol = $map['backendMcpProtocol'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['protocolVersion'])) {
            $model->protocolVersion = $map['protocolVersion'];
        }

        if (isset($map['sessionMode'])) {
            $model->sessionMode = $map['sessionMode'];
        }

        return $model;
    }
}
