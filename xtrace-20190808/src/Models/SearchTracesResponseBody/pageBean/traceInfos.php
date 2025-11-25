<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesResponseBody\pageBean\traceInfos\traceInfo;

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
        if (\is_array($this->traceInfo)) {
            Model::validateArray($this->traceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->traceInfo) {
            if (\is_array($this->traceInfo)) {
                $res['TraceInfo'] = [];
                $n1 = 0;
                foreach ($this->traceInfo as $item1) {
                    $res['TraceInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TraceInfo'])) {
            if (!empty($map['TraceInfo'])) {
                $model->traceInfo = [];
                $n1 = 0;
                foreach ($map['TraceInfo'] as $item1) {
                    $model->traceInfo[$n1] = traceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
