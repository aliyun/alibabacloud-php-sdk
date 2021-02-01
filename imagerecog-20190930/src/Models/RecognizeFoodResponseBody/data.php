<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodResponseBody;

use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeFoodResponseBody\data\topFives;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var topFives[]
     */
    public $topFives;
    protected $_name = [
        'topFives' => 'TopFives',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topFives) {
            $res['TopFives'] = [];
            if (null !== $this->topFives && \is_array($this->topFives)) {
                $n = 0;
                foreach ($this->topFives as $item) {
                    $res['TopFives'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TopFives'])) {
            if (!empty($map['TopFives'])) {
                $model->topFives = [];
                $n               = 0;
                foreach ($map['TopFives'] as $item) {
                    $model->topFives[$n++] = null !== $item ? topFives::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
