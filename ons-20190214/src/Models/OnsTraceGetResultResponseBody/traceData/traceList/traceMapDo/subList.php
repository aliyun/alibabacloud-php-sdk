<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo;

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
        if (\is_array($this->subMapDo)) {
            Model::validateArray($this->subMapDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subMapDo) {
            if (\is_array($this->subMapDo)) {
                $res['SubMapDo'] = [];
                $n1 = 0;
                foreach ($this->subMapDo as $item1) {
                    $res['SubMapDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubMapDo'])) {
            if (!empty($map['SubMapDo'])) {
                $model->subMapDo = [];
                $n1 = 0;
                foreach ($map['SubMapDo'] as $item1) {
                    $model->subMapDo[$n1] = subMapDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
