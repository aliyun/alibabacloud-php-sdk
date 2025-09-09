<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAuditLogsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientPort;

    /**
     * @var string
     */
    public $clientUa;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dataSet;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var int
     */
    public $effectRow;

    /**
     * @var int
     */
    public $executeStatus;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var bool
     */
    public $inWhiteList;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $ipType;

    /**
     * @var int
     */
    public $logTime;

    /**
     * @var string
     */
    public $memberAccount;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $ossObjectKey;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $ruleCategory;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $warnLevel;

    /**
     * @var string
     */
    public $warnLevelName;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'clientPort' => 'ClientPort',
        'clientUa' => 'ClientUa',
        'columnName' => 'ColumnName',
        'creationTime' => 'CreationTime',
        'dataSet' => 'DataSet',
        'databaseName' => 'DatabaseName',
        'effectRow' => 'EffectRow',
        'executeStatus' => 'ExecuteStatus',
        'executeTime' => 'ExecuteTime',
        'inWhiteList' => 'InWhiteList',
        'instanceDescription' => 'InstanceDescription',
        'instanceName' => 'InstanceName',
        'ipType' => 'IpType',
        'logTime' => 'LogTime',
        'memberAccount' => 'MemberAccount',
        'message' => 'Message',
        'modelName' => 'ModelName',
        'operateType' => 'OperateType',
        'ossObjectKey' => 'OssObjectKey',
        'packageName' => 'PackageName',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'ruleCategory' => 'RuleCategory',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'sqlText' => 'SqlText',
        'tableName' => 'TableName',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'warnLevel' => 'WarnLevel',
        'warnLevelName' => 'WarnLevelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }

        if (null !== $this->clientUa) {
            $res['ClientUa'] = $this->clientUa;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->dataSet) {
            $res['DataSet'] = $this->dataSet;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->effectRow) {
            $res['EffectRow'] = $this->effectRow;
        }

        if (null !== $this->executeStatus) {
            $res['ExecuteStatus'] = $this->executeStatus;
        }

        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }

        if (null !== $this->inWhiteList) {
            $res['InWhiteList'] = $this->inWhiteList;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }

        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->ossObjectKey) {
            $res['OssObjectKey'] = $this->ossObjectKey;
        }

        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->warnLevel) {
            $res['WarnLevel'] = $this->warnLevel;
        }

        if (null !== $this->warnLevelName) {
            $res['WarnLevelName'] = $this->warnLevelName;
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }

        if (isset($map['ClientUa'])) {
            $model->clientUa = $map['ClientUa'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DataSet'])) {
            $model->dataSet = $map['DataSet'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['EffectRow'])) {
            $model->effectRow = $map['EffectRow'];
        }

        if (isset($map['ExecuteStatus'])) {
            $model->executeStatus = $map['ExecuteStatus'];
        }

        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }

        if (isset($map['InWhiteList'])) {
            $model->inWhiteList = $map['InWhiteList'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['OssObjectKey'])) {
            $model->ossObjectKey = $map['OssObjectKey'];
        }

        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WarnLevel'])) {
            $model->warnLevel = $map['WarnLevel'];
        }

        if (isset($map['WarnLevelName'])) {
            $model->warnLevelName = $map['WarnLevelName'];
        }

        return $model;
    }
}
