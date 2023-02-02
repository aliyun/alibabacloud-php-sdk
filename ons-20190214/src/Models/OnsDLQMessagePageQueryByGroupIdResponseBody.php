<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdResponseBody\msgFoundDo;
use AlibabaCloud\Tea\Model;

class OnsDLQMessagePageQueryByGroupIdResponseBody extends Model
{
    /**
     * @description The returned results.
     *
     * @var msgFoundDo
     */
    public $msgFoundDo;

    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use this ID to troubleshoot issues.
     *
     * @example B00CD3C8-D81E-4A41-85E2-38F19252****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'msgFoundDo' => 'MsgFoundDo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgFoundDo) {
            $res['MsgFoundDo'] = null !== $this->msgFoundDo ? $this->msgFoundDo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MsgFoundDo'])) {
            $model->msgFoundDo = msgFoundDo::fromMap($map['MsgFoundDo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
