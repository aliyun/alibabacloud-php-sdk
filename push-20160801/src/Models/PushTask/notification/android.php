<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

class android extends Model
{
    /**
     * @var string
     */
    public $badgeActivity;

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
    public $channelId;

    /**
     * @var string
     */
    public $extParameters;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string[]
     */
    public $inboxContent;

    /**
     * @var string
     */
    public $music;

    /**
     * @var int
     */
    public $notifyId;

    /**
     * @var options
     */
    public $options;

    /**
     * @var string
     */
    public $pictureUrl;

    /**
     * @var string
     */
    public $renderStyle;

    /**
     * @var bool
     */
    public $testMessage;

    /**
     * @var string
     */
    public $vendorChannelActivity;
    protected $_name = [
        'badgeActivity' => 'BadgeActivity',
        'badgeAddNum' => 'BadgeAddNum',
        'badgeSetNum' => 'BadgeSetNum',
        'channelId' => 'ChannelId',
        'extParameters' => 'ExtParameters',
        'groupId' => 'GroupId',
        'imageUrl' => 'ImageUrl',
        'inboxContent' => 'InboxContent',
        'music' => 'Music',
        'notifyId' => 'NotifyId',
        'options' => 'Options',
        'pictureUrl' => 'PictureUrl',
        'renderStyle' => 'RenderStyle',
        'testMessage' => 'TestMessage',
        'vendorChannelActivity' => 'VendorChannelActivity',
    ];

    public function validate()
    {
        if (\is_array($this->inboxContent)) {
            Model::validateArray($this->inboxContent);
        }
        if (null !== $this->options) {
            $this->options->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->badgeActivity) {
            $res['BadgeActivity'] = $this->badgeActivity;
        }

        if (null !== $this->badgeAddNum) {
            $res['BadgeAddNum'] = $this->badgeAddNum;
        }

        if (null !== $this->badgeSetNum) {
            $res['BadgeSetNum'] = $this->badgeSetNum;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->extParameters) {
            $res['ExtParameters'] = $this->extParameters;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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

        if (null !== $this->music) {
            $res['Music'] = $this->music;
        }

        if (null !== $this->notifyId) {
            $res['NotifyId'] = $this->notifyId;
        }

        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
        }

        if (null !== $this->pictureUrl) {
            $res['PictureUrl'] = $this->pictureUrl;
        }

        if (null !== $this->renderStyle) {
            $res['RenderStyle'] = $this->renderStyle;
        }

        if (null !== $this->testMessage) {
            $res['TestMessage'] = $this->testMessage;
        }

        if (null !== $this->vendorChannelActivity) {
            $res['VendorChannelActivity'] = $this->vendorChannelActivity;
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
        if (isset($map['BadgeActivity'])) {
            $model->badgeActivity = $map['BadgeActivity'];
        }

        if (isset($map['BadgeAddNum'])) {
            $model->badgeAddNum = $map['BadgeAddNum'];
        }

        if (isset($map['BadgeSetNum'])) {
            $model->badgeSetNum = $map['BadgeSetNum'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ExtParameters'])) {
            $model->extParameters = $map['ExtParameters'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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

        if (isset($map['Music'])) {
            $model->music = $map['Music'];
        }

        if (isset($map['NotifyId'])) {
            $model->notifyId = $map['NotifyId'];
        }

        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }

        if (isset($map['PictureUrl'])) {
            $model->pictureUrl = $map['PictureUrl'];
        }

        if (isset($map['RenderStyle'])) {
            $model->renderStyle = $map['RenderStyle'];
        }

        if (isset($map['TestMessage'])) {
            $model->testMessage = $map['TestMessage'];
        }

        if (isset($map['VendorChannelActivity'])) {
            $model->vendorChannelActivity = $map['VendorChannelActivity'];
        }

        return $model;
    }
}
