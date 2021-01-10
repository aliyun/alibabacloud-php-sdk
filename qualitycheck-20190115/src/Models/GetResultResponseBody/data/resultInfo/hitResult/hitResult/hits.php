<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\hits\hit;
use AlibabaCloud\Tea\Model;

class hits extends Model
{
    /**
     * @var hit[]
     */
    public $hit;
    protected $_name = [
        'hit' => 'Hit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hit) {
            $res['Hit'] = [];
            if (null !== $this->hit && \is_array($this->hit)) {
                $n = 0;
                foreach ($this->hit as $item) {
                    $res['Hit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hit'])) {
            if (!empty($map['Hit'])) {
                $model->hit = [];
                $n          = 0;
                foreach ($map['Hit'] as $item) {
                    $model->hit[$n++] = null !== $item ? hit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
