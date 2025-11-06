<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class ModifyStreamingPropertyRequest extends Model
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
     * @var string[]
     */
    public $viewSubscribers;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'taskId' => 'TaskId',
        'viewContent' => 'ViewContent',
        'viewSubscribers' => 'ViewSubscribers',
    ];

    public function validate()
    {
        if (\is_array($this->viewSubscribers)) {
            Model::validateArray($this->viewSubscribers);
        }
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

        if (null !== $this->viewSubscribers) {
            if (\is_array($this->viewSubscribers)) {
                $res['ViewSubscribers'] = [];
                $n1 = 0;
                foreach ($this->viewSubscribers as $item1) {
                    $res['ViewSubscribers'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ViewSubscribers'])) {
                $model->viewSubscribers = [];
                $n1 = 0;
                foreach ($map['ViewSubscribers'] as $item1) {
                    $model->viewSubscribers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
