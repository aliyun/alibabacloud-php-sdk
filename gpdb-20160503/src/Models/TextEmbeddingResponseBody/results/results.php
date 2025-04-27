<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results\results\embedding;

class results extends Model
{
    /**
     * @var embedding
     */
    public $embedding;

    /**
     * @var int
     */
    public $index;
    protected $_name = [
        'embedding' => 'Embedding',
        'index' => 'Index',
    ];

    public function validate()
    {
        if (null !== $this->embedding) {
            $this->embedding->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embedding) {
            $res['Embedding'] = null !== $this->embedding ? $this->embedding->toArray($noStream) : $this->embedding;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
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
        if (isset($map['Embedding'])) {
            $model->embedding = embedding::fromMap($map['Embedding']);
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        return $model;
    }
}
