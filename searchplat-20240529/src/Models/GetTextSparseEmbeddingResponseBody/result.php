<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponseBody\result\sparseEmbeddings;

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
        if (\is_array($this->sparseEmbeddings)) {
            Model::validateArray($this->sparseEmbeddings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sparseEmbeddings) {
            if (\is_array($this->sparseEmbeddings)) {
                $res['sparse_embeddings'] = [];
                $n1 = 0;
                foreach ($this->sparseEmbeddings as $item1) {
                    $res['sparse_embeddings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['sparse_embeddings'])) {
            if (!empty($map['sparse_embeddings'])) {
                $model->sparseEmbeddings = [];
                $n1 = 0;
                foreach ($map['sparse_embeddings'] as $item1) {
                    $model->sparseEmbeddings[$n1++] = sparseEmbeddings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
