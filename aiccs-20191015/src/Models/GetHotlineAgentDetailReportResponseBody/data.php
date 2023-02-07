<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailReportResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetHotlineAgentDetailReportResponseBody\data\columns;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var mixed[][]
     */
    public $rows;

    /**
     * @example 7
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'columns'  => 'Columns',
        'page'     => 'Page',
        'pageSize' => 'PageSize',
        'rows'     => 'Rows',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
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
                $model->rows = $map['Rows'];
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
