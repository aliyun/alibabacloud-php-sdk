<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DownloadDataTrackResultRequest\columnFilter;
use AlibabaCloud\Tea\Model;

class DownloadDataTrackResultRequest extends Model
{
    /**
     * @var columnFilter
     */
    public $columnFilter;

    /**
     * @var int[]
     */
    public $eventIdList;

    /**
     * @example 2023-04-23 10:00:00
     *
     * @var string
     */
    public $filterEndTime;

    /**
     * @example 2023-04-23 00:00:00
     *
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
     * @example 406****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example REVERSE
     *
     * @var string
     */
    public $rollbackSQLType;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnFilter'    => 'ColumnFilter',
        'eventIdList'     => 'EventIdList',
        'filterEndTime'   => 'FilterEndTime',
        'filterStartTime' => 'FilterStartTime',
        'filterTableList' => 'FilterTableList',
        'filterTypeList'  => 'FilterTypeList',
        'orderId'         => 'OrderId',
        'rollbackSQLType' => 'RollbackSQLType',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnFilter) {
            $res['ColumnFilter'] = null !== $this->columnFilter ? $this->columnFilter->toMap() : null;
        }
        if (null !== $this->eventIdList) {
            $res['EventIdList'] = $this->eventIdList;
        }
        if (null !== $this->filterEndTime) {
            $res['FilterEndTime'] = $this->filterEndTime;
        }
        if (null !== $this->filterStartTime) {
            $res['FilterStartTime'] = $this->filterStartTime;
        }
        if (null !== $this->filterTableList) {
            $res['FilterTableList'] = $this->filterTableList;
        }
        if (null !== $this->filterTypeList) {
            $res['FilterTypeList'] = $this->filterTypeList;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->rollbackSQLType) {
            $res['RollbackSQLType'] = $this->rollbackSQLType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadDataTrackResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnFilter'])) {
            $model->columnFilter = columnFilter::fromMap($map['ColumnFilter']);
        }
        if (isset($map['EventIdList'])) {
            if (!empty($map['EventIdList'])) {
                $model->eventIdList = $map['EventIdList'];
            }
        }
        if (isset($map['FilterEndTime'])) {
            $model->filterEndTime = $map['FilterEndTime'];
        }
        if (isset($map['FilterStartTime'])) {
            $model->filterStartTime = $map['FilterStartTime'];
        }
        if (isset($map['FilterTableList'])) {
            if (!empty($map['FilterTableList'])) {
                $model->filterTableList = $map['FilterTableList'];
            }
        }
        if (isset($map['FilterTypeList'])) {
            if (!empty($map['FilterTypeList'])) {
                $model->filterTypeList = $map['FilterTypeList'];
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RollbackSQLType'])) {
            $model->rollbackSQLType = $map['RollbackSQLType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
