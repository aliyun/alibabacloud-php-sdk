<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAIStaffConversationResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $botId;

    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $conversationId;

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
    protected $_name = [
        'botId' => 'BotId',
        'chatId' => 'ChatId',
        'conversationId' => 'ConversationId',
        'sectionId' => 'SectionId',
        'siteId' => 'SiteId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }

        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }

        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
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

        return $model;
    }
}
