<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextEmbeddingResponseBody\result;

use AlibabaCloud\Dara\Model;

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
        'index' => 'index',
    ];

    public function validate()
    {
        if (\is_array($this->embedding)) {
            Model::validateArray($this->embedding);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embedding) {
            if (\is_array($this->embedding)) {
                $res['embedding'] = [];
                $n1 = 0;
                foreach ($this->embedding as $item1) {
                    $res['embedding'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
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
        if (isset($map['embedding'])) {
            if (!empty($map['embedding'])) {
                $model->embedding = [];
                $n1 = 0;
                foreach ($map['embedding'] as $item1) {
                    $model->embedding[$n1++] = $item1;
                }
            }
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        return $model;
    }
}
