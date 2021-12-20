<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $orderResultType;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $searchContent;

    /**
     * @var string
     */
    public $searchDateType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'endTime'         => 'EndTime',
        'orderResultType' => 'OrderResultType',
        'orderStatus'     => 'OrderStatus',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'pluginType'      => 'PluginType',
        'regionId'        => 'RegionId',
        'searchContent'   => 'SearchContent',
        'searchDateType'  => 'SearchDateType',
        'startTime'       => 'StartTime',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->orderResultType) {
            $res['OrderResultType'] = $this->orderResultType;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->searchContent) {
            $res['SearchContent'] = $this->searchContent;
        }
        if (null !== $this->searchDateType) {
            $res['SearchDateType'] = $this->searchDateType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OrderResultType'])) {
            $model->orderResultType = $map['OrderResultType'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchContent'])) {
            $model->searchContent = $map['SearchContent'];
        }
        if (isset($map['SearchDateType'])) {
            $model->searchDateType = $map['SearchDateType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
