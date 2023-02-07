<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListChatRecordDetailResponseBody\resultData\data;

use AlibabaCloud\Tea\Model;

class messageList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 1614578400000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example MSG
     *
     * @var string
     */
    public $msgType;

    /**
     * @example account1
     *
     * @var string
     */
    public $senderName;

    /**
     * @example 2
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return messageList
     */
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
