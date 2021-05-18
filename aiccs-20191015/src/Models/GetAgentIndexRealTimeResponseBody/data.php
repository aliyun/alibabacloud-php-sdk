<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentIndexRealTimeResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentIndexRealTimeResponseBody\data\columns;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[][]
     */
    public $rows;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var int
     */
    public $page;
    protected $_name = [
        'rows'     => 'Rows',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
        'columns'  => 'Columns',
        'page'     => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
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
        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = $map['Rows'];
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
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

        return $model;
    }
}
