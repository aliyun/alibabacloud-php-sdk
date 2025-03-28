<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployOllamaModelInput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployOllamaModelInput\httpTrigger\triggerConfig;

class httpTrigger extends Model
{
    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var triggerConfig
     */
    public $triggerConfig;
    protected $_name = [
        'qualifier' => 'qualifier',
        'triggerConfig' => 'triggerConfig',
    ];

    public function validate()
    {
        if (null !== $this->triggerConfig) {
            $this->triggerConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = null !== $this->triggerConfig ? $this->triggerConfig->toArray($noStream) : $this->triggerConfig;
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
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = triggerConfig::fromMap($map['triggerConfig']);
        }

        return $model;
    }
}
