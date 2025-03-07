<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results\results\embedding;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var embedding
     */
    public $embedding;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;
    protected $_name = [
        'embedding' => 'Embedding',
        'index'     => 'Index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->embedding) {
            $res['Embedding'] = null !== $this->embedding ? $this->embedding->toMap() : null;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
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
