<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class TracingConfig extends Model
{
    /**
     * @var JaegerConfig
     */
    public $jaegerConfig;

    /**
     * @var mixed
     */
    public $params;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'jaegerConfig' => 'jaegerConfig',
        'params' => 'params',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->jaegerConfig) {
            $this->jaegerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jaegerConfig) {
            $res['jaegerConfig'] = null !== $this->jaegerConfig ? $this->jaegerConfig->toArray($noStream) : $this->jaegerConfig;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
