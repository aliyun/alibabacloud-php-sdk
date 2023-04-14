<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList;
use AlibabaCloud\Tea\Model;

class SendChatappMassMessageRequest extends Model
{
    /**
     * @description The channel type. Valid values: whatsapp, viber, and line.
     *
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
     * @description The phone number of the message sender.
     *
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
     * @description The language. For more information about language codes, see [Language codes](~~463420~~).
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The list of phone numbers that receive the message.
     *
     * @var senderList[]
     */
    public $senderList;

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
        'from'             => 'From',
        'isvCode'          => 'IsvCode',
        'label'            => 'Label',
        'language'         => 'Language',
        'senderList'       => 'SenderList',
        'tag'              => 'Tag',
        'taskId'           => 'TaskId',
        'templateCode'     => 'TemplateCode',
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
        if (null !== $this->senderList) {
            $res['SenderList'] = [];
            if (null !== $this->senderList && \is_array($this->senderList)) {
                $n = 0;
                foreach ($this->senderList as $item) {
                    $res['SenderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendChatappMassMessageRequest
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
            if (!empty($map['SenderList'])) {
                $model->senderList = [];
                $n                 = 0;
                foreach ($map['SenderList'] as $item) {
                    $model->senderList[$n++] = null !== $item ? senderList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
