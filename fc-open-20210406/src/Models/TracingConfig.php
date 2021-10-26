<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class TracingConfig extends Model
{
    /**
     * @var JaegerConfig
     */
    public $jaegerConfig;

    /**
     * @description 链路追踪参数
     *
     * @var string[]
     */
    public $params;

    /**
     * @description 链路追踪类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'jaegerConfig' => 'jaegerConfig',
        'params'       => 'params',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jaegerConfig) {
            $res['jaegerConfig'] = null !== $this->jaegerConfig ? $this->jaegerConfig->toMap() : null;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TracingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jaegerConfig'])) {
            $model->jaegerConfig = JaegerConfig::fromMap($map['jaegerConfig']);
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
