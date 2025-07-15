<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupMessagesResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupMessagesResponseBody\messageList\sender;
use AlibabaCloud\Tea\Model;

class messageList extends Model
{
    /**
     * @description The message body.
     *
     * @example step2 helo, cc group
     *
     * @var string
     */
    public $body;

    /**
     * @description The ID of the message.
     *
     * @example c-1-1-0
     *
     * @var string
     */
    public $msgTid;

    /**
     * @description The type of the message.
     *
     * @example 2
     *
     * @var int
     */
    public $msgType;

    /**
     * @description The details about the user who sent the message.
     *
     * @var sender
     */
    public $sender;

    /**
     * @description The sequence number of the message.
     *
     * @example 1
     *
     * @var int
     */
    public $seqNumber;

    /**
     * @description The time when the message was sent. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1697081134
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The total number of messages.
     *
     * @example 1
     *
     * @var int
     */
    public $totalMessages;
    protected $_name = [
        'body' => 'Body',
        'msgTid' => 'MsgTid',
        'msgType' => 'MsgType',
        'sender' => 'Sender',
        'seqNumber' => 'SeqNumber',
        'timestamp' => 'Timestamp',
        'totalMessages' => 'TotalMessages',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->msgTid) {
            $res['MsgTid'] = $this->msgTid;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }
        if (null !== $this->sender) {
            $res['Sender'] = null !== $this->sender ? $this->sender->toMap() : null;
        }
        if (null !== $this->seqNumber) {
            $res['SeqNumber'] = $this->seqNumber;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->totalMessages) {
            $res['TotalMessages'] = $this->totalMessages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['MsgTid'])) {
            $model->msgTid = $map['MsgTid'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }
        if (isset($map['Sender'])) {
            $model->sender = sender::fromMap($map['Sender']);
        }
        if (isset($map['SeqNumber'])) {
            $model->seqNumber = $map['SeqNumber'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TotalMessages'])) {
            $model->totalMessages = $map['TotalMessages'];
        }

        return $model;
    }
}
