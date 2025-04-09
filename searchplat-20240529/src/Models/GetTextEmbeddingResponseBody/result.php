<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponseBody\result\embeddings;

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
        if (\is_array($this->embeddings)) {
            Model::validateArray($this->embeddings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embeddings) {
            if (\is_array($this->embeddings)) {
                $res['embeddings'] = [];
                $n1 = 0;
                foreach ($this->embeddings as $item1) {
                    $res['embeddings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['embeddings'])) {
            if (!empty($map['embeddings'])) {
                $model->embeddings = [];
                $n1 = 0;
                foreach ($map['embeddings'] as $item1) {
                    $model->embeddings[$n1++] = embeddings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
