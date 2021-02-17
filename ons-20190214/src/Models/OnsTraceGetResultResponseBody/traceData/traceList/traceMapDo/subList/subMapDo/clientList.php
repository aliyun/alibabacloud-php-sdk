<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTraceGetResultResponseBody\traceData\traceList\traceMapDo\subList\subMapDo\clientList\subClientInfoDo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subClientInfoDo) {
            $res['SubClientInfoDo'] = [];
            if (null !== $this->subClientInfoDo && \is_array($this->subClientInfoDo)) {
                $n = 0;
                foreach ($this->subClientInfoDo as $item) {
                    $res['SubClientInfoDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubClientInfoDo'])) {
            if (!empty($map['SubClientInfoDo'])) {
                $model->subClientInfoDo = [];
                $n                      = 0;
                foreach ($map['SubClientInfoDo'] as $item) {
                    $model->subClientInfoDo[$n++] = null !== $item ? subClientInfoDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
