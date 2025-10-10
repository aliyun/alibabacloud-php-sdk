<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\NotifyAgentRequest\backgroundMusic;

class NotifyAgentRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var backgroundMusic
     */
    public $backgroundMusic;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $customAttribute;

    /**
     * @var bool
     */
    public $interruptable;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId' => 'AppId',
        'backgroundMusic' => 'BackgroundMusic',
        'channelId' => 'ChannelId',
        'customAttribute' => 'CustomAttribute',
        'interruptable' => 'Interruptable',
        'message' => 'Message',
        'priority' => 'Priority',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->backgroundMusic) {
            $this->backgroundMusic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->backgroundMusic) {
            $res['BackgroundMusic'] = null !== $this->backgroundMusic ? $this->backgroundMusic->toArray($noStream) : $this->backgroundMusic;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->customAttribute) {
            $res['CustomAttribute'] = $this->customAttribute;
        }

        if (null !== $this->interruptable) {
            $res['Interruptable'] = $this->interruptable;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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

        if (isset($map['BackgroundMusic'])) {
            $model->backgroundMusic = backgroundMusic::fromMap($map['BackgroundMusic']);
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CustomAttribute'])) {
            $model->customAttribute = $map['CustomAttribute'];
        }

        if (isset($map['Interruptable'])) {
            $model->interruptable = $map['Interruptable'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
