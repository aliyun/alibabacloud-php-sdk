<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo\clientList\subClientInfoDo;

class clientList extends Model
{
    /**
     * @var subClientInfoDo[]
     */
    public $subClientInfoDo;
    protected $_name = [
        'subClientInfoDo' => 'SubClientInfoDo',
    ];

    public function validate()
    {
        if (\is_array($this->subClientInfoDo)) {
            Model::validateArray($this->subClientInfoDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subClientInfoDo) {
            if (\is_array($this->subClientInfoDo)) {
                $res['SubClientInfoDo'] = [];
                $n1 = 0;
                foreach ($this->subClientInfoDo as $item1) {
                    $res['SubClientInfoDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubClientInfoDo'])) {
            if (!empty($map['SubClientInfoDo'])) {
                $model->subClientInfoDo = [];
                $n1 = 0;
                foreach ($map['SubClientInfoDo'] as $item1) {
                    $model->subClientInfoDo[$n1] = subClientInfoDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
