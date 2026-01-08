<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappMessageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $businessNumber;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $clientAcceptStatusName;

    /**
     * @var string
     */
    public $clientReadStatus;

    /**
     * @var string
     */
    public $clientReadStatusName;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $eventAction;

    /**
     * @var string
     */
    public $eventActionName;

    /**
     * @var string
     */
    public $failBackContent;

    /**
     * @var string
     */
    public $failBackFlag;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $languageCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $messageSource;

    /**
     * @var string
     */
    public $messageStatus;

    /**
     * @var string
     */
    public $messageStatusName;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $messageTypeName;

    /**
     * @var string
     */
    public $month;

    /**
     * @var string
     */
    public $sendTime;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uniqueMessageId;

    /**
     * @var string
     */
    public $userNumber;
    protected $_name = [
        'businessNumber' => 'BusinessNumber',
        'channelType' => 'ChannelType',
        'clientAcceptStatusName' => 'ClientAcceptStatusName',
        'clientReadStatus' => 'ClientReadStatus',
        'clientReadStatusName' => 'ClientReadStatusName',
        'conversationId' => 'ConversationId',
        'eventAction' => 'EventAction',
        'eventActionName' => 'EventActionName',
        'failBackContent' => 'FailBackContent',
        'failBackFlag' => 'FailBackFlag',
        'failReason' => 'FailReason',
        'languageCode' => 'LanguageCode',
        'message' => 'Message',
        'messageId' => 'MessageId',
        'messageSource' => 'MessageSource',
        'messageStatus' => 'MessageStatus',
        'messageStatusName' => 'MessageStatusName',
        'messageType' => 'MessageType',
        'messageTypeName' => 'MessageTypeName',
        'month' => 'Month',
        'sendTime' => 'SendTime',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'type' => 'Type',
        'uniqueMessageId' => 'UniqueMessageId',
        'userNumber' => 'UserNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessNumber) {
            $res['BusinessNumber'] = $this->businessNumber;
        }

        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->clientAcceptStatusName) {
            $res['ClientAcceptStatusName'] = $this->clientAcceptStatusName;
        }

        if (null !== $this->clientReadStatus) {
            $res['ClientReadStatus'] = $this->clientReadStatus;
        }

        if (null !== $this->clientReadStatusName) {
            $res['ClientReadStatusName'] = $this->clientReadStatusName;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->eventAction) {
            $res['EventAction'] = $this->eventAction;
        }

        if (null !== $this->eventActionName) {
            $res['EventActionName'] = $this->eventActionName;
        }

        if (null !== $this->failBackContent) {
            $res['FailBackContent'] = $this->failBackContent;
        }

        if (null !== $this->failBackFlag) {
            $res['FailBackFlag'] = $this->failBackFlag;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->messageSource) {
            $res['MessageSource'] = $this->messageSource;
        }

        if (null !== $this->messageStatus) {
            $res['MessageStatus'] = $this->messageStatus;
        }

        if (null !== $this->messageStatusName) {
            $res['MessageStatusName'] = $this->messageStatusName;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->messageTypeName) {
            $res['MessageTypeName'] = $this->messageTypeName;
        }

        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }

        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uniqueMessageId) {
            $res['UniqueMessageId'] = $this->uniqueMessageId;
        }

        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
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
        if (isset($map['BusinessNumber'])) {
            $model->businessNumber = $map['BusinessNumber'];
        }

        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['ClientAcceptStatusName'])) {
            $model->clientAcceptStatusName = $map['ClientAcceptStatusName'];
        }

        if (isset($map['ClientReadStatus'])) {
            $model->clientReadStatus = $map['ClientReadStatus'];
        }

        if (isset($map['ClientReadStatusName'])) {
            $model->clientReadStatusName = $map['ClientReadStatusName'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['EventAction'])) {
            $model->eventAction = $map['EventAction'];
        }

        if (isset($map['EventActionName'])) {
            $model->eventActionName = $map['EventActionName'];
        }

        if (isset($map['FailBackContent'])) {
            $model->failBackContent = $map['FailBackContent'];
        }

        if (isset($map['FailBackFlag'])) {
            $model->failBackFlag = $map['FailBackFlag'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['MessageSource'])) {
            $model->messageSource = $map['MessageSource'];
        }

        if (isset($map['MessageStatus'])) {
            $model->messageStatus = $map['MessageStatus'];
        }

        if (isset($map['MessageStatusName'])) {
            $model->messageStatusName = $map['MessageStatusName'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['MessageTypeName'])) {
            $model->messageTypeName = $map['MessageTypeName'];
        }

        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }

        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UniqueMessageId'])) {
            $model->uniqueMessageId = $map['UniqueMessageId'];
        }

        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }

        return $model;
    }
}
