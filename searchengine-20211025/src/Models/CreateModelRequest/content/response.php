<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content;

use AlibabaCloud\Dara\Model;

class response extends Model
{
    /**
     * @var string
     */
    public $embeddings;
    protected $_name = [
        'embeddings' => 'embeddings',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embeddings) {
            $res['embeddings'] = $this->embeddings;
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
        if (isset($map['embeddings'])) {
            $model->embeddings = $map['embeddings'];
        }

        return $model;
    }
}
