<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTextEmbeddingsResponseBody;

use AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTextEmbeddingsResponseBody\data\embeddings;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var embeddings[]
     */
    public $embeddings;
    protected $_name = [
        'embeddings' => 'Embeddings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->embeddings) {
            $res['Embeddings'] = [];
            if (null !== $this->embeddings && \is_array($this->embeddings)) {
                $n = 0;
                foreach ($this->embeddings as $item) {
                    $res['Embeddings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Embeddings'])) {
            if (!empty($map['Embeddings'])) {
                $model->embeddings = [];
                $n                 = 0;
                foreach ($map['Embeddings'] as $item) {
                    $model->embeddings[$n++] = null !== $item ? embeddings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
