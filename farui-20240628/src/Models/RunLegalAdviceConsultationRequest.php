<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationRequest\assistant;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationRequest\extra;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunLegalAdviceConsultationRequest\thread;

class RunLegalAdviceConsultationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var assistant
     */
    public $assistant;

    /**
     * @var extra
     */
    public $extra;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var thread
     */
    public $thread;
    protected $_name = [
        'appId' => 'appId',
        'assistant' => 'assistant',
        'extra' => 'extra',
        'stream' => 'stream',
        'thread' => 'thread',
    ];

    public function validate()
    {
        if (null !== $this->assistant) {
            $this->assistant->validate();
        }
        if (null !== $this->extra) {
            $this->extra->validate();
        }
        if (null !== $this->thread) {
            $this->thread->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->assistant) {
            $res['assistant'] = null !== $this->assistant ? $this->assistant->toArray($noStream) : $this->assistant;
        }

        if (null !== $this->extra) {
            $res['extra'] = null !== $this->extra ? $this->extra->toArray($noStream) : $this->extra;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->thread) {
            $res['thread'] = null !== $this->thread ? $this->thread->toArray($noStream) : $this->thread;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['assistant'])) {
            $model->assistant = assistant::fromMap($map['assistant']);
        }

        if (isset($map['extra'])) {
            $model->extra = extra::fromMap($map['extra']);
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['thread'])) {
            $model->thread = thread::fromMap($map['thread']);
        }

        return $model;
    }
}
