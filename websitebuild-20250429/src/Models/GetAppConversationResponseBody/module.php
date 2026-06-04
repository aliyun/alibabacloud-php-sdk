<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppConversationResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $botId;

    /**
     * @var int
     */
    public $chatNum;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @var string
     */
    public $sectionId;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'aliyunPk' => 'AliyunPk',
        'botId' => 'BotId',
        'chatNum' => 'ChatNum',
        'conversationId' => 'ConversationId',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'metaData' => 'MetaData',
        'sectionId' => 'SectionId',
        'siteId' => 'SiteId',
        'title' => 'Title',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunPk) {
            $res['AliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }

        if (null !== $this->chatNum) {
            $res['ChatNum'] = $this->chatNum;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->metaData) {
            $res['MetaData'] = $this->metaData;
        }

        if (null !== $this->sectionId) {
            $res['SectionId'] = $this->sectionId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AliyunPk'])) {
            $model->aliyunPk = $map['AliyunPk'];
        }

        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }

        if (isset($map['ChatNum'])) {
            $model->chatNum = $map['ChatNum'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['MetaData'])) {
            $model->metaData = $map['MetaData'];
        }

        if (isset($map['SectionId'])) {
            $model->sectionId = $map['SectionId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
