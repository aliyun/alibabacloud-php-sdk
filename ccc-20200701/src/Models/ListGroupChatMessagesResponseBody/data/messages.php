<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListGroupChatMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var bool
     */
    public $recalled;
    /**
     * @var string
     */
    public $senderAvatarUrl;
    /**
     * @var string
     */
    public $senderId;
    /**
     * @var string
     */
    public $senderName;
    /**
     * @var string
     */
    public $senderType;
    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'content'         => 'Content',
        'jobId'           => 'JobId',
        'recalled'        => 'Recalled',
        'senderAvatarUrl' => 'SenderAvatarUrl',
        'senderId'        => 'SenderId',
        'senderName'      => 'SenderName',
        'senderType'      => 'SenderType',
        'timestamp'       => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->recalled) {
            $res['Recalled'] = $this->recalled;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Recalled'])) {
            $model->recalled = $map['Recalled'];
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
