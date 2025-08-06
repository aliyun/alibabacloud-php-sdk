<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeResponseBody;

use AlibabaCloud\Dara\Model;

class hyperlinks extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'type' => 'type',
        'link' => 'link',
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

        if (null !== $this->link) {
            $res['link'] = $this->link;
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

        if (isset($map['link'])) {
            $model->link = $map['link'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
