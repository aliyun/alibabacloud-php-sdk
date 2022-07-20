<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\censorTerrorismResult;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\censorTerrorismResult\terrorismTopList\top;
use AlibabaCloud\Tea\Model;

class terrorismTopList extends Model
{
    /**
     * @var top[]
     */
    public $top;
    protected $_name = [
        'top' => 'Top',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->top) {
            $res['Top'] = [];
            if (null !== $this->top && \is_array($this->top)) {
                $n = 0;
                foreach ($this->top as $item) {
                    $res['Top'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismTopList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Top'])) {
            if (!empty($map['Top'])) {
                $model->top = [];
                $n          = 0;
                foreach ($map['Top'] as $item) {
                    $model->top[$n++] = null !== $item ? top::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
