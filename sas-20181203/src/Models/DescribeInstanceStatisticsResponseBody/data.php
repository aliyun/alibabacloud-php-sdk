<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $account;

    /**
     * @var int
     */
    public $agentlessAll;

    /**
     * @var int
     */
    public $agentlessBaseline;

    /**
     * @var int
     */
    public $agentlessMalicious;

    /**
     * @var int
     */
    public $agentlessSensitiveFile;

    /**
     * @var int
     */
    public $agentlessVulCve;

    /**
     * @var int
     */
    public $agentlessVulSca;

    /**
     * @var int
     */
    public $agentlessVulSys;

    /**
     * @var int
     */
    public $appNum;

    /**
     * @var int
     */
    public $cmsNum;

    /**
     * @var string
     */
    public $cspmHighRiskNum;

    /**
     * @var int
     */
    public $cspmNum;

    /**
     * @var int
     */
    public $cveNum;

    /**
     * @var int
     */
    public $emgNum;

    /**
     * @var int
     */
    public $health;

    /**
     * @var string
     */
    public $remindSuspiciousNum;

    /**
     * @var int
     */
    public $scaNum;

    /**
     * @var string
     */
    public $seriousSuspiciousNum;

    /**
     * @var string
     */
    public $suspectSuspiciousNum;

    /**
     * @var int
     */
    public $suspicious;

    /**
     * @var string
     */
    public $sysAsapVulCount;

    /**
     * @var int
     */
    public $sysNum;

    /**
     * @var int
     */
    public $trojan;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $vul;

    /**
     * @var int
     */
    public $weakPWNum;
    protected $_name = [
        'account' => 'Account',
        'agentlessAll' => 'AgentlessAll',
        'agentlessBaseline' => 'AgentlessBaseline',
        'agentlessMalicious' => 'AgentlessMalicious',
        'agentlessSensitiveFile' => 'AgentlessSensitiveFile',
        'agentlessVulCve' => 'AgentlessVulCve',
        'agentlessVulSca' => 'AgentlessVulSca',
        'agentlessVulSys' => 'AgentlessVulSys',
        'appNum' => 'AppNum',
        'cmsNum' => 'CmsNum',
        'cspmHighRiskNum' => 'CspmHighRiskNum',
        'cspmNum' => 'CspmNum',
        'cveNum' => 'CveNum',
        'emgNum' => 'EmgNum',
        'health' => 'Health',
        'remindSuspiciousNum' => 'RemindSuspiciousNum',
        'scaNum' => 'ScaNum',
        'seriousSuspiciousNum' => 'SeriousSuspiciousNum',
        'suspectSuspiciousNum' => 'SuspectSuspiciousNum',
        'suspicious' => 'Suspicious',
        'sysAsapVulCount' => 'SysAsapVulCount',
        'sysNum' => 'SysNum',
        'trojan' => 'Trojan',
        'uuid' => 'Uuid',
        'vul' => 'Vul',
        'weakPWNum' => 'WeakPWNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->agentlessAll) {
            $res['AgentlessAll'] = $this->agentlessAll;
        }

        if (null !== $this->agentlessBaseline) {
            $res['AgentlessBaseline'] = $this->agentlessBaseline;
        }

        if (null !== $this->agentlessMalicious) {
            $res['AgentlessMalicious'] = $this->agentlessMalicious;
        }

        if (null !== $this->agentlessSensitiveFile) {
            $res['AgentlessSensitiveFile'] = $this->agentlessSensitiveFile;
        }

        if (null !== $this->agentlessVulCve) {
            $res['AgentlessVulCve'] = $this->agentlessVulCve;
        }

        if (null !== $this->agentlessVulSca) {
            $res['AgentlessVulSca'] = $this->agentlessVulSca;
        }

        if (null !== $this->agentlessVulSys) {
            $res['AgentlessVulSys'] = $this->agentlessVulSys;
        }

        if (null !== $this->appNum) {
            $res['AppNum'] = $this->appNum;
        }

        if (null !== $this->cmsNum) {
            $res['CmsNum'] = $this->cmsNum;
        }

        if (null !== $this->cspmHighRiskNum) {
            $res['CspmHighRiskNum'] = $this->cspmHighRiskNum;
        }

        if (null !== $this->cspmNum) {
            $res['CspmNum'] = $this->cspmNum;
        }

        if (null !== $this->cveNum) {
            $res['CveNum'] = $this->cveNum;
        }

        if (null !== $this->emgNum) {
            $res['EmgNum'] = $this->emgNum;
        }

        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }

        if (null !== $this->remindSuspiciousNum) {
            $res['RemindSuspiciousNum'] = $this->remindSuspiciousNum;
        }

        if (null !== $this->scaNum) {
            $res['ScaNum'] = $this->scaNum;
        }

        if (null !== $this->seriousSuspiciousNum) {
            $res['SeriousSuspiciousNum'] = $this->seriousSuspiciousNum;
        }

        if (null !== $this->suspectSuspiciousNum) {
            $res['SuspectSuspiciousNum'] = $this->suspectSuspiciousNum;
        }

        if (null !== $this->suspicious) {
            $res['Suspicious'] = $this->suspicious;
        }

        if (null !== $this->sysAsapVulCount) {
            $res['SysAsapVulCount'] = $this->sysAsapVulCount;
        }

        if (null !== $this->sysNum) {
            $res['SysNum'] = $this->sysNum;
        }

        if (null !== $this->trojan) {
            $res['Trojan'] = $this->trojan;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vul) {
            $res['Vul'] = $this->vul;
        }

        if (null !== $this->weakPWNum) {
            $res['WeakPWNum'] = $this->weakPWNum;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['AgentlessAll'])) {
            $model->agentlessAll = $map['AgentlessAll'];
        }

        if (isset($map['AgentlessBaseline'])) {
            $model->agentlessBaseline = $map['AgentlessBaseline'];
        }

        if (isset($map['AgentlessMalicious'])) {
            $model->agentlessMalicious = $map['AgentlessMalicious'];
        }

        if (isset($map['AgentlessSensitiveFile'])) {
            $model->agentlessSensitiveFile = $map['AgentlessSensitiveFile'];
        }

        if (isset($map['AgentlessVulCve'])) {
            $model->agentlessVulCve = $map['AgentlessVulCve'];
        }

        if (isset($map['AgentlessVulSca'])) {
            $model->agentlessVulSca = $map['AgentlessVulSca'];
        }

        if (isset($map['AgentlessVulSys'])) {
            $model->agentlessVulSys = $map['AgentlessVulSys'];
        }

        if (isset($map['AppNum'])) {
            $model->appNum = $map['AppNum'];
        }

        if (isset($map['CmsNum'])) {
            $model->cmsNum = $map['CmsNum'];
        }

        if (isset($map['CspmHighRiskNum'])) {
            $model->cspmHighRiskNum = $map['CspmHighRiskNum'];
        }

        if (isset($map['CspmNum'])) {
            $model->cspmNum = $map['CspmNum'];
        }

        if (isset($map['CveNum'])) {
            $model->cveNum = $map['CveNum'];
        }

        if (isset($map['EmgNum'])) {
            $model->emgNum = $map['EmgNum'];
        }

        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }

        if (isset($map['RemindSuspiciousNum'])) {
            $model->remindSuspiciousNum = $map['RemindSuspiciousNum'];
        }

        if (isset($map['ScaNum'])) {
            $model->scaNum = $map['ScaNum'];
        }

        if (isset($map['SeriousSuspiciousNum'])) {
            $model->seriousSuspiciousNum = $map['SeriousSuspiciousNum'];
        }

        if (isset($map['SuspectSuspiciousNum'])) {
            $model->suspectSuspiciousNum = $map['SuspectSuspiciousNum'];
        }

        if (isset($map['Suspicious'])) {
            $model->suspicious = $map['Suspicious'];
        }

        if (isset($map['SysAsapVulCount'])) {
            $model->sysAsapVulCount = $map['SysAsapVulCount'];
        }

        if (isset($map['SysNum'])) {
            $model->sysNum = $map['SysNum'];
        }

        if (isset($map['Trojan'])) {
            $model->trojan = $map['Trojan'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['Vul'])) {
            $model->vul = $map['Vul'];
        }

        if (isset($map['WeakPWNum'])) {
            $model->weakPWNum = $map['WeakPWNum'];
        }

        return $model;
    }
}
