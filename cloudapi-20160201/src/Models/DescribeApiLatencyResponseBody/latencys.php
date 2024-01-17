<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiLatencyResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeApiLatencyResponseBody\latencys\latency;
use AlibabaCloud\Tea\Model;

class latencys extends Model
{
    /**
     * @var latency[]
     */
    public $latency;
    protected $_name = [
        'latency' => 'Latency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latency) {
            $res['Latency'] = [];
            if (null !== $this->latency && \is_array($this->latency)) {
                $n = 0;
                foreach ($this->latency as $item) {
                    $res['Latency'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latencys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Latency'])) {
            if (!empty($map['Latency'])) {
                $model->latency = [];
                $n              = 0;
                foreach ($map['Latency'] as $item) {
                    $model->latency[$n++] = null !== $item ? latency::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
