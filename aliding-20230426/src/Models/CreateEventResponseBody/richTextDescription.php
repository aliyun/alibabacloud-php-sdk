<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponseBody;

use AlibabaCloud\Tea\Model;

class richTextDescription extends Model
{
    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'text' => 'text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return richTextDescription
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
