<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\level;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\statistics;

class diagnoseResult extends Model
{
    /**
     * @var string
     */
    public $boxType;

    /**
     * @var string
     */
    public $boxVersion;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $diagnoseId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $finishedNumber;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var level
     */
    public $level;

    /**
     * @var string
     */
    public $monitorVersion;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var int
     */
    public $reportSLSSuccess;

    /**
     * @var string
     */
    public $SN;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var statistics
     */
    public $statistics;

    /**
     * @var string
     */
    public $storeType;

    /**
     * @var int
     */
    public $totalNumber;

    /**
     * @var string
     */
    public $UId;

    /**
     * @var string
     */
    public $userLevel;
    protected $_name = [
        'boxType' => 'BoxType',
        'boxVersion' => 'BoxVersion',
        'details' => 'Details',
        'diagnoseId' => 'DiagnoseId',
        'endTime' => 'EndTime',
        'finishedNumber' => 'FinishedNumber',
        'instanceId' => 'InstanceId',
        'level' => 'Level',
        'monitorVersion' => 'MonitorVersion',
        'percent' => 'Percent',
        'reportSLSSuccess' => 'ReportSLSSuccess',
        'SN' => 'SN',
        'startTime' => 'StartTime',
        'state' => 'State',
        'statistics' => 'Statistics',
        'storeType' => 'StoreType',
        'totalNumber' => 'TotalNumber',
        'UId' => 'UId',
        'userLevel' => 'UserLevel',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        if (null !== $this->level) {
            $this->level->validate();
        }
        if (null !== $this->statistics) {
            $this->statistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boxType) {
            $res['BoxType'] = $this->boxType;
        }

        if (null !== $this->boxVersion) {
            $res['BoxVersion'] = $this->boxVersion;
        }

        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->finishedNumber) {
            $res['FinishedNumber'] = $this->finishedNumber;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->level) {
            $res['Level'] = null !== $this->level ? $this->level->toArray($noStream) : $this->level;
        }

        if (null !== $this->monitorVersion) {
            $res['MonitorVersion'] = $this->monitorVersion;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        if (null !== $this->reportSLSSuccess) {
            $res['ReportSLSSuccess'] = $this->reportSLSSuccess;
        }

        if (null !== $this->SN) {
            $res['SN'] = $this->SN;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->statistics) {
            $res['Statistics'] = null !== $this->statistics ? $this->statistics->toArray($noStream) : $this->statistics;
        }

        if (null !== $this->storeType) {
            $res['StoreType'] = $this->storeType;
        }

        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }

        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }

        if (null !== $this->userLevel) {
            $res['UserLevel'] = $this->userLevel;
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
        if (isset($map['BoxType'])) {
            $model->boxType = $map['BoxType'];
        }

        if (isset($map['BoxVersion'])) {
            $model->boxVersion = $map['BoxVersion'];
        }

        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = details::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DiagnoseId'])) {
            $model->diagnoseId = $map['DiagnoseId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FinishedNumber'])) {
            $model->finishedNumber = $map['FinishedNumber'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Level'])) {
            $model->level = level::fromMap($map['Level']);
        }

        if (isset($map['MonitorVersion'])) {
            $model->monitorVersion = $map['MonitorVersion'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        if (isset($map['ReportSLSSuccess'])) {
            $model->reportSLSSuccess = $map['ReportSLSSuccess'];
        }

        if (isset($map['SN'])) {
            $model->SN = $map['SN'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Statistics'])) {
            $model->statistics = statistics::fromMap($map['Statistics']);
        }

        if (isset($map['StoreType'])) {
            $model->storeType = $map['StoreType'];
        }

        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }

        if (isset($map['UserLevel'])) {
            $model->userLevel = $map['UserLevel'];
        }

        return $model;
    }
}
