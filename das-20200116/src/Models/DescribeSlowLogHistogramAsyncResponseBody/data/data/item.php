<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data\item\insItems;

class item extends Model
{
    /**
     * @var int[]
     */
    public $count;

    /**
     * @var insItems[]
     */
    public $insItems;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'count' => 'Count',
        'insItems' => 'InsItems',
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
        if (\is_array($this->count)) {
            Model::validateArray($this->count);
        }
        if (\is_array($this->insItems)) {
            Model::validateArray($this->insItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            if (\is_array($this->count)) {
                $res['Count'] = [];
                $n1 = 0;
                foreach ($this->count as $item1) {
                    $res['Count'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->insItems) {
            if (\is_array($this->insItems)) {
                $res['InsItems'] = [];
                $n1 = 0;
                foreach ($this->insItems as $item1) {
                    $res['InsItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['Count'])) {
            if (!empty($map['Count'])) {
                $model->count = [];
                $n1 = 0;
                foreach ($map['Count'] as $item1) {
                    $model->count[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InsItems'])) {
            if (!empty($map['InsItems'])) {
                $model->insItems = [];
                $n1 = 0;
                foreach ($map['InsItems'] as $item1) {
                    $model->insItems[$n1++] = insItems::fromMap($item1);
                }
            }
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
