<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ProbeMcpOriginResponseBody\data;

use AlibabaCloud\Dara\Model;

class coverage extends Model
{
    /**
     * @var string
     */
    public $backendMcpProtocol;

    /**
     * @var string[]
     */
    public $headerNames;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $target;

    /**
     * @var bool
     */
    public $viaGateway;
    protected $_name = [
        'backendMcpProtocol' => 'backendMcpProtocol',
        'headerNames' => 'headerNames',
        'method' => 'method',
        'path' => 'path',
        'protocol' => 'protocol',
        'target' => 'target',
        'viaGateway' => 'viaGateway',
    ];

    public function validate()
    {
        if (\is_array($this->headerNames)) {
            Model::validateArray($this->headerNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendMcpProtocol) {
            $res['backendMcpProtocol'] = $this->backendMcpProtocol;
        }

        if (null !== $this->headerNames) {
            if (\is_array($this->headerNames)) {
                $res['headerNames'] = [];
                $n1 = 0;
                foreach ($this->headerNames as $item1) {
                    $res['headerNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->viaGateway) {
            $res['viaGateway'] = $this->viaGateway;
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

        if (isset($map['headerNames'])) {
            if (!empty($map['headerNames'])) {
                $model->headerNames = [];
                $n1 = 0;
                foreach ($map['headerNames'] as $item1) {
                    $model->headerNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['viaGateway'])) {
            $model->viaGateway = $map['viaGateway'];
        }

        return $model;
    }
}
