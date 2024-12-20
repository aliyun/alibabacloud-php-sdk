<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results\results[]
     */
    public $results;
    protected $_name = [
        'results' => 'Results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? \AlibabaCloud\SDK\Gpdb\V20160503\Models\TextEmbeddingResponseBody\results\results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
