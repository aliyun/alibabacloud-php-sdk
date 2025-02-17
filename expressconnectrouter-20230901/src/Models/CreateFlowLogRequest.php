<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;

class CreateFlowLogRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $ecrId;
    /**
     * @var string
     */
    public $flowLogName;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceType;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $logStoreName;
    /**
     * @var string
     */
    public $projectName;
    /**
     * @var string
     */
    public $samplingRate;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'description'  => 'Description',
        'dryRun'       => 'DryRun',
        'ecrId'        => 'EcrId',
        'flowLogName'  => 'FlowLogName',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'interval'     => 'Interval',
        'logStoreName' => 'LogStoreName',
        'projectName'  => 'ProjectName',
        'samplingRate' => 'SamplingRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }

        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }

        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }

        return $model;
    }
}
