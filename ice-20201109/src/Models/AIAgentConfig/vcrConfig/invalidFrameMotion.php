<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\vcrConfig;

use AlibabaCloud\Dara\Model;

class invalidFrameMotion extends Model
{
    /**
     * @var int
     */
    public $callbackDelay;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'callbackDelay' => 'CallbackDelay',
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackDelay) {
            $res['CallbackDelay'] = $this->callbackDelay;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['CallbackDelay'])) {
            $model->callbackDelay = $map['CallbackDelay'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
