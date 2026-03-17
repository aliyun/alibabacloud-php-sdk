<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeFlowLogsResponseBody\flowLogs;

use AlibabaCloud\Dara\Model;

class flowLogSetType extends Model
{
    /**
     * @var int
     */
    public $activeAging;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowLogId;

    /**
     * @var int
     */
    public $inactiveAging;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netflowServerIp;

    /**
     * @var string
     */
    public $netflowServerPort;

    /**
     * @var string
     */
    public $netflowVersion;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalSagNum;
    protected $_name = [
        'activeAging' => 'ActiveAging',
        'description' => 'Description',
        'flowLogId' => 'FlowLogId',
        'inactiveAging' => 'InactiveAging',
        'logstoreName' => 'LogstoreName',
        'name' => 'Name',
        'netflowServerIp' => 'NetflowServerIp',
        'netflowServerPort' => 'NetflowServerPort',
        'netflowVersion' => 'NetflowVersion',
        'outputType' => 'OutputType',
        'projectName' => 'ProjectName',
        'resourceGroupId' => 'ResourceGroupId',
        'slsRegionId' => 'SlsRegionId',
        'status' => 'Status',
        'totalSagNum' => 'TotalSagNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeAging) {
            $res['ActiveAging'] = $this->activeAging;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }

        if (null !== $this->inactiveAging) {
            $res['InactiveAging'] = $this->inactiveAging;
        }

        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->netflowServerIp) {
            $res['NetflowServerIp'] = $this->netflowServerIp;
        }

        if (null !== $this->netflowServerPort) {
            $res['NetflowServerPort'] = $this->netflowServerPort;
        }

        if (null !== $this->netflowVersion) {
            $res['NetflowVersion'] = $this->netflowVersion;
        }

        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalSagNum) {
            $res['TotalSagNum'] = $this->totalSagNum;
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
        if (isset($map['ActiveAging'])) {
            $model->activeAging = $map['ActiveAging'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }

        if (isset($map['InactiveAging'])) {
            $model->inactiveAging = $map['InactiveAging'];
        }

        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetflowServerIp'])) {
            $model->netflowServerIp = $map['NetflowServerIp'];
        }

        if (isset($map['NetflowServerPort'])) {
            $model->netflowServerPort = $map['NetflowServerPort'];
        }

        if (isset($map['NetflowVersion'])) {
            $model->netflowVersion = $map['NetflowVersion'];
        }

        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalSagNum'])) {
            $model->totalSagNum = $map['TotalSagNum'];
        }

        return $model;
    }
}
