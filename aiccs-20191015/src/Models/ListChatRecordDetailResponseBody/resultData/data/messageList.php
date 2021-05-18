<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponseBody\resultData\data;

use AlibabaCloud\Tea\Model;

class messageList extends Model
{
    /**
     * @var string
     */
    public $senderName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $senderType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $msgType;
    protected $_name = [
        'senderName' => 'SenderName',
        'content'    => 'Content',
        'senderType' => 'SenderType',
        'createTime' => 'CreateTime',
        'msgType'    => 'MsgType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->senderName) {
            $res['SenderName'] = $this->senderName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->senderType) {
            $res['SenderType'] = $this->senderType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
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
        if (isset($map['SenderName'])) {
            $model->senderName = $map['SenderName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SenderType'])) {
            $model->senderType = $map['SenderType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }

        return $model;
    }
}
