<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDriverResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceDriverResponse\data\driverList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var driverList[]
     */
    public $driverList;
    protected $_name = [
        'total'       => 'Total',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
        'driverList'  => 'DriverList',
    ];

    public function validate()
    {
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('driverList', $this->driverList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->driverList) {
            $res['DriverList'] = [];
            if (null !== $this->driverList && \is_array($this->driverList)) {
                $n = 0;
                foreach ($this->driverList as $item) {
                    $res['DriverList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DriverList'])) {
            if (!empty($map['DriverList'])) {
                $model->driverList = [];
                $n                 = 0;
                foreach ($map['DriverList'] as $item) {
                    $model->driverList[$n++] = null !== $item ? driverList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
