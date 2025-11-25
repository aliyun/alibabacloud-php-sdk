<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo;

class OnsMessagePageQueryByTopicResponseBody extends Model
{
    /**
     * @var msgFoundDo
     */
    public $msgFoundDo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'msgFoundDo' => 'MsgFoundDo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->msgFoundDo) {
            $this->msgFoundDo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->msgFoundDo) {
            $res['MsgFoundDo'] = null !== $this->msgFoundDo ? $this->msgFoundDo->toArray($noStream) : $this->msgFoundDo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MsgFoundDo'])) {
            $model->msgFoundDo = msgFoundDo::fromMap($map['MsgFoundDo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
