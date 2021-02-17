<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo;
use AlibabaCloud\Tea\Model;

class traceList extends Model
{
    /**
     * @var traceMapDo[]
     */
    public $traceMapDo;
    protected $_name = [
        'traceMapDo' => 'TraceMapDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceMapDo) {
            $res['TraceMapDo'] = [];
            if (null !== $this->traceMapDo && \is_array($this->traceMapDo)) {
                $n = 0;
                foreach ($this->traceMapDo as $item) {
                    $res['TraceMapDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceMapDo'])) {
            if (!empty($map['TraceMapDo'])) {
                $model->traceMapDo = [];
                $n                 = 0;
                foreach ($map['TraceMapDo'] as $item) {
                    $model->traceMapDo[$n++] = null !== $item ? traceMapDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
