<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponseBody\resultData\data;

use AlibabaCloud\Dara\Model;

class messageList extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $msgType;
    /**
     * @var string
     */
    public $senderName;
    /**
     * @var int
     */
    public $senderType;
    protected $_name = [
        'content'    => 'Content',
        'createTime' => 'CreateTime',
        'msgType'    => 'MsgType',
        'senderName' => 'SenderName',
        'senderType' => 'SenderType',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }

        if (null !== $this->senderName) {
            $res['SenderName'] = $this->senderName;
        }

        if (null !== $this->senderType) {
            $res['SenderType'] = $this->senderType;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }

        if (isset($map['SenderName'])) {
            $model->senderName = $map['SenderName'];
        }

        if (isset($map['SenderType'])) {
            $model->senderType = $map['SenderType'];
        }

        return $model;
    }
}
