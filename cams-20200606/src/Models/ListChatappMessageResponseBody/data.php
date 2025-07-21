<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappMessageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $businessNumber;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $channelType;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $clientAcceptStatusName;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $clientReadStatus;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $clientReadStatusName;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $eventAction;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $eventActionName;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $failBackContent;

    /**
     * @example Y
     *
     * @var string
     */
    public $failBackFlag;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $failReason;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $languageCode;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $message;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $messageSource;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $messageStatus;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $messageStatusName;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $messageType;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $messageTypeName;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $month;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $sendTime;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $templateName;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $type;

    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $uniqueMessageId;

    /**
     * @example 示例值示例值示例值
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
