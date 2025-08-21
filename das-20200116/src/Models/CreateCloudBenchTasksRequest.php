<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class CreateCloudBenchTasksRequest extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupTime;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dstConnectionString;

    /**
     * @var string
     */
    public $dstInstanceId;

    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var string
     */
    public $dstSuperAccount;

    /**
     * @var string
     */
    public $dstSuperPassword;

    /**
     * @var string
     */
    public $dstType;

    /**
     * @var string
     */
    public $dtsJobClass;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $endState;

    /**
     * @var string
     */
    public $gatewayVpcId;

    /**
     * @var string
     */
    public $gatewayVpcIp;

    /**
     * @var string
     */
    public $rate;

    /**
     * @var string
     */
    public $requestDuration;

    /**
     * @var string
     */
    public $requestEndTime;

    /**
     * @var string
     */
    public $requestStartTime;

    /**
     * @var string
     */
    public $smartPressureTime;

    /**
     * @var string
     */
    public $srcInstanceId;

    /**
     * @var string
     */
    public $srcPublicIp;

    /**
     * @var string
     */
    public $srcSuperAccount;

    /**
     * @var string
     */
    public $srcSuperPassword;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $workDir;
    protected $_name = [
        'amount' => 'Amount',
        'backupId' => 'BackupId',
        'backupTime' => 'BackupTime',
        'clientType' => 'ClientType',
        'description' => 'Description',
        'dstConnectionString' => 'DstConnectionString',
        'dstInstanceId' => 'DstInstanceId',
        'dstPort' => 'DstPort',
        'dstSuperAccount' => 'DstSuperAccount',
        'dstSuperPassword' => 'DstSuperPassword',
        'dstType' => 'DstType',
        'dtsJobClass' => 'DtsJobClass',
        'dtsJobId' => 'DtsJobId',
        'endState' => 'EndState',
        'gatewayVpcId' => 'GatewayVpcId',
        'gatewayVpcIp' => 'GatewayVpcIp',
        'rate' => 'Rate',
        'requestDuration' => 'RequestDuration',
        'requestEndTime' => 'RequestEndTime',
        'requestStartTime' => 'RequestStartTime',
        'smartPressureTime' => 'SmartPressureTime',
        'srcInstanceId' => 'SrcInstanceId',
        'srcPublicIp' => 'SrcPublicIp',
        'srcSuperAccount' => 'SrcSuperAccount',
        'srcSuperPassword' => 'SrcSuperPassword',
        'taskType' => 'TaskType',
        'workDir' => 'WorkDir',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->backupTime) {
            $res['BackupTime'] = $this->backupTime;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dstConnectionString) {
            $res['DstConnectionString'] = $this->dstConnectionString;
        }

        if (null !== $this->dstInstanceId) {
            $res['DstInstanceId'] = $this->dstInstanceId;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->dstSuperAccount) {
            $res['DstSuperAccount'] = $this->dstSuperAccount;
        }

        if (null !== $this->dstSuperPassword) {
            $res['DstSuperPassword'] = $this->dstSuperPassword;
        }

        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }

        if (null !== $this->dtsJobClass) {
            $res['DtsJobClass'] = $this->dtsJobClass;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->endState) {
            $res['EndState'] = $this->endState;
        }

        if (null !== $this->gatewayVpcId) {
            $res['GatewayVpcId'] = $this->gatewayVpcId;
        }

        if (null !== $this->gatewayVpcIp) {
            $res['GatewayVpcIp'] = $this->gatewayVpcIp;
        }

        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        if (null !== $this->requestDuration) {
            $res['RequestDuration'] = $this->requestDuration;
        }

        if (null !== $this->requestEndTime) {
            $res['RequestEndTime'] = $this->requestEndTime;
        }

        if (null !== $this->requestStartTime) {
            $res['RequestStartTime'] = $this->requestStartTime;
        }

        if (null !== $this->smartPressureTime) {
            $res['SmartPressureTime'] = $this->smartPressureTime;
        }

        if (null !== $this->srcInstanceId) {
            $res['SrcInstanceId'] = $this->srcInstanceId;
        }

        if (null !== $this->srcPublicIp) {
            $res['SrcPublicIp'] = $this->srcPublicIp;
        }

        if (null !== $this->srcSuperAccount) {
            $res['SrcSuperAccount'] = $this->srcSuperAccount;
        }

        if (null !== $this->srcSuperPassword) {
            $res['SrcSuperPassword'] = $this->srcSuperPassword;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['BackupTime'])) {
            $model->backupTime = $map['BackupTime'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DstConnectionString'])) {
            $model->dstConnectionString = $map['DstConnectionString'];
        }

        if (isset($map['DstInstanceId'])) {
            $model->dstInstanceId = $map['DstInstanceId'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['DstSuperAccount'])) {
            $model->dstSuperAccount = $map['DstSuperAccount'];
        }

        if (isset($map['DstSuperPassword'])) {
            $model->dstSuperPassword = $map['DstSuperPassword'];
        }

        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }

        if (isset($map['DtsJobClass'])) {
            $model->dtsJobClass = $map['DtsJobClass'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['EndState'])) {
            $model->endState = $map['EndState'];
        }

        if (isset($map['GatewayVpcId'])) {
            $model->gatewayVpcId = $map['GatewayVpcId'];
        }

        if (isset($map['GatewayVpcIp'])) {
            $model->gatewayVpcIp = $map['GatewayVpcIp'];
        }

        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        if (isset($map['RequestDuration'])) {
            $model->requestDuration = $map['RequestDuration'];
        }

        if (isset($map['RequestEndTime'])) {
            $model->requestEndTime = $map['RequestEndTime'];
        }

        if (isset($map['RequestStartTime'])) {
            $model->requestStartTime = $map['RequestStartTime'];
        }

        if (isset($map['SmartPressureTime'])) {
            $model->smartPressureTime = $map['SmartPressureTime'];
        }

        if (isset($map['SrcInstanceId'])) {
            $model->srcInstanceId = $map['SrcInstanceId'];
        }

        if (isset($map['SrcPublicIp'])) {
            $model->srcPublicIp = $map['SrcPublicIp'];
        }

        if (isset($map['SrcSuperAccount'])) {
            $model->srcSuperAccount = $map['SrcSuperAccount'];
        }

        if (isset($map['SrcSuperPassword'])) {
            $model->srcSuperPassword = $map['SrcSuperPassword'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        return $model;
    }
}
