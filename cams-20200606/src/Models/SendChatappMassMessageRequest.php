<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList;
use AlibabaCloud\Tea\Model;

class SendChatappMassMessageRequest extends Model
{
    /**
     * @description The type of the message channel. Valid values:
     *
     *   **whatsapp**
     *   viber (under development)
     *   line (under development)
     *
     * @example whatsapp
     *
     * @var string
     */
    public $channelType;

    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The unique identifier of the WhatsApp account that you register.
     *
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description Fallback message content.
     *
     * @example This is a fallback message.
     *
     * @var string
     */
    public $fallBackContent;

    /**
     * @description Fallback strategy id. Fallback Strategy can be created on the ChatApp console.
     *
     * @example S00001
     *
     * @var string
     */
    public $fallBackId;

    /**
     * @description The mobile phone number of the message sender.
     *
     * <notice>You can specify a mobile phone number that is registered for a WhatsApp account and is approved in the ChatApp console.</notice>
     * @example 861387777****
     *
     * @var string
     */
    public $from;

    /**
     * @description Assigned by ISV for RAM user authentication and authorization.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The language that is used in the message template.
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description Target number and parameter list.
     *
     * @var senderList[]
     */
    public $senderList;

    /**
     * @description User-define ID to identify a single batch of messages.
     *
     * @example 100000001
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The code of the message template.
     *
     * @example 744c4b5c79c9432497a075bdfca36bf5
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'channelType'     => 'ChannelType',
        'custSpaceId'     => 'CustSpaceId',
        'custWabaId'      => 'CustWabaId',
        'fallBackContent' => 'FallBackContent',
        'fallBackId'      => 'FallBackId',
        'from'            => 'From',
        'isvCode'         => 'IsvCode',
        'language'        => 'Language',
        'senderList'      => 'SenderList',
        'taskId'          => 'TaskId',
        'templateCode'    => 'TemplateCode',
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
        if (null !== $this->fallBackId) {
            $res['FallBackId'] = $this->fallBackId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
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
        if (isset($map['FallBackId'])) {
            $model->fallBackId = $map['FallBackId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
