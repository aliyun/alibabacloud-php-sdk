<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example chatbot-cn-n7QmzrUnNe
     *
     * @var string
     */
    public $botId;

    /**
     * @var intentList[]
     */
    public $intentList;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'botId' => 'BotId',
        'intentList' => 'IntentList',
        'message' => 'Message',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }
        if (null !== $this->intentList) {
            $res['IntentList'] = [];
            if (null !== $this->intentList && \is_array($this->intentList)) {
                $n = 0;
                foreach ($this->intentList as $item) {
                    $res['IntentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }
        if (isset($map['IntentList'])) {
            if (!empty($map['IntentList'])) {
                $model->intentList = [];
                $n = 0;
                foreach ($map['IntentList'] as $item) {
                    $model->intentList[$n++] = null !== $item ? intentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
