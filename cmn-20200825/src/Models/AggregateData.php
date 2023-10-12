<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class AggregateData extends Model
{
    /**
     * @var string
     */
    public $aggregateDataDescription;

    /**
     * @var string
     */
    public $aggregateDataId;

    /**
     * @var string
     */
    public $aggregateDataName;

    /**
     * @var string[]
     */
    public $aggregateModeList;

    /**
     * @var string
     */
    public $dataItem;

    /**
     * @var string[]
     */
    public $deviceIdList;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $isAllDevice;

    /**
     * @var string
     */
    public $monitorItemId;
    protected $_name = [
        'aggregateDataDescription' => 'AggregateDataDescription',
        'aggregateDataId'          => 'AggregateDataId',
        'aggregateDataName'        => 'AggregateDataName',
        'aggregateModeList'        => 'AggregateModeList',
        'dataItem'                 => 'DataItem',
        'deviceIdList'             => 'DeviceIdList',
        'gmtCreate'                => 'GmtCreate',
        'gmtModified'              => 'GmtModified',
        'isAllDevice'              => 'IsAllDevice',
        'monitorItemId'            => 'MonitorItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateDataDescription) {
            $res['AggregateDataDescription'] = $this->aggregateDataDescription;
        }
        if (null !== $this->aggregateDataId) {
            $res['AggregateDataId'] = $this->aggregateDataId;
        }
        if (null !== $this->aggregateDataName) {
            $res['AggregateDataName'] = $this->aggregateDataName;
        }
        if (null !== $this->aggregateModeList) {
            $res['AggregateModeList'] = $this->aggregateModeList;
        }
        if (null !== $this->dataItem) {
            $res['DataItem'] = $this->dataItem;
        }
        if (null !== $this->deviceIdList) {
            $res['DeviceIdList'] = $this->deviceIdList;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->isAllDevice) {
            $res['IsAllDevice'] = $this->isAllDevice;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AggregateData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDataDescription'])) {
            $model->aggregateDataDescription = $map['AggregateDataDescription'];
        }
        if (isset($map['AggregateDataId'])) {
            $model->aggregateDataId = $map['AggregateDataId'];
        }
        if (isset($map['AggregateDataName'])) {
            $model->aggregateDataName = $map['AggregateDataName'];
        }
        if (isset($map['AggregateModeList'])) {
            if (!empty($map['AggregateModeList'])) {
                $model->aggregateModeList = $map['AggregateModeList'];
            }
        }
        if (isset($map['DataItem'])) {
            $model->dataItem = $map['DataItem'];
        }
        if (isset($map['DeviceIdList'])) {
            if (!empty($map['DeviceIdList'])) {
                $model->deviceIdList = $map['DeviceIdList'];
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IsAllDevice'])) {
            $model->isAllDevice = $map['IsAllDevice'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }

        return $model;
    }
}
