<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\AssociateResponseBody;

use AlibabaCloud\Dara\Model;

class associate extends Model
{
    /**
     * @var string
     */
    public $meta;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'meta' => 'Meta',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
