<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class NotifyAgentRequest extends Model
{
    /**
     * @example aec****
     *
     * @var string
     */
    public $appId;

    /**
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @example {\\"color\\":\\"blue\\"}
     *
     * @var string
     */
    public $customAttribute;

    /**
     * @example true
     *
     * @var bool
     */
    public $interruptable;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'customAttribute' => 'CustomAttribute',
        'interruptable' => 'Interruptable',
        'message' => 'Message',
        'priority' => 'Priority',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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

    /**
     * @param array $map
     *
     * @return NotifyAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
