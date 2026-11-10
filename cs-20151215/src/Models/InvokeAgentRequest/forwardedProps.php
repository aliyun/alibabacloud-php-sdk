<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest;

use AlibabaCloud\Dara\Model;

class forwardedProps extends Model
{
    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'enableThinking' => 'enableThinking',
        'language' => 'language',
        'source' => 'source',
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

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
