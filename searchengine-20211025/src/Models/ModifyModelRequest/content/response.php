<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelRequest\content;

use AlibabaCloud\Tea\Model;

class response extends Model
{
    /**
     * @example $.result.embeddings[*].embedding
     *
     * @var string
     */
    public $embeddings;
    protected $_name = [
        'embeddings' => 'embeddings',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->embeddings) {
            $res['embeddings'] = $this->embeddings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return response
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['embeddings'])) {
            $model->embeddings = $map['embeddings'];
        }

        return $model;
    }
}
