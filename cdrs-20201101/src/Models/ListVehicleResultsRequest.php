<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListVehicleResultsRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $vehicleColor;

    /**
     * @var string
     */
    public $vehicleClass;

    /**
     * @var string
     */
    public $vehicleApplication;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'corpId'             => 'CorpId',
        'vehicleColor'       => 'VehicleColor',
        'vehicleClass'       => 'VehicleClass',
        'vehicleApplication' => 'VehicleApplication',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->vehicleColor) {
            $res['VehicleColor'] = $this->vehicleColor;
        }
        if (null !== $this->vehicleClass) {
            $res['VehicleClass'] = $this->vehicleClass;
        }
        if (null !== $this->vehicleApplication) {
            $res['VehicleApplication'] = $this->vehicleApplication;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVehicleResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['VehicleColor'])) {
            $model->vehicleColor = $map['VehicleColor'];
        }
        if (isset($map['VehicleClass'])) {
            $model->vehicleClass = $map['VehicleClass'];
        }
        if (isset($map['VehicleApplication'])) {
            $model->vehicleApplication = $map['VehicleApplication'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
