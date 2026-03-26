<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateInspectionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $inspectionItems;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportLanguage;

    /**
     * @var string
     */
    public $reportRegionId;

    /**
     * @var string
     */
    public $reportType;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'inspectionItems' => 'InspectionItems',
        'instanceIds' => 'InstanceIds',
        'regionId' => 'RegionId',
        'reportLanguage' => 'ReportLanguage',
        'reportRegionId' => 'ReportRegionId',
        'reportType' => 'ReportType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->inspectionItems) {
            $res['InspectionItems'] = $this->inspectionItems;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportLanguage) {
            $res['ReportLanguage'] = $this->reportLanguage;
        }

        if (null !== $this->reportRegionId) {
            $res['ReportRegionId'] = $this->reportRegionId;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InspectionItems'])) {
            $model->inspectionItems = $map['InspectionItems'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportLanguage'])) {
            $model->reportLanguage = $map['ReportLanguage'];
        }

        if (isset($map['ReportRegionId'])) {
            $model->reportRegionId = $map['ReportRegionId'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
