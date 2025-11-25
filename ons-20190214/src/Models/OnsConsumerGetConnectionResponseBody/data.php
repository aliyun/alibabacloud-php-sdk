<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponseBody\data\connectionList;

class data extends Model
{
    /**
     * @var connectionList
     */
    public $connectionList;

    /**
     * @var string
     */
    public $messageModel;
    protected $_name = [
        'connectionList' => 'ConnectionList',
        'messageModel' => 'MessageModel',
    ];

    public function validate()
    {
        if (null !== $this->connectionList) {
            $this->connectionList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionList) {
            $res['ConnectionList'] = null !== $this->connectionList ? $this->connectionList->toArray($noStream) : $this->connectionList;
        }

        if (null !== $this->messageModel) {
            $res['MessageModel'] = $this->messageModel;
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
        if (isset($map['ConnectionList'])) {
            $model->connectionList = connectionList::fromMap($map['ConnectionList']);
        }

        if (isset($map['MessageModel'])) {
            $model->messageModel = $map['MessageModel'];
        }

        return $model;
    }
}
