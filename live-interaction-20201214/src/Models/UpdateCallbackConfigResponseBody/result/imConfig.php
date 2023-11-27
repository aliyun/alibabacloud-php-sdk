<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody\result;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody\result\imConfig\callbackConfig;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody\result\imConfig\msgConfig;
use AlibabaCloud\Tea\Model;

class imConfig extends Model
{
    /**
     * @var callbackConfig
     */
    public $callbackConfig;

    /**
     * @var msgConfig
     */
    public $msgConfig;
    protected $_name = [
        'callbackConfig' => 'CallbackConfig',
        'msgConfig'      => 'MsgConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackConfig) {
            $res['CallbackConfig'] = null !== $this->callbackConfig ? $this->callbackConfig->toMap() : null;
        }
        if (null !== $this->msgConfig) {
            $res['MsgConfig'] = null !== $this->msgConfig ? $this->msgConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackConfig'])) {
            $model->callbackConfig = callbackConfig::fromMap($map['CallbackConfig']);
        }
        if (isset($map['MsgConfig'])) {
            $model->msgConfig = msgConfig::fromMap($map['MsgConfig']);
        }

        return $model;
    }
}
