<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOverallDataResponseBody;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeQualityOverallDataResponseBody\qualityOverallData\nodes;
use AlibabaCloud\Tea\Model;

class qualityOverallData extends Model
{
    /**
     * @example 0.9967
     *
     * @var string
     */
    public $average;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @example JOIN_CHANNEL_SUC_RATE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'average' => 'Average',
        'nodes'   => 'Nodes',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityOverallData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
