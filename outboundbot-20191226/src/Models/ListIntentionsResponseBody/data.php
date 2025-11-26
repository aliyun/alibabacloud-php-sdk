<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList;

class data extends Model
{
    /**
     * @var string
     */
    public $botId;

    /**
     * @var intentList[]
     */
    public $intentList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'botId' => 'BotId',
        'intentList' => 'IntentList',
        'message' => 'Message',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->intentList)) {
            Model::validateArray($this->intentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }

        if (null !== $this->intentList) {
            if (\is_array($this->intentList)) {
                $res['IntentList'] = [];
                $n1 = 0;
                foreach ($this->intentList as $item1) {
                    $res['IntentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }

        if (isset($map['IntentList'])) {
            if (!empty($map['IntentList'])) {
                $model->intentList = [];
                $n1 = 0;
                foreach ($map['IntentList'] as $item1) {
                    $model->intentList[$n1] = intentList::fromMap($item1);
                    ++$n1;
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
