<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\CreateTextEmbeddingsResponseBody\data;

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
    public $textIndex;
    protected $_name = [
        'embedding' => 'Embedding',
        'textIndex' => 'TextIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->embedding) {
            $res['Embedding'] = $this->embedding;
        }
        if (null !== $this->textIndex) {
            $res['TextIndex'] = $this->textIndex;
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
        if (isset($map['Embedding'])) {
            if (!empty($map['Embedding'])) {
                $model->embedding = $map['Embedding'];
            }
        }
        if (isset($map['TextIndex'])) {
            $model->textIndex = $map['TextIndex'];
        }

        return $model;
    }
}
