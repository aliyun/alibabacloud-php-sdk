<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;

class GetLogDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $affectRows;

    /**
     * @var string
     */
    public $appClientIp;

    /**
     * @var string
     */
    public $appUsername;

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
    public $clientOsUser;

    /**
     * @var int
     */
    public $clientPort;

    /**
     * @var string
     */
    public $clientProgram;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbServer;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var int
     */
    public $execCostUS;

    /**
     * @var int
     */
    public $fetchCostUS;

    /**
     * @var string
     */
    public $instName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $responseText;

    /**
     * @var int
     */
    public $riskLevel;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleKeyId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $secondarySqlType;

    /**
     * @var string
     */
    public $serverMac;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sessionLoginTime;

    /**
     * @var string
     */
    public $sessionLogoutTime;

    /**
     * @var string
     */
    public $sqlContent;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlResult;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $sqlTypeName;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string[]
     */
    public $templateRules;
    protected $_name = [
        'affectRows' => 'AffectRows',
        'appClientIp' => 'AppClientIp',
        'appUsername' => 'AppUsername',
        'captureTime' => 'CaptureTime',
        'clientIp' => 'ClientIp',
        'clientMac' => 'ClientMac',
        'clientOsUser' => 'ClientOsUser',
        'clientPort' => 'ClientPort',
        'clientProgram' => 'ClientProgram',
        'dbId' => 'DbId',
        'dbServer' => 'DbServer',
        'dbUser' => 'DbUser',
        'execCostUS' => 'ExecCostUS',
        'fetchCostUS' => 'FetchCostUS',
        'instName' => 'InstName',
        'requestId' => 'RequestId',
        'responseCode' => 'ResponseCode',
        'responseText' => 'ResponseText',
        'riskLevel' => 'RiskLevel',
        'ruleId' => 'RuleId',
        'ruleKeyId' => 'RuleKeyId',
        'ruleName' => 'RuleName',
        'ruleType' => 'RuleType',
        'schema' => 'Schema',
        'secondarySqlType' => 'SecondarySqlType',
        'serverMac' => 'ServerMac',
        'sessionId' => 'SessionId',
        'sessionLoginTime' => 'SessionLoginTime',
        'sessionLogoutTime' => 'SessionLogoutTime',
        'sqlContent' => 'SqlContent',
        'sqlId' => 'SqlId',
        'sqlResult' => 'SqlResult',
        'sqlType' => 'SqlType',
        'sqlTypeName' => 'SqlTypeName',
        'templateContent' => 'TemplateContent',
        'templateId' => 'TemplateId',
        'templateRules' => 'TemplateRules',
    ];

    public function validate()
    {
        if (\is_array($this->templateRules)) {
            Model::validateArray($this->templateRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }

        if (null !== $this->appClientIp) {
            $res['AppClientIp'] = $this->appClientIp;
        }

        if (null !== $this->appUsername) {
            $res['AppUsername'] = $this->appUsername;
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

        if (null !== $this->clientOsUser) {
            $res['ClientOsUser'] = $this->clientOsUser;
        }

        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }

        if (null !== $this->clientProgram) {
            $res['ClientProgram'] = $this->clientProgram;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbServer) {
            $res['DbServer'] = $this->dbServer;
        }

        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }

        if (null !== $this->execCostUS) {
            $res['ExecCostUS'] = $this->execCostUS;
        }

        if (null !== $this->fetchCostUS) {
            $res['FetchCostUS'] = $this->fetchCostUS;
        }

        if (null !== $this->instName) {
            $res['InstName'] = $this->instName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }

        if (null !== $this->responseText) {
            $res['ResponseText'] = $this->responseText;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleKeyId) {
            $res['RuleKeyId'] = $this->ruleKeyId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->secondarySqlType) {
            $res['SecondarySqlType'] = $this->secondarySqlType;
        }

        if (null !== $this->serverMac) {
            $res['ServerMac'] = $this->serverMac;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionLoginTime) {
            $res['SessionLoginTime'] = $this->sessionLoginTime;
        }

        if (null !== $this->sessionLogoutTime) {
            $res['SessionLogoutTime'] = $this->sessionLogoutTime;
        }

        if (null !== $this->sqlContent) {
            $res['SqlContent'] = $this->sqlContent;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlResult) {
            $res['SqlResult'] = $this->sqlResult;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->sqlTypeName) {
            $res['SqlTypeName'] = $this->sqlTypeName;
        }

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateRules) {
            if (\is_array($this->templateRules)) {
                $res['TemplateRules'] = [];
                $n1 = 0;
                foreach ($this->templateRules as $item1) {
                    $res['TemplateRules'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }

        if (isset($map['AppClientIp'])) {
            $model->appClientIp = $map['AppClientIp'];
        }

        if (isset($map['AppUsername'])) {
            $model->appUsername = $map['AppUsername'];
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

        if (isset($map['ClientOsUser'])) {
            $model->clientOsUser = $map['ClientOsUser'];
        }

        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }

        if (isset($map['ClientProgram'])) {
            $model->clientProgram = $map['ClientProgram'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbServer'])) {
            $model->dbServer = $map['DbServer'];
        }

        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }

        if (isset($map['ExecCostUS'])) {
            $model->execCostUS = $map['ExecCostUS'];
        }

        if (isset($map['FetchCostUS'])) {
            $model->fetchCostUS = $map['FetchCostUS'];
        }

        if (isset($map['InstName'])) {
            $model->instName = $map['InstName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }

        if (isset($map['ResponseText'])) {
            $model->responseText = $map['ResponseText'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleKeyId'])) {
            $model->ruleKeyId = $map['RuleKeyId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['SecondarySqlType'])) {
            $model->secondarySqlType = $map['SecondarySqlType'];
        }

        if (isset($map['ServerMac'])) {
            $model->serverMac = $map['ServerMac'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SessionLoginTime'])) {
            $model->sessionLoginTime = $map['SessionLoginTime'];
        }

        if (isset($map['SessionLogoutTime'])) {
            $model->sessionLogoutTime = $map['SessionLogoutTime'];
        }

        if (isset($map['SqlContent'])) {
            $model->sqlContent = $map['SqlContent'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlResult'])) {
            $model->sqlResult = $map['SqlResult'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['SqlTypeName'])) {
            $model->sqlTypeName = $map['SqlTypeName'];
        }

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateRules'])) {
            if (!empty($map['TemplateRules'])) {
                $model->templateRules = [];
                $n1 = 0;
                foreach ($map['TemplateRules'] as $item1) {
                    $model->templateRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
