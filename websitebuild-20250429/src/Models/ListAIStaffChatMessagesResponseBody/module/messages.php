<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAIStaffChatMessagesResponseBody\module;

use AlibabaCloud\Dara\Model;

class messages extends Model
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
    public $chatStatus;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var mixed[]
     */
    public $metaData;

    /**
     * @var string
     */
    public $role;

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
    public $type;
    protected $_name = [
        'botId' => 'BotId',
        'chatId' => 'ChatId',
        'chatStatus' => 'ChatStatus',
        'content' => 'Content',
        'contentType' => 'ContentType',
        'conversationId' => 'ConversationId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'messageId' => 'MessageId',
        'metaData' => 'MetaData',
        'role' => 'Role',
        'sectionId' => 'SectionId',
        'siteId' => 'SiteId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->metaData)) {
            Model::validateArray($this->metaData);
        }
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

        if (null !== $this->chatStatus) {
            $res['ChatStatus'] = $this->chatStatus;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->metaData) {
            if (\is_array($this->metaData)) {
                $res['MetaData'] = [];
                foreach ($this->metaData as $key1 => $value1) {
                    $res['MetaData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->sectionId) {
            $res['SectionId'] = $this->sectionId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['ChatStatus'])) {
            $model->chatStatus = $map['ChatStatus'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['MetaData'])) {
            if (!empty($map['MetaData'])) {
                $model->metaData = [];
                foreach ($map['MetaData'] as $key1 => $value1) {
                    $model->metaData[$key1] = $value1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['SectionId'])) {
            $model->sectionId = $map['SectionId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
