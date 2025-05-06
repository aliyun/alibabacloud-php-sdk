<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;

class RunContractRuleGenerationShrinkRequest extends Model
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
     * @var bool
     */
    public $stream;
    protected $_name = [
        'appId' => 'appId',
        'assistantShrink' => 'assistant',
        'stream' => 'stream',
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

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
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

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
