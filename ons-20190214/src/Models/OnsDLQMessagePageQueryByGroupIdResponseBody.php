<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdResponseBody\msgFoundDo;
use AlibabaCloud\Tea\Model;

class OnsDLQMessagePageQueryByGroupIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var msgFoundDo
     */
    public $msgFoundDo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'msgFoundDo' => 'MsgFoundDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->msgFoundDo) {
            $res['MsgFoundDo'] = null !== $this->msgFoundDo ? $this->msgFoundDo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsDLQMessagePageQueryByGroupIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MsgFoundDo'])) {
            $model->msgFoundDo = msgFoundDo::fromMap($map['MsgFoundDo']);
        }

        return $model;
    }
}
