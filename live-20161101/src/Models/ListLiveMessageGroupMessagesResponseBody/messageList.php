<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupMessagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageGroupMessagesResponseBody\messageList\sender;

class messageList extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $msgTid;

    /**
     * @var int
     */
    public $msgType;

    /**
     * @var sender
     */
    public $sender;

    /**
     * @var int
     */
    public $seqNumber;

    /**
     * @var int
     */
    public $timestamp;

    /**
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

    public function validate()
    {
        if (null !== $this->sender) {
            $this->sender->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Sender'] = null !== $this->sender ? $this->sender->toArray($noStream) : $this->sender;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
