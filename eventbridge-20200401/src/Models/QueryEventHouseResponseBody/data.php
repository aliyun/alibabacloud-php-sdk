<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\QueryEventHouseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\Row;

class data extends Model
{
    /**
     * @var Row[]
     */
    public $rows;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'rows' => 'Rows',
        'total' => 'Total',
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
        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['Rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    $res['Rows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['Rows'] as $item1) {
                    $model->rows[$n1] = Row::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
