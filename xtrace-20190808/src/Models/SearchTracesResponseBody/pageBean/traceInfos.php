<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponseBody\pageBean;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponseBody\pageBean\traceInfos\traceInfo;
use AlibabaCloud\Tea\Model;

class traceInfos extends Model
{
    /**
     * @var traceInfo[]
     */
    public $traceInfo;
    protected $_name = [
        'traceInfo' => 'TraceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceInfo) {
            $res['TraceInfo'] = [];
            if (null !== $this->traceInfo && \is_array($this->traceInfo)) {
                $n = 0;
                foreach ($this->traceInfo as $item) {
                    $res['TraceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TraceInfo'])) {
            if (!empty($map['TraceInfo'])) {
                $model->traceInfo = [];
                $n                = 0;
                foreach ($map['TraceInfo'] as $item) {
                    $model->traceInfo[$n++] = null !== $item ? traceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
