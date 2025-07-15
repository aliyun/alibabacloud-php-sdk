<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveMessageGroupMessageResponseBody extends Model
{
    /**
     * @description The group ID.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the deleted or non-existent message.
     *
     * @example a74a8fbd3cfe4b2daa8517e4e3******
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The request ID.
     *
     * @example B95BE680-5A6A-1CAD-8AB1-09DFF5D6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupId' => 'GroupId',
        'messageId' => 'MessageId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveMessageGroupMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
