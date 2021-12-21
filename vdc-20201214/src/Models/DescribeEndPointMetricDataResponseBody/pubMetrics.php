<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeEndPointMetricDataResponseBody\pubMetrics\nodes;
use AlibabaCloud\Tea\Model;

class pubMetrics extends Model
{
    /**
     * @description 坐标点列表
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description 对应入参Metrics中的类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'nodes'  => 'Nodes',
        'type'   => 'Type',
        'userId' => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pubMetrics
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
