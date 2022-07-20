<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\censorPornResult;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\censorPornResult\pornCounterList\counter;
use AlibabaCloud\Tea\Model;

class pornCounterList extends Model
{
    /**
     * @var counter[]
     */
    public $counter;
    protected $_name = [
        'counter' => 'Counter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->counter) {
            $res['Counter'] = [];
            if (null !== $this->counter && \is_array($this->counter)) {
                $n = 0;
                foreach ($this->counter as $item) {
                    $res['Counter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pornCounterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Counter'])) {
            if (!empty($map['Counter'])) {
                $model->counter = [];
                $n              = 0;
                foreach ($map['Counter'] as $item) {
                    $model->counter[$n++] = null !== $item ? counter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
