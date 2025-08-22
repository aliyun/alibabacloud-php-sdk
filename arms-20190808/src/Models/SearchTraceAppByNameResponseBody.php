<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameResponseBody\traceApps;

class SearchTraceAppByNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var traceApps[]
     */
    public $traceApps;
    protected $_name = [
        'requestId' => 'RequestId',
        'traceApps' => 'TraceApps',
    ];

    public function validate()
    {
        if (\is_array($this->traceApps)) {
            Model::validateArray($this->traceApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->traceApps) {
            if (\is_array($this->traceApps)) {
                $res['TraceApps'] = [];
                $n1 = 0;
                foreach ($this->traceApps as $item1) {
                    $res['TraceApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TraceApps'])) {
            if (!empty($map['TraceApps'])) {
                $model->traceApps = [];
                $n1 = 0;
                foreach ($map['TraceApps'] as $item1) {
                    $model->traceApps[$n1] = traceApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
