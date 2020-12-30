<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\level;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\statistics;
use AlibabaCloud\Tea\Model;

class diagnoseResult extends Model
{
    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $SN;

    /**
     * @var string
     */
    public $diagnoseId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $userLevel;

    /**
     * @var string
     */
    public $boxVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $boxType;

    /**
     * @var string
     */
    public $monitorVersion;

    /**
     * @var int
     */
    public $finishedNumber;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $UId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $storeType;

    /**
     * @var int
     */
    public $reportSLSSuccess;

    /**
     * @var int
     */
    public $totalNumber;

    /**
     * @var level
     */
    public $level;

    /**
     * @var statistics
     */
    public $statistics;
    protected $_name = [
        'percent'          => 'Percent',
        'SN'               => 'SN',
        'diagnoseId'       => 'DiagnoseId',
        'state'            => 'State',
        'userLevel'        => 'UserLevel',
        'boxVersion'       => 'BoxVersion',
        'instanceId'       => 'InstanceId',
        'boxType'          => 'BoxType',
        'monitorVersion'   => 'MonitorVersion',
        'finishedNumber'   => 'FinishedNumber',
        'details'          => 'Details',
        'UId'              => 'UId',
        'endTime'          => 'EndTime',
        'startTime'        => 'StartTime',
        'parameters'       => 'Parameters',
        'storeType'        => 'StoreType',
        'reportSLSSuccess' => 'ReportSLSSuccess',
        'totalNumber'      => 'TotalNumber',
        'level'            => 'Level',
        'statistics'       => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->SN) {
            $res['SN'] = $this->SN;
        }
        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userLevel) {
            $res['UserLevel'] = $this->userLevel;
        }
        if (null !== $this->boxVersion) {
            $res['BoxVersion'] = $this->boxVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->boxType) {
            $res['BoxType'] = $this->boxType;
        }
        if (null !== $this->monitorVersion) {
            $res['MonitorVersion'] = $this->monitorVersion;
        }
        if (null !== $this->finishedNumber) {
            $res['FinishedNumber'] = $this->finishedNumber;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->storeType) {
            $res['StoreType'] = $this->storeType;
        }
        if (null !== $this->reportSLSSuccess) {
            $res['ReportSLSSuccess'] = $this->reportSLSSuccess;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }
        if (null !== $this->level) {
            $res['Level'] = null !== $this->level ? $this->level->toMap() : null;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = null !== $this->statistics ? $this->statistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['SN'])) {
            $model->SN = $map['SN'];
        }
        if (isset($map['DiagnoseId'])) {
            $model->diagnoseId = $map['DiagnoseId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserLevel'])) {
            $model->userLevel = $map['UserLevel'];
        }
        if (isset($map['BoxVersion'])) {
            $model->boxVersion = $map['BoxVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BoxType'])) {
            $model->boxType = $map['BoxType'];
        }
        if (isset($map['MonitorVersion'])) {
            $model->monitorVersion = $map['MonitorVersion'];
        }
        if (isset($map['FinishedNumber'])) {
            $model->finishedNumber = $map['FinishedNumber'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['StoreType'])) {
            $model->storeType = $map['StoreType'];
        }
        if (isset($map['ReportSLSSuccess'])) {
            $model->reportSLSSuccess = $map['ReportSLSSuccess'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }
        if (isset($map['Level'])) {
            $model->level = level::fromMap($map['Level']);
        }
        if (isset($map['Statistics'])) {
            $model->statistics = statistics::fromMap($map['Statistics']);
        }

        return $model;
    }
}
