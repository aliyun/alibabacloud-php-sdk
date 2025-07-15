<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListVisitorChatMessagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example chat-65382141036853491
     *
     * @var string
     */
    public $jobId;

    /**
     * @example http://xxxxx.com/avatar.png
     *
     * @var string
     */
    public $senderAvatarUrl;

    /**
     * @example fcd020fe-****-1a272a174a7d
     *
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderName;

    /**
     * @example CUSTOMER
     *
     * @var string
     */
    public $senderType;

    /**
     * @example 1696126980371
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'content' => 'Content',
        'jobId' => 'JobId',
        'senderAvatarUrl' => 'SenderAvatarUrl',
        'senderId' => 'SenderId',
        'senderName' => 'SenderName',
        'senderType' => 'SenderType',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->senderAvatarUrl) {
            $res['SenderAvatarUrl'] = $this->senderAvatarUrl;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderName) {
            $res['SenderName'] = $this->senderName;
        }
        if (null !== $this->senderType) {
            $res['SenderType'] = $this->senderType;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['SenderAvatarUrl'])) {
            $model->senderAvatarUrl = $map['SenderAvatarUrl'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderName'])) {
            $model->senderName = $map['SenderName'];
        }
        if (isset($map['SenderType'])) {
            $model->senderType = $map['SenderType'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
