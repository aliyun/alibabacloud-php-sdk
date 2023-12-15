<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAppliesResponseBody\result;

use AlibabaCloud\Tea\Model;

class pagination extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'current'  => 'Current',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
