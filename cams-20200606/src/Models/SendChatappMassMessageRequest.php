<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList;

class SendChatappMassMessageRequest extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $custWabaId;

    /**
     * @var string
     */
    public $fallBackContent;

    /**
     * @var int
     */
    public $fallBackDuration;

    /**
     * @var string
     */
    public $fallBackId;

    /**
     * @var string
     */
    public $fallBackRule;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $isvCode;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $language;

    /**
     * @var senderList[]
     */
    public $senderList;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'channelType' => 'ChannelType',
        'custSpaceId' => 'CustSpaceId',
        'custWabaId' => 'CustWabaId',
        'fallBackContent' => 'FallBackContent',
        'fallBackDuration' => 'FallBackDuration',
        'fallBackId' => 'FallBackId',
        'fallBackRule' => 'FallBackRule',
        'from' => 'From',
        'isvCode' => 'IsvCode',
        'label' => 'Label',
        'language' => 'Language',
        'senderList' => 'SenderList',
        'tag' => 'Tag',
        'taskId' => 'TaskId',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
        'ttl' => 'Ttl',
    ];

    public function validate()
    {
        if (\is_array($this->senderList)) {
            Model::validateArray($this->senderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->senderList) {
            if (\is_array($this->senderList)) {
                $res['SenderList'] = [];
                $n1 = 0;
                foreach ($this->senderList as $item1) {
                    $res['SenderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
            if (!empty($map['SenderList'])) {
                $model->senderList = [];
                $n1 = 0;
                foreach ($map['SenderList'] as $item1) {
                    $model->senderList[$n1++] = senderList::fromMap($item1);
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

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
