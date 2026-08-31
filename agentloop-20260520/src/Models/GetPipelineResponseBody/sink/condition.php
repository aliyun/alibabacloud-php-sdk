<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\sink\condition\defaultSink;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\sink\condition\routes;

class condition extends Model
{
    /**
     * @var defaultSink
     */
    public $defaultSink;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var routes[]
     */
    public $routes;
    protected $_name = [
        'defaultSink' => 'defaultSink',
        'matchMode' => 'matchMode',
        'routes' => 'routes',
    ];

    public function validate()
    {
        if (null !== $this->defaultSink) {
            $this->defaultSink->validate();
        }
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultSink) {
            $res['defaultSink'] = null !== $this->defaultSink ? $this->defaultSink->toArray($noStream) : $this->defaultSink;
        }

        if (null !== $this->matchMode) {
            $res['matchMode'] = $this->matchMode;
        }

        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['defaultSink'])) {
            $model->defaultSink = defaultSink::fromMap($map['defaultSink']);
        }

        if (isset($map['matchMode'])) {
            $model->matchMode = $map['matchMode'];
        }

        if (isset($map['routes'])) {
            if (!empty($map['routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['routes'] as $item1) {
                    $model->routes[$n1] = routes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
