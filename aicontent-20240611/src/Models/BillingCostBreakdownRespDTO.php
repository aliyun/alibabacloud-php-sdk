<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BillingCostBreakdownRespDTO extends Model
{
    /**
     * @var string
     */
    public $granularity;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var BillingCostBreakdownRowDTO[]
     */
    public $rows;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'granularity' => 'granularity',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'rows' => 'rows',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    $res['rows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['rows'])) {
            if (!empty($map['rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['rows'] as $item1) {
                    $model->rows[$n1] = BillingCostBreakdownRowDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
