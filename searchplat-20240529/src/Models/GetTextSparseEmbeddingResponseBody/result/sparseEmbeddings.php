<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponseBody\result;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextSparseEmbeddingResponseBody\result\sparseEmbeddings\embedding;
use AlibabaCloud\Tea\Model;

class sparseEmbeddings extends Model
{
    /**
     * @var embedding[]
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
            $res['embedding'] = [];
            if (null !== $this->embedding && \is_array($this->embedding)) {
                $n = 0;
                foreach ($this->embedding as $item) {
                    $res['embedding'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sparseEmbeddings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['embedding'])) {
            if (!empty($map['embedding'])) {
                $model->embedding = [];
                $n                = 0;
                foreach ($map['embedding'] as $item) {
                    $model->embedding[$n++] = null !== $item ? embedding::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        return $model;
    }
}
