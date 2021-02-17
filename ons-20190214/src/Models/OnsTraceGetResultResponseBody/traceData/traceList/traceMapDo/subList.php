<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo;
use AlibabaCloud\Tea\Model;

class subList extends Model
{
    /**
     * @var subMapDo[]
     */
    public $subMapDo;
    protected $_name = [
        'subMapDo' => 'SubMapDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subMapDo) {
            $res['SubMapDo'] = [];
            if (null !== $this->subMapDo && \is_array($this->subMapDo)) {
                $n = 0;
                foreach ($this->subMapDo as $item) {
                    $res['SubMapDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubMapDo'])) {
            if (!empty($map['SubMapDo'])) {
                $model->subMapDo = [];
                $n               = 0;
                foreach ($map['SubMapDo'] as $item) {
                    $model->subMapDo[$n++] = null !== $item ? subMapDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
