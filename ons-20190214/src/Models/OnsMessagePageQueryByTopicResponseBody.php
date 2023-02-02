<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessagePageQueryByTopicResponseBody\msgFoundDo;
use AlibabaCloud\Tea\Model;

class OnsMessagePageQueryByTopicResponseBody extends Model
{
    /**
     * @description The information about the message that is queried.
     *
     * @var msgFoundDo
     */
    public $msgFoundDo;

    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use this ID to troubleshoot issues.
     *
     * @example 5DC2A47E-2B31-4722-96C8-FA59C9*****
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
     * @return OnsMessagePageQueryByTopicResponseBody
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
