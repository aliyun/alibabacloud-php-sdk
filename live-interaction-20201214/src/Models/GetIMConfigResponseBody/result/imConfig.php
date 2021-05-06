<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponseBody\result;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponseBody\result\imConfig\callbackConfig;
use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponseBody\result\imConfig\msgConfig;
use AlibabaCloud\Tea\Model;

class imConfig extends Model
{
    /**
     * @description 消息配置
     *
     * @var msgConfig
     */
    public $msgConfig;

    /**
     * @description 回调配置
     *
     * @var callbackConfig
     */
    public $callbackConfig;
    protected $_name = [
        'msgConfig'      => 'MsgConfig',
        'callbackConfig' => 'CallbackConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgConfig) {
            $res['MsgConfig'] = null !== $this->msgConfig ? $this->msgConfig->toMap() : null;
        }
        if (null !== $this->callbackConfig) {
            $res['CallbackConfig'] = null !== $this->callbackConfig ? $this->callbackConfig->toMap() : null;
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
        if (isset($map['MsgConfig'])) {
            $model->msgConfig = msgConfig::fromMap($map['MsgConfig']);
        }
        if (isset($map['CallbackConfig'])) {
            $model->callbackConfig = callbackConfig::fromMap($map['CallbackConfig']);
        }

        return $model;
    }
}
