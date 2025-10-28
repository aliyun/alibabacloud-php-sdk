<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSlowLogHistogramAsyncResponseBody\data\data\item;

use AlibabaCloud\Dara\Model;

class insItems extends Model
{
    /**
     * @var int[]
     */
    public $count;

    /**
     * @var string
     */
    public $insId;

    /**
     * @var string
     */
    public $insRole;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'insId' => 'InsId',
        'insRole' => 'InsRole',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->count)) {
            Model::validateArray($this->count);
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
                    $res['Count'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->insId) {
            $res['InsId'] = $this->insId;
        }

        if (null !== $this->insRole) {
            $res['InsRole'] = $this->insRole;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
                    $model->count[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InsId'])) {
            $model->insId = $map['InsId'];
        }

        if (isset($map['InsRole'])) {
            $model->insRole = $map['InsRole'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
