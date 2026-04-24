<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class SetYikeCallbackConfigRequest extends Model
{
    /**
     * @var string
     */
    public $callbackConfig;

    /**
     * @var string
     */
    public $callbackUrl;
    protected $_name = [
        'callbackConfig' => 'CallbackConfig',
        'callbackUrl' => 'CallbackUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackConfig) {
            $res['CallbackConfig'] = $this->callbackConfig;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
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
        if (isset($map['CallbackConfig'])) {
            $model->callbackConfig = $map['CallbackConfig'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        return $model;
    }
}
