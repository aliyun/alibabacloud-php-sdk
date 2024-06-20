<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\StartChatResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example $23086709$EAUNIT
     *
     * @var string
     */
    public $chatConversationId;

    /**
     * @example chat-525523618219921408
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'chatConversationId' => 'ChatConversationId',
        'jobId'              => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatConversationId) {
            $res['ChatConversationId'] = $this->chatConversationId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['ChatConversationId'])) {
            $model->chatConversationId = $map['ChatConversationId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
