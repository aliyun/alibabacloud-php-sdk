<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\censorTerrorismResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\censorTerrorismResult\terrorismCounterList\counter;
use AlibabaCloud\Tea\Model;

class terrorismCounterList extends Model
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
     * @return terrorismCounterList
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
