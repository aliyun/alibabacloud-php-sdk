<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverResponse\data\driverList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var driverList[]
     */
    public $driverList;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'total'       => 'Total',
        'driverList'  => 'DriverList',
    ];

    public function validate()
    {
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('driverList', $this->driverList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
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
