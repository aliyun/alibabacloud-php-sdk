<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\BatchResponseBody\responses;
use AlibabaCloud\Tea\Model;

class BatchResponseBody extends Model
{
    /**
     * @var responses[]
     */
    public $responses;
    protected $_name = [
        'responses' => 'responses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->responses) {
            $res['responses'] = [];
            if (null !== $this->responses && \is_array($this->responses)) {
                $n = 0;
                foreach ($this->responses as $item) {
                    $res['responses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['responses'])) {
            if (!empty($map['responses'])) {
                $model->responses = [];
                $n                = 0;
                foreach ($map['responses'] as $item) {
                    $model->responses[$n++] = null !== $item ? responses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
