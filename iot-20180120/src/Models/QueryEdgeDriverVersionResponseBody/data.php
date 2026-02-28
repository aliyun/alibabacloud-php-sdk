<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverVersionResponseBody\data\driverVersionList;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var driverVersionList[]
     */
    public $driverVersionList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'driverVersionList' => 'DriverVersionList',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->driverVersionList)) {
            Model::validateArray($this->driverVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->driverVersionList) {
            if (\is_array($this->driverVersionList)) {
                $res['DriverVersionList'] = [];
                $n1 = 0;
                foreach ($this->driverVersionList as $item1) {
                    $res['DriverVersionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DriverVersionList'])) {
            if (!empty($map['DriverVersionList'])) {
                $model->driverVersionList = [];
                $n1 = 0;
                foreach ($map['DriverVersionList'] as $item1) {
                    $model->driverVersionList[$n1] = driverVersionList::fromMap($item1);
                    ++$n1;
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
