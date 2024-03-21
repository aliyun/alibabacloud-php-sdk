<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SendMessageToUserShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $receiverNickName;

    /**
     * @var string
     */
    public $senderNickName;

    /**
     * @var string
     */
    public $templateDataShrink;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'receiverNickName'   => 'ReceiverNickName',
        'senderNickName'     => 'SenderNickName',
        'templateDataShrink' => 'TemplateData',
        'templateId'         => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiverNickName) {
            $res['ReceiverNickName'] = $this->receiverNickName;
        }
        if (null !== $this->senderNickName) {
            $res['SenderNickName'] = $this->senderNickName;
        }
        if (null !== $this->templateDataShrink) {
            $res['TemplateData'] = $this->templateDataShrink;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageToUserShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiverNickName'])) {
            $model->receiverNickName = $map['ReceiverNickName'];
        }
        if (isset($map['SenderNickName'])) {
            $model->senderNickName = $map['SenderNickName'];
        }
        if (isset($map['TemplateData'])) {
            $model->templateDataShrink = $map['TemplateData'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
