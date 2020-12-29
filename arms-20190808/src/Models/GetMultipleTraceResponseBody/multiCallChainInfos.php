<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponseBody\multiCallChainInfos\spans;
use AlibabaCloud\Tea\Model;

class multiCallChainInfos extends Model
{
    /**
     * @var spans[]
     */
    public $spans;

    /**
     * @var string
     */
    public $traceID;
    protected $_name = [
        'spans'   => 'Spans',
        'traceID' => 'TraceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spans) {
            $res['Spans'] = [];
            if (null !== $this->spans && \is_array($this->spans)) {
                $n = 0;
                foreach ($this->spans as $item) {
                    $res['Spans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiCallChainInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Spans'])) {
            if (!empty($map['Spans'])) {
                $model->spans = [];
                $n            = 0;
                foreach ($map['Spans'] as $item) {
                    $model->spans[$n++] = null !== $item ? spans::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
