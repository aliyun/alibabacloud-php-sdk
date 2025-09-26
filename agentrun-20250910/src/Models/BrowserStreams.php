<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BrowserStreams extends Model
{
    /**
     * @var BrowserAutomationStream
     */
    public $automationStream;

    /**
     * @var BrowserLiveViewStream
     */
    public $liveViewStream;
    protected $_name = [
        'automationStream' => 'automationStream',
        'liveViewStream' => 'liveViewStream',
    ];

    public function validate()
    {
        if (null !== $this->automationStream) {
            $this->automationStream->validate();
        }
        if (null !== $this->liveViewStream) {
            $this->liveViewStream->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->automationStream) {
            $res['automationStream'] = null !== $this->automationStream ? $this->automationStream->toArray($noStream) : $this->automationStream;
        }

        if (null !== $this->liveViewStream) {
            $res['liveViewStream'] = null !== $this->liveViewStream ? $this->liveViewStream->toArray($noStream) : $this->liveViewStream;
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
        if (isset($map['automationStream'])) {
            $model->automationStream = BrowserAutomationStream::fromMap($map['automationStream']);
        }

        if (isset($map['liveViewStream'])) {
            $model->liveViewStream = BrowserLiveViewStream::fromMap($map['liveViewStream']);
        }

        return $model;
    }
}
