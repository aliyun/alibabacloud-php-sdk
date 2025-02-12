<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointMetricDataResponseBody\subMetrics\nodes;

class subMetrics extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;
    /**
     * @var string
     */
    public $type;
    /**
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
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1           = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1           = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
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
