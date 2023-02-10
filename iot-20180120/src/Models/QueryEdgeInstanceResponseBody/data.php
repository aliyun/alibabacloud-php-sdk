<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceResponseBody\data\instanceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var instanceList[]
     */
    public $instanceList;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 201
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'instanceList' => 'InstanceList',
        'pageSize'     => 'PageSize',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = [];
            if (null !== $this->instanceList && \is_array($this->instanceList)) {
                $n = 0;
                foreach ($this->instanceList as $item) {
                    $res['InstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = [];
                $n                   = 0;
                foreach ($map['InstanceList'] as $item) {
                    $model->instanceList[$n++] = null !== $item ? instanceList::fromMap($item) : $item;
                }
            }
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
