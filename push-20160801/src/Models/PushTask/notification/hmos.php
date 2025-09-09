<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification;

use AlibabaCloud\Dara\Model;

class hmos extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $badgeAddNum;

    /**
     * @var int
     */
    public $badgeSetNum;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $extParameters;

    /**
     * @var string
     */
    public $extensionExtraData;

    /**
     * @var bool
     */
    public $extensionPush;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string[]
     */
    public $inboxContent;

    /**
     * @var int
     */
    public $notifyId;

    /**
     * @var string
     */
    public $receiptId;

    /**
     * @var string
     */
    public $renderStyle;

    /**
     * @var string
     */
    public $slotType;

    /**
     * @var bool
     */
    public $testMessage;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'action' => 'Action',
        'badgeAddNum' => 'BadgeAddNum',
        'badgeSetNum' => 'BadgeSetNum',
        'category' => 'Category',
        'extParameters' => 'ExtParameters',
        'extensionExtraData' => 'ExtensionExtraData',
        'extensionPush' => 'ExtensionPush',
        'imageUrl' => 'ImageUrl',
        'inboxContent' => 'InboxContent',
        'notifyId' => 'NotifyId',
        'receiptId' => 'ReceiptId',
        'renderStyle' => 'RenderStyle',
        'slotType' => 'SlotType',
        'testMessage' => 'TestMessage',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        if (\is_array($this->inboxContent)) {
            Model::validateArray($this->inboxContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->badgeAddNum) {
            $res['BadgeAddNum'] = $this->badgeAddNum;
        }

        if (null !== $this->badgeSetNum) {
            $res['BadgeSetNum'] = $this->badgeSetNum;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->extParameters) {
            $res['ExtParameters'] = $this->extParameters;
        }

        if (null !== $this->extensionExtraData) {
            $res['ExtensionExtraData'] = $this->extensionExtraData;
        }

        if (null !== $this->extensionPush) {
            $res['ExtensionPush'] = $this->extensionPush;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->inboxContent) {
            if (\is_array($this->inboxContent)) {
                $res['InboxContent'] = [];
                $n1 = 0;
                foreach ($this->inboxContent as $item1) {
                    $res['InboxContent'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notifyId) {
            $res['NotifyId'] = $this->notifyId;
        }

        if (null !== $this->receiptId) {
            $res['ReceiptId'] = $this->receiptId;
        }

        if (null !== $this->renderStyle) {
            $res['RenderStyle'] = $this->renderStyle;
        }

        if (null !== $this->slotType) {
            $res['SlotType'] = $this->slotType;
        }

        if (null !== $this->testMessage) {
            $res['TestMessage'] = $this->testMessage;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['BadgeAddNum'])) {
            $model->badgeAddNum = $map['BadgeAddNum'];
        }

        if (isset($map['BadgeSetNum'])) {
            $model->badgeSetNum = $map['BadgeSetNum'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ExtParameters'])) {
            $model->extParameters = $map['ExtParameters'];
        }

        if (isset($map['ExtensionExtraData'])) {
            $model->extensionExtraData = $map['ExtensionExtraData'];
        }

        if (isset($map['ExtensionPush'])) {
            $model->extensionPush = $map['ExtensionPush'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['InboxContent'])) {
            if (!empty($map['InboxContent'])) {
                $model->inboxContent = [];
                $n1 = 0;
                foreach ($map['InboxContent'] as $item1) {
                    $model->inboxContent[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NotifyId'])) {
            $model->notifyId = $map['NotifyId'];
        }

        if (isset($map['ReceiptId'])) {
            $model->receiptId = $map['ReceiptId'];
        }

        if (isset($map['RenderStyle'])) {
            $model->renderStyle = $map['RenderStyle'];
        }

        if (isset($map['SlotType'])) {
            $model->slotType = $map['SlotType'];
        }

        if (isset($map['TestMessage'])) {
            $model->testMessage = $map['TestMessage'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
