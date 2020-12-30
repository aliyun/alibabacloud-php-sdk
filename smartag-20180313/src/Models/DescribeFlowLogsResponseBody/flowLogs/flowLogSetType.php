<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsResponseBody\flowLogs;

use AlibabaCloud\Tea\Model;

class flowLogSetType extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalSagNum;

    /**
     * @var string
     */
    public $netflowServerIp;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var int
     */
    public $activeAging;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $netflowVersion;

    /**
     * @var int
     */
    public $inactiveAging;

    /**
     * @var string
     */
    public $netflowServerPort;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $flowLogId;

    /**
     * @var string
     */
    public $logstoreName;
    protected $_name = [
        'status'            => 'Status',
        'totalSagNum'       => 'TotalSagNum',
        'netflowServerIp'   => 'NetflowServerIp',
        'projectName'       => 'ProjectName',
        'slsRegionId'       => 'SlsRegionId',
        'activeAging'       => 'ActiveAging',
        'outputType'        => 'OutputType',
        'description'       => 'Description',
        'netflowVersion'    => 'NetflowVersion',
        'inactiveAging'     => 'InactiveAging',
        'netflowServerPort' => 'NetflowServerPort',
        'name'              => 'Name',
        'flowLogId'         => 'FlowLogId',
        'logstoreName'      => 'LogstoreName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalSagNum) {
            $res['TotalSagNum'] = $this->totalSagNum;
        }
        if (null !== $this->netflowServerIp) {
            $res['NetflowServerIp'] = $this->netflowServerIp;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->activeAging) {
            $res['ActiveAging'] = $this->activeAging;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->netflowVersion) {
            $res['NetflowVersion'] = $this->netflowVersion;
        }
        if (null !== $this->inactiveAging) {
            $res['InactiveAging'] = $this->inactiveAging;
        }
        if (null !== $this->netflowServerPort) {
            $res['NetflowServerPort'] = $this->netflowServerPort;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowLogSetType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalSagNum'])) {
            $model->totalSagNum = $map['TotalSagNum'];
        }
        if (isset($map['NetflowServerIp'])) {
            $model->netflowServerIp = $map['NetflowServerIp'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['ActiveAging'])) {
            $model->activeAging = $map['ActiveAging'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetflowVersion'])) {
            $model->netflowVersion = $map['NetflowVersion'];
        }
        if (isset($map['InactiveAging'])) {
            $model->inactiveAging = $map['InactiveAging'];
        }
        if (isset($map['NetflowServerPort'])) {
            $model->netflowServerPort = $map['NetflowServerPort'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }

        return $model;
    }
}
