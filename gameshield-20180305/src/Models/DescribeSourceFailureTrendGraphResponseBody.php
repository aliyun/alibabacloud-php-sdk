<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSourceFailureTrendGraphResponseBody\trendGraph;
use AlibabaCloud\Tea\Model;

class DescribeSourceFailureTrendGraphResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trendGraph[]
     */
    public $trendGraph;
    protected $_name = [
        'requestId'  => 'RequestId',
        'trendGraph' => 'TrendGraph',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trendGraph) {
            $res['TrendGraph'] = [];
            if (null !== $this->trendGraph && \is_array($this->trendGraph)) {
                $n = 0;
                foreach ($this->trendGraph as $item) {
                    $res['TrendGraph'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSourceFailureTrendGraphResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrendGraph'])) {
            if (!empty($map['TrendGraph'])) {
                $model->trendGraph = [];
                $n                 = 0;
                foreach ($map['TrendGraph'] as $item) {
                    $model->trendGraph[$n++] = null !== $item ? trendGraph::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
