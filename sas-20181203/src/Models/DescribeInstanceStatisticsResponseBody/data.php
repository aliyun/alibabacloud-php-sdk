<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $agentlessVulCve;

    /**
     * @var int
     */
    public $agentlessVulSca;

    /**
     * @var int
     */
    public $appNum;

    /**
     * @var int
     */
    public $cmsNum;

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
     * @var int
     */
    public $scaNum;

    /**
     * @var int
     */
    public $suspicious;

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
        'account'            => 'Account',
        'agentlessAll'       => 'AgentlessAll',
        'agentlessBaseline'  => 'AgentlessBaseline',
        'agentlessMalicious' => 'AgentlessMalicious',
        'agentlessVulCve'    => 'AgentlessVulCve',
        'agentlessVulSca'    => 'AgentlessVulSca',
        'appNum'             => 'AppNum',
        'cmsNum'             => 'CmsNum',
        'cspmNum'            => 'CspmNum',
        'cveNum'             => 'CveNum',
        'emgNum'             => 'EmgNum',
        'health'             => 'Health',
        'scaNum'             => 'ScaNum',
        'suspicious'         => 'Suspicious',
        'sysNum'             => 'SysNum',
        'trojan'             => 'Trojan',
        'uuid'               => 'Uuid',
        'vul'                => 'Vul',
        'weakPWNum'          => 'WeakPWNum',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->agentlessVulCve) {
            $res['AgentlessVulCve'] = $this->agentlessVulCve;
        }
        if (null !== $this->agentlessVulSca) {
            $res['AgentlessVulSca'] = $this->agentlessVulSca;
        }
        if (null !== $this->appNum) {
            $res['AppNum'] = $this->appNum;
        }
        if (null !== $this->cmsNum) {
            $res['CmsNum'] = $this->cmsNum;
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
        if (null !== $this->scaNum) {
            $res['ScaNum'] = $this->scaNum;
        }
        if (null !== $this->suspicious) {
            $res['Suspicious'] = $this->suspicious;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['AgentlessVulCve'])) {
            $model->agentlessVulCve = $map['AgentlessVulCve'];
        }
        if (isset($map['AgentlessVulSca'])) {
            $model->agentlessVulSca = $map['AgentlessVulSca'];
        }
        if (isset($map['AppNum'])) {
            $model->appNum = $map['AppNum'];
        }
        if (isset($map['CmsNum'])) {
            $model->cmsNum = $map['CmsNum'];
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
        if (isset($map['ScaNum'])) {
            $model->scaNum = $map['ScaNum'];
        }
        if (isset($map['Suspicious'])) {
            $model->suspicious = $map['Suspicious'];
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
