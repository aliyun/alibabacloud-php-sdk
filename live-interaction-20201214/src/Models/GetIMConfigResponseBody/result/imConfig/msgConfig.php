<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponseBody\result\imConfig;

use AlibabaCloud\Tea\Model;

class msgConfig extends Model
{
    /**
     * @description 消息撤回时间，分钟
     *
     * @var int
     */
    public $clientMsgRecallTimeIntervalMinute;
    protected $_name = [
        'clientMsgRecallTimeIntervalMinute' => 'ClientMsgRecallTimeIntervalMinute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientMsgRecallTimeIntervalMinute) {
            $res['ClientMsgRecallTimeIntervalMinute'] = $this->clientMsgRecallTimeIntervalMinute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return msgConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientMsgRecallTimeIntervalMinute'])) {
            $model->clientMsgRecallTimeIntervalMinute = $map['ClientMsgRecallTimeIntervalMinute'];
        }

        return $model;
    }
}
