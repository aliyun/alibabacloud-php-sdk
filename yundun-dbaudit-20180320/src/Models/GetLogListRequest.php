<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetLogListRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlKey;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $minAffectRows;

    /**
     * @var int
     */
    public $maxAffectRows;

    /**
     * @var int
     */
    public $minExecCostUS;

    /**
     * @var int
     */
    public $maxExecCostUS;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string[]
     */
    public $clientIpList;

    /**
     * @var string[]
     */
    public $dbUserList;

    /**
     * @var string[]
     */
    public $dbHostList;

    /**
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @var string[]
     */
    public $ruleTypeList;

    /**
     * @var string[]
     */
    public $sqlTypeList;

    /**
     * @var string[]
     */
    public $clientProgramList;
    protected $_name = [
        'regionId'          => 'RegionId',
        'instanceId'        => 'InstanceId',
        'dbId'              => 'DbId',
        'beginDate'         => 'BeginDate',
        'endDate'           => 'EndDate',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'sqlId'             => 'SqlId',
        'sqlKey'            => 'SqlKey',
        'sessionId'         => 'SessionId',
        'templateId'        => 'TemplateId',
        'isSuccess'         => 'IsSuccess',
        'minAffectRows'     => 'MinAffectRows',
        'maxAffectRows'     => 'MaxAffectRows',
        'minExecCostUS'     => 'MinExecCostUS',
        'maxExecCostUS'     => 'MaxExecCostUS',
        'ruleName'          => 'RuleName',
        'clientIpList'      => 'ClientIpList',
        'dbUserList'        => 'DbUserList',
        'dbHostList'        => 'DbHostList',
        'riskLevelList'     => 'RiskLevelList',
        'ruleTypeList'      => 'RuleTypeList',
        'sqlTypeList'       => 'SqlTypeList',
        'clientProgramList' => 'ClientProgramList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlKey) {
            $res['SqlKey'] = $this->sqlKey;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->minAffectRows) {
            $res['MinAffectRows'] = $this->minAffectRows;
        }
        if (null !== $this->maxAffectRows) {
            $res['MaxAffectRows'] = $this->maxAffectRows;
        }
        if (null !== $this->minExecCostUS) {
            $res['MinExecCostUS'] = $this->minExecCostUS;
        }
        if (null !== $this->maxExecCostUS) {
            $res['MaxExecCostUS'] = $this->maxExecCostUS;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->clientIpList) {
            $res['ClientIpList'] = $this->clientIpList;
        }
        if (null !== $this->dbUserList) {
            $res['DbUserList'] = $this->dbUserList;
        }
        if (null !== $this->dbHostList) {
            $res['DbHostList'] = $this->dbHostList;
        }
        if (null !== $this->riskLevelList) {
            $res['RiskLevelList'] = $this->riskLevelList;
        }
        if (null !== $this->ruleTypeList) {
            $res['RuleTypeList'] = $this->ruleTypeList;
        }
        if (null !== $this->sqlTypeList) {
            $res['SqlTypeList'] = $this->sqlTypeList;
        }
        if (null !== $this->clientProgramList) {
            $res['ClientProgramList'] = $this->clientProgramList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlKey'])) {
            $model->sqlKey = $map['SqlKey'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['MinAffectRows'])) {
            $model->minAffectRows = $map['MinAffectRows'];
        }
        if (isset($map['MaxAffectRows'])) {
            $model->maxAffectRows = $map['MaxAffectRows'];
        }
        if (isset($map['MinExecCostUS'])) {
            $model->minExecCostUS = $map['MinExecCostUS'];
        }
        if (isset($map['MaxExecCostUS'])) {
            $model->maxExecCostUS = $map['MaxExecCostUS'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = $map['ClientIpList'];
            }
        }
        if (isset($map['DbUserList'])) {
            if (!empty($map['DbUserList'])) {
                $model->dbUserList = $map['DbUserList'];
            }
        }
        if (isset($map['DbHostList'])) {
            if (!empty($map['DbHostList'])) {
                $model->dbHostList = $map['DbHostList'];
            }
        }
        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = $map['RiskLevelList'];
            }
        }
        if (isset($map['RuleTypeList'])) {
            if (!empty($map['RuleTypeList'])) {
                $model->ruleTypeList = $map['RuleTypeList'];
            }
        }
        if (isset($map['SqlTypeList'])) {
            if (!empty($map['SqlTypeList'])) {
                $model->sqlTypeList = $map['SqlTypeList'];
            }
        }
        if (isset($map['ClientProgramList'])) {
            if (!empty($map['ClientProgramList'])) {
                $model->clientProgramList = $map['ClientProgramList'];
            }
        }

        return $model;
    }
}
