<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesResponseBody\traceInfos;

class SearchTracesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var traceInfos[]
     */
    public $traceInfos;
    protected $_name = [
        'requestId'  => 'RequestId',
        'traceInfos' => 'TraceInfos',
    ];

    public function validate()
    {
        if (\is_array($this->traceInfos)) {
            Model::validateArray($this->traceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->traceInfos) {
            if (\is_array($this->traceInfos)) {
                $res['TraceInfos'] = [];
                $n1                = 0;
                foreach ($this->traceInfos as $item1) {
                    $res['TraceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TraceInfos'])) {
            if (!empty($map['TraceInfos'])) {
                $model->traceInfos = [];
                $n1                = 0;
                foreach ($map['TraceInfos'] as $item1) {
                    $model->traceInfos[$n1++] = traceInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
