<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\defaultActions\forwardGroupConfig;

class defaultActions extends Model
{
    /**
     * @var forwardGroupConfig
     */
    public $forwardGroupConfig;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'forwardGroupConfig' => 'ForwardGroupConfig',
        'type'               => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->forwardGroupConfig) {
            $this->forwardGroupConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardGroupConfig) {
            $res['ForwardGroupConfig'] = null !== $this->forwardGroupConfig ? $this->forwardGroupConfig->toArray($noStream) : $this->forwardGroupConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ForwardGroupConfig'])) {
            $model->forwardGroupConfig = forwardGroupConfig::fromMap($map['ForwardGroupConfig']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
