<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results\results;

use AlibabaCloud\Tea\Model;

class embedding extends Model
{
    /**
     * @var float[]
     */
    public $embedding;
    protected $_name = [
        'embedding' => 'Embedding',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->embedding) {
            $res['Embedding'] = $this->embedding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return embedding
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Embedding'])) {
            if (!empty($map['Embedding'])) {
                $model->embedding = $map['Embedding'];
            }
        }

        return $model;
    }
}
