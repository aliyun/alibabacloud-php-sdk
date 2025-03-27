<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class TextResult extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Text
     */
    public $text;
    protected $_name = [
        'requestId' => 'requestId',
        'text' => 'text',
    ];

    public function validate()
    {
        if (null !== $this->text) {
            $this->text->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->text) {
            $res['text'] = null !== $this->text ? $this->text->toArray($noStream) : $this->text;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['text'])) {
            $model->text = Text::fromMap($map['text']);
        }

        return $model;
    }
}
