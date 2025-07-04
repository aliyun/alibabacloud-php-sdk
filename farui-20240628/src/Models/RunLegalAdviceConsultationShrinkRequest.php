<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;

class RunLegalAdviceConsultationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $assistantShrink;

    /**
     * @var string
     */
    public $extraShrink;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $threadShrink;
    protected $_name = [
        'appId' => 'appId',
        'assistantShrink' => 'assistant',
        'extraShrink' => 'extra',
        'stream' => 'stream',
        'threadShrink' => 'thread',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->assistantShrink) {
            $res['assistant'] = $this->assistantShrink;
        }

        if (null !== $this->extraShrink) {
            $res['extra'] = $this->extraShrink;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->threadShrink) {
            $res['thread'] = $this->threadShrink;
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
            $model->assistantShrink = $map['assistant'];
        }

        if (isset($map['extra'])) {
            $model->extraShrink = $map['extra'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['thread'])) {
            $model->threadShrink = $map['thread'];
        }

        return $model;
    }
}
