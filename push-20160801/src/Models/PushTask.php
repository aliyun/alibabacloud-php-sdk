<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\message;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\options;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\target;

class PushTask extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var message
     */
    public $message;

    /**
     * @var notification
     */
    public $notification;

    /**
     * @var options
     */
    public $options;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'action' => 'Action',
        'message' => 'Message',
        'notification' => 'Notification',
        'options' => 'Options',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (null !== $this->message) {
            $this->message->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (null !== $this->options) {
            $this->options->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->message) {
            $res['Message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
        }

        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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

        if (isset($map['Message'])) {
            $model->message = message::fromMap($map['Message']);
        }

        if (isset($map['Notification'])) {
            $model->notification = notification::fromMap($map['Notification']);
        }

        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }

        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        return $model;
    }
}
