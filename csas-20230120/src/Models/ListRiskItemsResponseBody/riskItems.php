<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListRiskItemsResponseBody;

use AlibabaCloud\Dara\Model;

class riskItems extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $aiConclusion;

    /**
     * @var string
     */
    public $aiRiskConfirm;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $report;

    /**
     * @var string[]
     */
    public $riskAnalysisPolicyNames;

    /**
     * @var string
     */
    public $riskCategory;

    /**
     * @var string
     */
    public $riskConfirm;

    /**
     * @var string
     */
    public $riskConfirmDesc;

    /**
     * @var string
     */
    public $riskDesc;

    /**
     * @var string
     */
    public $riskEndTime;

    /**
     * @var string[]
     */
    public $riskFeatureIds;

    /**
     * @var string
     */
    public $riskFoundTime;

    /**
     * @var string
     */
    public $riskId;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskScene;

    /**
     * @var string
     */
    public $riskStartTime;

    /**
     * @var string
     */
    public $saseUserId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportAnalysis;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'agentName' => 'AgentName',
        'aiConclusion' => 'AiConclusion',
        'aiRiskConfirm' => 'AiRiskConfirm',
        'checkName' => 'CheckName',
        'department' => 'Department',
        'groupInfo' => 'GroupInfo',
        'hostname' => 'Hostname',
        'innerIp' => 'InnerIp',
        'report' => 'Report',
        'riskAnalysisPolicyNames' => 'RiskAnalysisPolicyNames',
        'riskCategory' => 'RiskCategory',
        'riskConfirm' => 'RiskConfirm',
        'riskConfirmDesc' => 'RiskConfirmDesc',
        'riskDesc' => 'RiskDesc',
        'riskEndTime' => 'RiskEndTime',
        'riskFeatureIds' => 'RiskFeatureIds',
        'riskFoundTime' => 'RiskFoundTime',
        'riskId' => 'RiskId',
        'riskLevel' => 'RiskLevel',
        'riskScene' => 'RiskScene',
        'riskStartTime' => 'RiskStartTime',
        'saseUserId' => 'SaseUserId',
        'skillName' => 'SkillName',
        'solution' => 'Solution',
        'status' => 'Status',
        'supportAnalysis' => 'SupportAnalysis',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->riskAnalysisPolicyNames)) {
            Model::validateArray($this->riskAnalysisPolicyNames);
        }
        if (\is_array($this->riskFeatureIds)) {
            Model::validateArray($this->riskFeatureIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->aiConclusion) {
            $res['AiConclusion'] = $this->aiConclusion;
        }

        if (null !== $this->aiRiskConfirm) {
            $res['AiRiskConfirm'] = $this->aiRiskConfirm;
        }

        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->groupInfo) {
            $res['GroupInfo'] = $this->groupInfo;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }

        if (null !== $this->report) {
            $res['Report'] = $this->report;
        }

        if (null !== $this->riskAnalysisPolicyNames) {
            if (\is_array($this->riskAnalysisPolicyNames)) {
                $res['RiskAnalysisPolicyNames'] = [];
                $n1 = 0;
                foreach ($this->riskAnalysisPolicyNames as $item1) {
                    $res['RiskAnalysisPolicyNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskCategory) {
            $res['RiskCategory'] = $this->riskCategory;
        }

        if (null !== $this->riskConfirm) {
            $res['RiskConfirm'] = $this->riskConfirm;
        }

        if (null !== $this->riskConfirmDesc) {
            $res['RiskConfirmDesc'] = $this->riskConfirmDesc;
        }

        if (null !== $this->riskDesc) {
            $res['RiskDesc'] = $this->riskDesc;
        }

        if (null !== $this->riskEndTime) {
            $res['RiskEndTime'] = $this->riskEndTime;
        }

        if (null !== $this->riskFeatureIds) {
            if (\is_array($this->riskFeatureIds)) {
                $res['RiskFeatureIds'] = [];
                $n1 = 0;
                foreach ($this->riskFeatureIds as $item1) {
                    $res['RiskFeatureIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskFoundTime) {
            $res['RiskFoundTime'] = $this->riskFoundTime;
        }

        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskScene) {
            $res['RiskScene'] = $this->riskScene;
        }

        if (null !== $this->riskStartTime) {
            $res['RiskStartTime'] = $this->riskStartTime;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportAnalysis) {
            $res['SupportAnalysis'] = $this->supportAnalysis;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AiConclusion'])) {
            $model->aiConclusion = $map['AiConclusion'];
        }

        if (isset($map['AiRiskConfirm'])) {
            $model->aiRiskConfirm = $map['AiRiskConfirm'];
        }

        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['GroupInfo'])) {
            $model->groupInfo = $map['GroupInfo'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }

        if (isset($map['Report'])) {
            $model->report = $map['Report'];
        }

        if (isset($map['RiskAnalysisPolicyNames'])) {
            if (!empty($map['RiskAnalysisPolicyNames'])) {
                $model->riskAnalysisPolicyNames = [];
                $n1 = 0;
                foreach ($map['RiskAnalysisPolicyNames'] as $item1) {
                    $model->riskAnalysisPolicyNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskCategory'])) {
            $model->riskCategory = $map['RiskCategory'];
        }

        if (isset($map['RiskConfirm'])) {
            $model->riskConfirm = $map['RiskConfirm'];
        }

        if (isset($map['RiskConfirmDesc'])) {
            $model->riskConfirmDesc = $map['RiskConfirmDesc'];
        }

        if (isset($map['RiskDesc'])) {
            $model->riskDesc = $map['RiskDesc'];
        }

        if (isset($map['RiskEndTime'])) {
            $model->riskEndTime = $map['RiskEndTime'];
        }

        if (isset($map['RiskFeatureIds'])) {
            if (!empty($map['RiskFeatureIds'])) {
                $model->riskFeatureIds = [];
                $n1 = 0;
                foreach ($map['RiskFeatureIds'] as $item1) {
                    $model->riskFeatureIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskFoundTime'])) {
            $model->riskFoundTime = $map['RiskFoundTime'];
        }

        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskScene'])) {
            $model->riskScene = $map['RiskScene'];
        }

        if (isset($map['RiskStartTime'])) {
            $model->riskStartTime = $map['RiskStartTime'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportAnalysis'])) {
            $model->supportAnalysis = $map['SupportAnalysis'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
