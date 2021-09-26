<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetLogDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $clientPort;

    /**
     * @var string
     */
    public $appClientIp;

    /**
     * @var int
     */
    public $execCostUS;

    /**
     * @var string
     */
    public $sessionLogoutTime;

    /**
     * @var string
     */
    public $clientOsUser;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $appUsername;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var int
     */
    public $ruleKeyId;

    /**
     * @var string
     */
    public $sqlResult;

    /**
     * @var int
     */
    public $affectRows;

    /**
     * @var string
     */
    public $sqlTypeName;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $sessionLoginTime;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var string
     */
    public $serverMac;

    /**
     * @var string
     */
    public $dbServer;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $sqlContent;

    /**
     * @var string
     */
    public $instName;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $clientProgram;

    /**
     * @var string
     */
    public $captureTime;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientMac;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $responseText;

    /**
     * @var int
     */
    public $fetchCostUS;

    /**
     * @var string[]
     */
    public $templateRules;
    protected $_name = [
        'clientPort'        => 'ClientPort',
        'appClientIp'       => 'AppClientIp',
        'execCostUS'        => 'ExecCostUS',
        'sessionLogoutTime' => 'SessionLogoutTime',
        'clientOsUser'      => 'ClientOsUser',
        'ruleId'            => 'RuleId',
        'requestId'         => 'RequestId',
        'sqlId'             => 'SqlId',
        'sessionId'         => 'SessionId',
        'sqlType'           => 'SqlType',
        'appUsername'       => 'AppUsername',
        'riskLevel'         => 'RiskLevel',
        'dbId'              => 'DbId',
        'ruleType'          => 'RuleType',
        'ruleKeyId'         => 'RuleKeyId',
        'sqlResult'         => 'SqlResult',
        'affectRows'        => 'AffectRows',
        'sqlTypeName'       => 'SqlTypeName',
        'schema'            => 'Schema',
        'sessionLoginTime'  => 'SessionLoginTime',
        'dbUser'            => 'DbUser',
        'serverMac'         => 'ServerMac',
        'dbServer'          => 'DbServer',
        'ruleName'          => 'RuleName',
        'responseCode'      => 'ResponseCode',
        'sqlContent'        => 'SqlContent',
        'instName'          => 'InstName',
        'templateContent'   => 'TemplateContent',
        'clientProgram'     => 'ClientProgram',
        'captureTime'       => 'CaptureTime',
        'clientIp'          => 'ClientIp',
        'clientMac'         => 'ClientMac',
        'templateId'        => 'TemplateId',
        'responseText'      => 'ResponseText',
        'fetchCostUS'       => 'FetchCostUS',
        'templateRules'     => 'TemplateRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }
        if (null !== $this->appClientIp) {
            $res['AppClientIp'] = $this->appClientIp;
        }
        if (null !== $this->execCostUS) {
            $res['ExecCostUS'] = $this->execCostUS;
        }
        if (null !== $this->sessionLogoutTime) {
            $res['SessionLogoutTime'] = $this->sessionLogoutTime;
        }
        if (null !== $this->clientOsUser) {
            $res['ClientOsUser'] = $this->clientOsUser;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->appUsername) {
            $res['AppUsername'] = $this->appUsername;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->ruleKeyId) {
            $res['RuleKeyId'] = $this->ruleKeyId;
        }
        if (null !== $this->sqlResult) {
            $res['SqlResult'] = $this->sqlResult;
        }
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }
        if (null !== $this->sqlTypeName) {
            $res['SqlTypeName'] = $this->sqlTypeName;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->sessionLoginTime) {
            $res['SessionLoginTime'] = $this->sessionLoginTime;
        }
        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }
        if (null !== $this->serverMac) {
            $res['ServerMac'] = $this->serverMac;
        }
        if (null !== $this->dbServer) {
            $res['DbServer'] = $this->dbServer;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->sqlContent) {
            $res['SqlContent'] = $this->sqlContent;
        }
        if (null !== $this->instName) {
            $res['InstName'] = $this->instName;
        }
        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }
        if (null !== $this->clientProgram) {
            $res['ClientProgram'] = $this->clientProgram;
        }
        if (null !== $this->captureTime) {
            $res['CaptureTime'] = $this->captureTime;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientMac) {
            $res['ClientMac'] = $this->clientMac;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->responseText) {
            $res['ResponseText'] = $this->responseText;
        }
        if (null !== $this->fetchCostUS) {
            $res['FetchCostUS'] = $this->fetchCostUS;
        }
        if (null !== $this->templateRules) {
            $res['TemplateRules'] = $this->templateRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }
        if (isset($map['AppClientIp'])) {
            $model->appClientIp = $map['AppClientIp'];
        }
        if (isset($map['ExecCostUS'])) {
            $model->execCostUS = $map['ExecCostUS'];
        }
        if (isset($map['SessionLogoutTime'])) {
            $model->sessionLogoutTime = $map['SessionLogoutTime'];
        }
        if (isset($map['ClientOsUser'])) {
            $model->clientOsUser = $map['ClientOsUser'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['AppUsername'])) {
            $model->appUsername = $map['AppUsername'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['RuleKeyId'])) {
            $model->ruleKeyId = $map['RuleKeyId'];
        }
        if (isset($map['SqlResult'])) {
            $model->sqlResult = $map['SqlResult'];
        }
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }
        if (isset($map['SqlTypeName'])) {
            $model->sqlTypeName = $map['SqlTypeName'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['SessionLoginTime'])) {
            $model->sessionLoginTime = $map['SessionLoginTime'];
        }
        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }
        if (isset($map['ServerMac'])) {
            $model->serverMac = $map['ServerMac'];
        }
        if (isset($map['DbServer'])) {
            $model->dbServer = $map['DbServer'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['SqlContent'])) {
            $model->sqlContent = $map['SqlContent'];
        }
        if (isset($map['InstName'])) {
            $model->instName = $map['InstName'];
        }
        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }
        if (isset($map['ClientProgram'])) {
            $model->clientProgram = $map['ClientProgram'];
        }
        if (isset($map['CaptureTime'])) {
            $model->captureTime = $map['CaptureTime'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientMac'])) {
            $model->clientMac = $map['ClientMac'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ResponseText'])) {
            $model->responseText = $map['ResponseText'];
        }
        if (isset($map['FetchCostUS'])) {
            $model->fetchCostUS = $map['FetchCostUS'];
        }
        if (isset($map['TemplateRules'])) {
            if (!empty($map['TemplateRules'])) {
                $model->templateRules = $map['TemplateRules'];
            }
        }

        return $model;
    }
}
