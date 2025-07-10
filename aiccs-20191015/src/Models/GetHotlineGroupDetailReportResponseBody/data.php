<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineGroupDetailReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineGroupDetailReportResponseBody\data\columns;

class data extends Model
{
    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var mixed[][]
     */
    public $rows;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'columns' => 'Columns',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'rows' => 'Rows',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['Rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    if (\is_array($item1)) {
                        $res['Rows'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Rows'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1] = columns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['Rows'] as $item1) {
                    if (!empty($item1)) {
                        $model->rows[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->rows[$n1][$key2] = $value2;
                        }
                    }
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
