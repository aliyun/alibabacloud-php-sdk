<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class SearchDataTrackResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $columnFilterShrink;
    /**
     * @var string
     */
    public $filterEndTime;
    /**
     * @var string
     */
    public $filterStartTime;
    /**
     * @var string
     */
    public $filterTableListShrink;
    /**
     * @var string
     */
    public $filterTypeListShrink;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnFilterShrink'    => 'ColumnFilter',
        'filterEndTime'         => 'FilterEndTime',
        'filterStartTime'       => 'FilterStartTime',
        'filterTableListShrink' => 'FilterTableList',
        'filterTypeListShrink'  => 'FilterTypeList',
        'orderId'               => 'OrderId',
        'tid'                   => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnFilterShrink) {
            $res['ColumnFilter'] = $this->columnFilterShrink;
        }

        if (null !== $this->filterEndTime) {
            $res['FilterEndTime'] = $this->filterEndTime;
        }

        if (null !== $this->filterStartTime) {
            $res['FilterStartTime'] = $this->filterStartTime;
        }

        if (null !== $this->filterTableListShrink) {
            $res['FilterTableList'] = $this->filterTableListShrink;
        }

        if (null !== $this->filterTypeListShrink) {
            $res['FilterTypeList'] = $this->filterTypeListShrink;
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
            $model->columnFilterShrink = $map['ColumnFilter'];
        }

        if (isset($map['FilterEndTime'])) {
            $model->filterEndTime = $map['FilterEndTime'];
        }

        if (isset($map['FilterStartTime'])) {
            $model->filterStartTime = $map['FilterStartTime'];
        }

        if (isset($map['FilterTableList'])) {
            $model->filterTableListShrink = $map['FilterTableList'];
        }

        if (isset($map['FilterTypeList'])) {
            $model->filterTypeListShrink = $map['FilterTypeList'];
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
