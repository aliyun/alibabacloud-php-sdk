<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelOverallDataResponseBody\metricDatas\nodes;
use AlibabaCloud\Tea\Model;

class metricDatas extends Model
{
    /**
     * @description 指标类型，取值：CALL_QUALITY：通信质量。CONN_NUM：通信次数。
     *
     * @var string
     */
    public $type;

    /**
     * @description 指标趋势图坐标点列表。
     *
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'type'  => 'Type',
        'nodes' => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
