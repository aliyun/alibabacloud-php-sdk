<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results\results;

use AlibabaCloud\Dara\Model;

class embedding extends Model
{
    /**
     * @var float[]
     */
    public $embedding;
    protected $_name = [
        'embedding' => 'Embedding',
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
                $res['Embedding'] = [];
                $n1 = 0;
                foreach ($this->embedding as $item1) {
                    $res['Embedding'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Embedding'])) {
            if (!empty($map['Embedding'])) {
                $model->embedding = [];
                $n1 = 0;
                foreach ($map['Embedding'] as $item1) {
                    $model->embedding[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
