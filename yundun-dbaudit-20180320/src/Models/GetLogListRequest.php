<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;

class GetLogListRequest extends Model
{
    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string[]
     */
    public $clientIpList;

    /**
     * @var string[]
     */
    public $clientProgramList;

    /**
     * @var string[]
     */
    public $dbHostList;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string[]
     */
    public $dbUserList;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxAffectRows;

    /**
     * @var int
     */
    public $maxExecCostUS;

    /**
     * @var int
     */
    public $minAffectRows;

    /**
     * @var int
     */
    public $minExecCostUS;

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
    public $regionId;

    /**
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string[]
     */
    public $ruleTypeList;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlKey;

    /**
     * @var string[]
     */
    public $sqlTypeList;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'clientIpList' => 'ClientIpList',
        'clientProgramList' => 'ClientProgramList',
        'dbHostList' => 'DbHostList',
        'dbId' => 'DbId',
        'dbUserList' => 'DbUserList',
        'endDate' => 'EndDate',
        'instanceId' => 'InstanceId',
        'isSuccess' => 'IsSuccess',
        'lang' => 'Lang',
        'maxAffectRows' => 'MaxAffectRows',
        'maxExecCostUS' => 'MaxExecCostUS',
        'minAffectRows' => 'MinAffectRows',
        'minExecCostUS' => 'MinExecCostUS',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'riskLevelList' => 'RiskLevelList',
        'ruleName' => 'RuleName',
        'ruleTypeList' => 'RuleTypeList',
        'sessionId' => 'SessionId',
        'sqlId' => 'SqlId',
        'sqlKey' => 'SqlKey',
        'sqlTypeList' => 'SqlTypeList',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->clientIpList)) {
            Model::validateArray($this->clientIpList);
        }
        if (\is_array($this->clientProgramList)) {
            Model::validateArray($this->clientProgramList);
        }
        if (\is_array($this->dbHostList)) {
            Model::validateArray($this->dbHostList);
        }
        if (\is_array($this->dbUserList)) {
            Model::validateArray($this->dbUserList);
        }
        if (\is_array($this->riskLevelList)) {
            Model::validateArray($this->riskLevelList);
        }
        if (\is_array($this->ruleTypeList)) {
            Model::validateArray($this->ruleTypeList);
        }
        if (\is_array($this->sqlTypeList)) {
            Model::validateArray($this->sqlTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }

        if (null !== $this->clientIpList) {
            if (\is_array($this->clientIpList)) {
                $res['ClientIpList'] = [];
                $n1 = 0;
                foreach ($this->clientIpList as $item1) {
                    $res['ClientIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientProgramList) {
            if (\is_array($this->clientProgramList)) {
                $res['ClientProgramList'] = [];
                $n1 = 0;
                foreach ($this->clientProgramList as $item1) {
                    $res['ClientProgramList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dbHostList) {
            if (\is_array($this->dbHostList)) {
                $res['DbHostList'] = [];
                $n1 = 0;
                foreach ($this->dbHostList as $item1) {
                    $res['DbHostList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbUserList) {
            if (\is_array($this->dbUserList)) {
                $res['DbUserList'] = [];
                $n1 = 0;
                foreach ($this->dbUserList as $item1) {
                    $res['DbUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maxAffectRows) {
            $res['MaxAffectRows'] = $this->maxAffectRows;
        }

        if (null !== $this->maxExecCostUS) {
            $res['MaxExecCostUS'] = $this->maxExecCostUS;
        }

        if (null !== $this->minAffectRows) {
            $res['MinAffectRows'] = $this->minAffectRows;
        }

        if (null !== $this->minExecCostUS) {
            $res['MinExecCostUS'] = $this->minExecCostUS;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->riskLevelList) {
            if (\is_array($this->riskLevelList)) {
                $res['RiskLevelList'] = [];
                $n1 = 0;
                foreach ($this->riskLevelList as $item1) {
                    $res['RiskLevelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleTypeList) {
            if (\is_array($this->ruleTypeList)) {
                $res['RuleTypeList'] = [];
                $n1 = 0;
                foreach ($this->ruleTypeList as $item1) {
                    $res['RuleTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlKey) {
            $res['SqlKey'] = $this->sqlKey;
        }

        if (null !== $this->sqlTypeList) {
            if (\is_array($this->sqlTypeList)) {
                $res['SqlTypeList'] = [];
                $n1 = 0;
                foreach ($this->sqlTypeList as $item1) {
                    $res['SqlTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }

        if (isset($map['ClientIpList'])) {
            if (!empty($map['ClientIpList'])) {
                $model->clientIpList = [];
                $n1 = 0;
                foreach ($map['ClientIpList'] as $item1) {
                    $model->clientIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientProgramList'])) {
            if (!empty($map['ClientProgramList'])) {
                $model->clientProgramList = [];
                $n1 = 0;
                foreach ($map['ClientProgramList'] as $item1) {
                    $model->clientProgramList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DbHostList'])) {
            if (!empty($map['DbHostList'])) {
                $model->dbHostList = [];
                $n1 = 0;
                foreach ($map['DbHostList'] as $item1) {
                    $model->dbHostList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbUserList'])) {
            if (!empty($map['DbUserList'])) {
                $model->dbUserList = [];
                $n1 = 0;
                foreach ($map['DbUserList'] as $item1) {
                    $model->dbUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaxAffectRows'])) {
            $model->maxAffectRows = $map['MaxAffectRows'];
        }

        if (isset($map['MaxExecCostUS'])) {
            $model->maxExecCostUS = $map['MaxExecCostUS'];
        }

        if (isset($map['MinAffectRows'])) {
            $model->minAffectRows = $map['MinAffectRows'];
        }

        if (isset($map['MinExecCostUS'])) {
            $model->minExecCostUS = $map['MinExecCostUS'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = [];
                $n1 = 0;
                foreach ($map['RiskLevelList'] as $item1) {
                    $model->riskLevelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleTypeList'])) {
            if (!empty($map['RuleTypeList'])) {
                $model->ruleTypeList = [];
                $n1 = 0;
                foreach ($map['RuleTypeList'] as $item1) {
                    $model->ruleTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlKey'])) {
            $model->sqlKey = $map['SqlKey'];
        }

        if (isset($map['SqlTypeList'])) {
            if (!empty($map['SqlTypeList'])) {
                $model->sqlTypeList = [];
                $n1 = 0;
                foreach ($map['SqlTypeList'] as $item1) {
                    $model->sqlTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
