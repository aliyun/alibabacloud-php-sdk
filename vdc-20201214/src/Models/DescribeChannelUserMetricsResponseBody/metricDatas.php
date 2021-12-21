<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelUserMetricsResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelUserMetricsResponseBody\metricDatas\nodes;
use AlibabaCloud\Tea\Model;

class metricDatas extends Model
{
    /**
     * @description 指标趋势图坐标点列表。
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description 指标类型，取值：ALL_NUM：累计用户数量。PUB_NUM：累计发布用户数量。SUB_NUM：累计订阅用户数量。JOIN_FAIL_NUM：累计加入频道异常用户数量。BAD_EXP_NUM：累计通信体验异常用户。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'nodes' => 'Nodes',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
