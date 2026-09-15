<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaasQIService\V20260831\Models\PaChatCompletionStreamRequest;

use AlibabaCloud\Dara\Model;

class chatTemplateKwargs extends Model
{
    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var bool
     */
    public $preserveThinking;
    protected $_name = [
        'enableThinking' => 'enableThinking',
        'preserveThinking' => 'preserveThinking',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableThinking) {
            $res['enableThinking'] = $this->enableThinking;
        }

        if (null !== $this->preserveThinking) {
            $res['preserveThinking'] = $this->preserveThinking;
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
        if (isset($map['enableThinking'])) {
            $model->enableThinking = $map['enableThinking'];
        }

        if (isset($map['preserveThinking'])) {
            $model->preserveThinking = $map['preserveThinking'];
        }

        return $model;
    }
}
