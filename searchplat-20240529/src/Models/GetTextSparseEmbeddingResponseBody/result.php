<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponseBody;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponseBody\result\sparseEmbeddings;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var sparseEmbeddings[]
     */
    public $sparseEmbeddings;
    protected $_name = [
        'sparseEmbeddings' => 'sparse_embeddings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sparseEmbeddings) {
            $res['sparse_embeddings'] = [];
            if (null !== $this->sparseEmbeddings && \is_array($this->sparseEmbeddings)) {
                $n = 0;
                foreach ($this->sparseEmbeddings as $item) {
                    $res['sparse_embeddings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sparse_embeddings'])) {
            if (!empty($map['sparse_embeddings'])) {
                $model->sparseEmbeddings = [];
                $n                       = 0;
                foreach ($map['sparse_embeddings'] as $item) {
                    $model->sparseEmbeddings[$n++] = null !== $item ? sparseEmbeddings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
