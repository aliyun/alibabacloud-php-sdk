<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponse\data\driverVersionList;
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
     * @var driverVersionList[]
     */
    public $driverVersionList;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'pageSize'          => 'PageSize',
        'total'             => 'Total',
        'driverVersionList' => 'DriverVersionList',
    ];

    public function validate()
    {
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('driverVersionList', $this->driverVersionList, true);
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
        if (null !== $this->driverVersionList) {
            $res['DriverVersionList'] = [];
            if (null !== $this->driverVersionList && \is_array($this->driverVersionList)) {
                $n = 0;
                foreach ($this->driverVersionList as $item) {
                    $res['DriverVersionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DriverVersionList'])) {
            if (!empty($map['DriverVersionList'])) {
                $model->driverVersionList = [];
                $n                        = 0;
                foreach ($map['DriverVersionList'] as $item) {
                    $model->driverVersionList[$n++] = null !== $item ? driverVersionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
