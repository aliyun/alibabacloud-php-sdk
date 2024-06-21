<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponseBody\result;

use AlibabaCloud\Tea\Model;

class embeddings extends Model
{
    /**
     * @var float[]
     */
    public $embedding;

    /**
     * @var int
     */
    public $index;
    protected $_name = [
        'embedding' => 'embedding',
        'index'     => 'index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->embedding) {
            $res['embedding'] = $this->embedding;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return embeddings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['embedding'])) {
            if (!empty($map['embedding'])) {
                $model->embedding = $map['embedding'];
            }
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        return $model;
    }
}
