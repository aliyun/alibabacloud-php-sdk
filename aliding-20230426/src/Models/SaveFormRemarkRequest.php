<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class SaveFormRemarkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_PBKxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example 123456
     *
     * @var string
     */
    public $atUserId;

    /**
     * @description This parameter is required.
     *
     * @example instxxxx
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example instxxxx
     *
     * @var string
     */
    public $formInstanceId;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @example hexxxx
     *
     * @var int
     */
    public $replyId;

    /**
     * @description This parameter is required.
     *
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'        => 'AppType',
        'atUserId'       => 'AtUserId',
        'content'        => 'Content',
        'formInstanceId' => 'FormInstanceId',
        'language'       => 'Language',
        'replyId'        => 'ReplyId',
        'systemToken'    => 'SystemToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SaveFormRemarkRequest
     */
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
