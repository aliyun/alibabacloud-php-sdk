<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SendLiveMessageGroupResponseBody extends Model
{
    /**
     * @description The ID of the message, which is a unique identifier that can be used to delete the message. The ID can be up to 64 bytes in length and can contain letters and digits.
     *
     * @example 169830****
     *
     * @var string
     */
    public $msgTid;

    /**
     * @description The request ID.
     *
     * @example E4C1245F-597B-1BD1-B9BB-9D220E99****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'msgTid' => 'MsgTid',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgTid) {
            $res['MsgTid'] = $this->msgTid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendLiveMessageGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MsgTid'])) {
            $model->msgTid = $map['MsgTid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
