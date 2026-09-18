<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\GetAttackTargetResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $connectionConfig;

    /**
     * @var string
     */
    public $connectionMethod;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $firstScanTime;

    /**
     * @var string
     */
    public $lastScanFailMessage;

    /**
     * @var string
     */
    public $lastScanStatus;

    /**
     * @var int
     */
    public $lastScanTime;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $scanCount;

    /**
     * @var string
     */
    public $scanTaskConfig;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'connectionConfig' => 'ConnectionConfig',
        'connectionMethod' => 'ConnectionMethod',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'endpoint' => 'Endpoint',
        'firstScanTime' => 'FirstScanTime',
        'lastScanFailMessage' => 'LastScanFailMessage',
        'lastScanStatus' => 'LastScanStatus',
        'lastScanTime' => 'LastScanTime',
        'modelName' => 'ModelName',
        'modifyTime' => 'ModifyTime',
        'provider' => 'Provider',
        'riskLevel' => 'RiskLevel',
        'scanCount' => 'ScanCount',
        'scanTaskConfig' => 'ScanTaskConfig',
        'targetId' => 'TargetId',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionConfig) {
            $res['ConnectionConfig'] = $this->connectionConfig;
        }

        if (null !== $this->connectionMethod) {
            $res['ConnectionMethod'] = $this->connectionMethod;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }

        if (null !== $this->lastScanFailMessage) {
            $res['LastScanFailMessage'] = $this->lastScanFailMessage;
        }

        if (null !== $this->lastScanStatus) {
            $res['LastScanStatus'] = $this->lastScanStatus;
        }

        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->scanCount) {
            $res['ScanCount'] = $this->scanCount;
        }

        if (null !== $this->scanTaskConfig) {
            $res['ScanTaskConfig'] = $this->scanTaskConfig;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['ConnectionConfig'])) {
            $model->connectionConfig = $map['ConnectionConfig'];
        }

        if (isset($map['ConnectionMethod'])) {
            $model->connectionMethod = $map['ConnectionMethod'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }

        if (isset($map['LastScanFailMessage'])) {
            $model->lastScanFailMessage = $map['LastScanFailMessage'];
        }

        if (isset($map['LastScanStatus'])) {
            $model->lastScanStatus = $map['LastScanStatus'];
        }

        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['ScanCount'])) {
            $model->scanCount = $map['ScanCount'];
        }

        if (isset($map['ScanTaskConfig'])) {
            $model->scanTaskConfig = $map['ScanTaskConfig'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
