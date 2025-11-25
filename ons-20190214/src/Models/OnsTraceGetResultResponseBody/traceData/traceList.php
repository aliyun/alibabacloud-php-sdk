<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo;

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
        if (\is_array($this->traceMapDo)) {
            Model::validateArray($this->traceMapDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->traceMapDo) {
            if (\is_array($this->traceMapDo)) {
                $res['TraceMapDo'] = [];
                $n1 = 0;
                foreach ($this->traceMapDo as $item1) {
                    $res['TraceMapDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TraceMapDo'])) {
            if (!empty($map['TraceMapDo'])) {
                $model->traceMapDo = [];
                $n1 = 0;
                foreach ($map['TraceMapDo'] as $item1) {
                    $model->traceMapDo[$n1] = traceMapDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
