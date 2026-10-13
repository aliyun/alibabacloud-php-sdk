<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\artifact\code;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body\artifact\container;

class artifact extends Model
{
    /**
     * @var code
     */
    public $code;

    /**
     * @var container
     */
    public $container;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'code' => 'code',
        'container' => 'container',
        'port' => 'port',
    ];

    public function validate()
    {
        if (null !== $this->code) {
            $this->code->validate();
        }
        if (null !== $this->container) {
            $this->container->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = null !== $this->code ? $this->code->toArray($noStream) : $this->code;
        }

        if (null !== $this->container) {
            $res['container'] = null !== $this->container ? $this->container->toArray($noStream) : $this->container;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
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
        if (isset($map['code'])) {
            $model->code = code::fromMap($map['code']);
        }

        if (isset($map['container'])) {
            $model->container = container::fromMap($map['container']);
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
