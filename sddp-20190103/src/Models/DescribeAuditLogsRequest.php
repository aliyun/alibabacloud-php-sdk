<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeAuditLogsRequest extends Model
{
    /**
     * @var string
     */
    public $asyncRequestId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientUa;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $effectRowRange;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $executeTimeRange;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $ipType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $loadWhiteList;

    /**
     * @var string
     */
    public $logSource;

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
    public $operateType;

    /**
     * @var string
     */
    public $ossObjectKey;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var bool
     */
    public $ruleAggQuery;

    /**
     * @var string
     */
    public $ruleCategory;

    /**
     * @var string
     */
    public $ruleID;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'asyncRequestId' => 'AsyncRequestId',
        'clientIp' => 'ClientIp',
        'clientUa' => 'ClientUa',
        'currentPage' => 'CurrentPage',
        'databaseName' => 'DatabaseName',
        'effectRowRange' => 'EffectRowRange',
        'endTime' => 'EndTime',
        'executeTimeRange' => 'ExecuteTimeRange',
        'instanceName' => 'InstanceName',
        'ipType' => 'IpType',
        'lang' => 'Lang',
        'loadWhiteList' => 'LoadWhiteList',
        'logSource' => 'LogSource',
        'memberAccount' => 'MemberAccount',
        'message' => 'Message',
        'operateType' => 'OperateType',
        'ossObjectKey' => 'OssObjectKey',
        'pageSize' => 'PageSize',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'ruleAggQuery' => 'RuleAggQuery',
        'ruleCategory' => 'RuleCategory',
        'ruleID' => 'RuleID',
        'ruleName' => 'RuleName',
        'sqlText' => 'SqlText',
        'startTime' => 'StartTime',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncRequestId) {
            $res['AsyncRequestId'] = $this->asyncRequestId;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->clientUa) {
            $res['ClientUa'] = $this->clientUa;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->effectRowRange) {
            $res['EffectRowRange'] = $this->effectRowRange;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->executeTimeRange) {
            $res['ExecuteTimeRange'] = $this->executeTimeRange;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->loadWhiteList) {
            $res['LoadWhiteList'] = $this->loadWhiteList;
        }

        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }

        if (null !== $this->memberAccount) {
            $res['MemberAccount'] = $this->memberAccount;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->ossObjectKey) {
            $res['OssObjectKey'] = $this->ossObjectKey;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->ruleAggQuery) {
            $res['RuleAggQuery'] = $this->ruleAggQuery;
        }

        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }

        if (null !== $this->ruleID) {
            $res['RuleID'] = $this->ruleID;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AsyncRequestId'])) {
            $model->asyncRequestId = $map['AsyncRequestId'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['ClientUa'])) {
            $model->clientUa = $map['ClientUa'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['EffectRowRange'])) {
            $model->effectRowRange = $map['EffectRowRange'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExecuteTimeRange'])) {
            $model->executeTimeRange = $map['ExecuteTimeRange'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LoadWhiteList'])) {
            $model->loadWhiteList = $map['LoadWhiteList'];
        }

        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }

        if (isset($map['MemberAccount'])) {
            $model->memberAccount = $map['MemberAccount'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['OssObjectKey'])) {
            $model->ossObjectKey = $map['OssObjectKey'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RuleAggQuery'])) {
            $model->ruleAggQuery = $map['RuleAggQuery'];
        }

        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }

        if (isset($map['RuleID'])) {
            $model->ruleID = $map['RuleID'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
