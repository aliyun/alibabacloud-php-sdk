<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class SaveFormRemarkRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $atUserId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $formInstanceId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $replyId;

    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType' => 'AppType',
        'atUserId' => 'AtUserId',
        'content' => 'Content',
        'formInstanceId' => 'FormInstanceId',
        'language' => 'Language',
        'replyId' => 'ReplyId',
        'systemToken' => 'SystemToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->atUserId) {
            $res['AtUserId'] = $this->atUserId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->formInstanceId) {
            $res['FormInstanceId'] = $this->formInstanceId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->replyId) {
            $res['ReplyId'] = $this->replyId;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['AtUserId'])) {
            $model->atUserId = $map['AtUserId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FormInstanceId'])) {
            $model->formInstanceId = $map['FormInstanceId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ReplyId'])) {
            $model->replyId = $map['ReplyId'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
