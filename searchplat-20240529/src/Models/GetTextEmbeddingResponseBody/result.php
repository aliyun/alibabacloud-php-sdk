<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponseBody;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponseBody\result\embeddings;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var embeddings[]
     */
    public $embeddings;
    protected $_name = [
        'embeddings' => 'embeddings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->embeddings) {
            $res['embeddings'] = [];
            if (null !== $this->embeddings && \is_array($this->embeddings)) {
                $n = 0;
                foreach ($this->embeddings as $item) {
                    $res['embeddings'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['embeddings'])) {
            if (!empty($map['embeddings'])) {
                $model->embeddings = [];
                $n                 = 0;
                foreach ($map['embeddings'] as $item) {
                    $model->embeddings[$n++] = null !== $item ? embeddings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
