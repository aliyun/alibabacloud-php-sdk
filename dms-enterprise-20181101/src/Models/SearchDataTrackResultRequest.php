<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultRequest\columnFilter;

class SearchDataTrackResultRequest extends Model
{
    /**
     * @var columnFilter
     */
    public $columnFilter;

    /**
     * @var string
     */
    public $filterEndTime;

    /**
     * @var string
     */
    public $filterStartTime;

    /**
     * @var string[]
     */
    public $filterTableList;

    /**
     * @var string[]
     */
    public $filterTypeList;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnFilter' => 'ColumnFilter',
        'filterEndTime' => 'FilterEndTime',
        'filterStartTime' => 'FilterStartTime',
        'filterTableList' => 'FilterTableList',
        'filterTypeList' => 'FilterTypeList',
        'orderId' => 'OrderId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (null !== $this->columnFilter) {
            $this->columnFilter->validate();
        }
        if (\is_array($this->filterTableList)) {
            Model::validateArray($this->filterTableList);
        }
        if (\is_array($this->filterTypeList)) {
            Model::validateArray($this->filterTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnFilter) {
            $res['ColumnFilter'] = null !== $this->columnFilter ? $this->columnFilter->toArray($noStream) : $this->columnFilter;
        }

        if (null !== $this->filterEndTime) {
            $res['FilterEndTime'] = $this->filterEndTime;
        }

        if (null !== $this->filterStartTime) {
            $res['FilterStartTime'] = $this->filterStartTime;
        }

        if (null !== $this->filterTableList) {
            if (\is_array($this->filterTableList)) {
                $res['FilterTableList'] = [];
                $n1 = 0;
                foreach ($this->filterTableList as $item1) {
                    $res['FilterTableList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filterTypeList) {
            if (\is_array($this->filterTypeList)) {
                $res['FilterTypeList'] = [];
                $n1 = 0;
                foreach ($this->filterTypeList as $item1) {
                    $res['FilterTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['ColumnFilter'])) {
            $model->columnFilter = columnFilter::fromMap($map['ColumnFilter']);
        }

        if (isset($map['FilterEndTime'])) {
            $model->filterEndTime = $map['FilterEndTime'];
        }

        if (isset($map['FilterStartTime'])) {
            $model->filterStartTime = $map['FilterStartTime'];
        }

        if (isset($map['FilterTableList'])) {
            if (!empty($map['FilterTableList'])) {
                $model->filterTableList = [];
                $n1 = 0;
                foreach ($map['FilterTableList'] as $item1) {
                    $model->filterTableList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FilterTypeList'])) {
            if (!empty($map['FilterTypeList'])) {
                $model->filterTypeList = [];
                $n1 = 0;
                foreach ($map['FilterTypeList'] as $item1) {
                    $model->filterTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
