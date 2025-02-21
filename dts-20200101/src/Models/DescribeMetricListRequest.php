<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeMetricListRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $dtsJobId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $env;
    /**
     * @var string
     */
    public $metricName;
    /**
     * @var string
     */
    public $metricType;
    /**
     * @var string
     */
    public $ownerID;
    /**
     * @var string
     */
    public $param;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'accountId'       => 'AccountId',
        'clientToken'     => 'ClientToken',
        'dtsJobId'        => 'DtsJobId',
        'endTime'         => 'EndTime',
        'env'             => 'Env',
        'metricName'      => 'MetricName',
        'metricType'      => 'MetricType',
        'ownerID'         => 'OwnerID',
        'param'           => 'Param',
        'period'          => 'Period',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }

        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }

        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
