<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceCommand\payload\input\context;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'type' => 'type',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
