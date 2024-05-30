<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class SendChatappMassMessageShrinkRequest extends Model
{
    /**
     * @description The channel type. Valid values: whatsapp, viber, and line.
     *
     * This parameter is required.
     * @example whatsapp
     *
     * @var string
     */
    public $channelType;

    /**
     * @description The space ID of the user.
     *
     * @example 28251486512358****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ID of the WhatsApp Business account under the ISV account.
     *
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description The fallback content.
     *
     * @example Fallback message
     *
     * @var string
     */
    public $fallBackContent;

    /**
     * @example 120
     *
     * @var int
     */
    public $fallBackDuration;

    /**
     * @description The ID of the fallback strategy.
     *
     * @example S00001
     *
     * @var string
     */
    public $fallBackId;

    /**
     * @description The fallback rule.
     *
     * >  Valid values:
     *
     *   undelivered: A fallback is triggered if the WhatsApp message is not delivered to clients. When the WhatsApp message is being sent, the template parameters are verified. If the parameters fail to pass the verification, the message fails to be sent. Whether the template and phone number are prohibited is not verified. By default, this value is used when FallBackRule is left empty.
     *
     *   sentfailed: A fallback is triggered even if the template parameters including variables fail to pass the verification. If the channelType, type, messageType, to, and from parameters fail to pass the verification, a fallback is not triggered.
     *
     * @example undelivered
     *
     * @var string
     */
    public $fallBackRule;

    /**
     * @description The phone number of the message sender.
     *
     * This parameter is required.
     * @example 861387777****
     *
     * @var string
     */
    public $from;

    /**
     * @description The ISV verification code, which is used to verify whether the user is authorized by the ISV account.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The message type when the ChannelType parameter is set to viber. Valid values: promotion and transaction.
     *
     * @example promotion
     *
     * @var string
     */
    public $label;

    /**
     * @description The language. For more information about language codes, see [Language codes](https://help.aliyun.com/document_detail/463420.html).
     *
     * This parameter is required.
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The phone numbers to which the message is sent.
     *
     * This parameter is required.
     * @var string
     */
    public $senderListShrink;

    /**
     * @description The tag information when the ChannelType parameter is set to viber.
     *
     * @example tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description The ID of the task.
     *
     * @example 100000001
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The encoding of the message template.
     *
     * @example 744c4b5c79c9432497a075bdfca36bf5
     *
     * @var string
     */
    public $templateCode;

    /**
     * @example test_name
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The timeout period for sending messages when the ChannelType parameter is set to viber. Valid values: 30 to 1209600. Unit: seconds.
     *
     * @example 50
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'channelType'      => 'ChannelType',
        'custSpaceId'      => 'CustSpaceId',
        'custWabaId'       => 'CustWabaId',
        'fallBackContent'  => 'FallBackContent',
        'fallBackDuration' => 'FallBackDuration',
        'fallBackId'       => 'FallBackId',
        'fallBackRule'     => 'FallBackRule',
        'from'             => 'From',
        'isvCode'          => 'IsvCode',
        'label'            => 'Label',
        'language'         => 'Language',
        'senderListShrink' => 'SenderList',
        'tag'              => 'Tag',
        'taskId'           => 'TaskId',
        'templateCode'     => 'TemplateCode',
        'templateName'     => 'TemplateName',
        'ttl'              => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->fallBackContent) {
            $res['FallBackContent'] = $this->fallBackContent;
        }
        if (null !== $this->fallBackDuration) {
            $res['FallBackDuration'] = $this->fallBackDuration;
        }
        if (null !== $this->fallBackId) {
            $res['FallBackId'] = $this->fallBackId;
        }
        if (null !== $this->fallBackRule) {
            $res['FallBackRule'] = $this->fallBackRule;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->senderListShrink) {
            $res['SenderList'] = $this->senderListShrink;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendChatappMassMessageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['FallBackContent'])) {
            $model->fallBackContent = $map['FallBackContent'];
        }
        if (isset($map['FallBackDuration'])) {
            $model->fallBackDuration = $map['FallBackDuration'];
        }
        if (isset($map['FallBackId'])) {
            $model->fallBackId = $map['FallBackId'];
        }
        if (isset($map['FallBackRule'])) {
            $model->fallBackRule = $map['FallBackRule'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['SenderList'])) {
            $model->senderListShrink = $map['SenderList'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
