<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseOutputItemDone\item;

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

    /**
     * @var string
     */
    public $transcript;
    protected $_name = [
        'type' => 'type',
        'text' => 'text',
        'transcript' => 'transcript',
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

        if (null !== $this->transcript) {
            $res['transcript'] = $this->transcript;
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

        if (isset($map['transcript'])) {
            $model->transcript = $map['transcript'];
        }

        return $model;
    }
}
