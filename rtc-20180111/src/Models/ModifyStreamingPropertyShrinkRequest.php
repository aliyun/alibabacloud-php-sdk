<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class ModifyStreamingPropertyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $viewContent;

    /**
     * @var string
     */
    public $viewSubscribersShrink;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'taskId' => 'TaskId',
        'viewContent' => 'ViewContent',
        'viewSubscribersShrink' => 'ViewSubscribers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->viewContent) {
            $res['ViewContent'] = $this->viewContent;
        }

        if (null !== $this->viewSubscribersShrink) {
            $res['ViewSubscribers'] = $this->viewSubscribersShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['ViewContent'])) {
            $model->viewContent = $map['ViewContent'];
        }

        if (isset($map['ViewSubscribers'])) {
            $model->viewSubscribersShrink = $map['ViewSubscribers'];
        }

        return $model;
    }
}
