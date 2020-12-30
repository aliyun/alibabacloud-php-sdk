<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetControlRulesResponseBody;

use AlibabaCloud\Tea\Model;

class pager extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $page;
    protected $_name = [
        'pageSize' => 'PageSize',
        'total'    => 'Total',
        'page'     => 'Page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pager
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        return $model;
    }
}
