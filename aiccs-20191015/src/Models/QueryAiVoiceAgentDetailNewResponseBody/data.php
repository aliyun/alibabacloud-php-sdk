<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\agentCallConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\agentDemandConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\knowledgeConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\phoneTagConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig;

class data extends Model
{
    /**
     * @var agentCallConfig
     */
    public $agentCallConfig;

    /**
     * @var agentDemandConfig
     */
    public $agentDemandConfig;

    /**
     * @var string
     */
    public $agentDesc;

    /**
     * @var int
     */
    public $agentId;

    /**
     * @var int
     */
    public $agentMode;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var int
     */
    public $branchDeployStatus;

    /**
     * @var string
     */
    public $branchDesc;

    /**
     * @var int
     */
    public $branchId;

    /**
     * @var string
     */
    public $branchName;

    /**
     * @var knowledgeConfig
     */
    public $knowledgeConfig;

    /**
     * @var phoneTagConfig[]
     */
    public $phoneTagConfig;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var summaryConfig
     */
    public $summaryConfig;

    /**
     * @var string
     */
    public $versionDesc;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var int
     */
    public $versionPublishStatus;

    /**
     * @var string
     */
    public $versionPublishTime;
    protected $_name = [
        'agentCallConfig' => 'AgentCallConfig',
        'agentDemandConfig' => 'AgentDemandConfig',
        'agentDesc' => 'AgentDesc',
        'agentId' => 'AgentId',
        'agentMode' => 'AgentMode',
        'agentName' => 'AgentName',
        'branchDeployStatus' => 'BranchDeployStatus',
        'branchDesc' => 'BranchDesc',
        'branchId' => 'BranchId',
        'branchName' => 'BranchName',
        'knowledgeConfig' => 'KnowledgeConfig',
        'phoneTagConfig' => 'PhoneTagConfig',
        'scene' => 'Scene',
        'summaryConfig' => 'SummaryConfig',
        'versionDesc' => 'VersionDesc',
        'versionId' => 'VersionId',
        'versionName' => 'VersionName',
        'versionPublishStatus' => 'VersionPublishStatus',
        'versionPublishTime' => 'VersionPublishTime',
    ];

    public function validate()
    {
        if (null !== $this->agentCallConfig) {
            $this->agentCallConfig->validate();
        }
        if (null !== $this->agentDemandConfig) {
            $this->agentDemandConfig->validate();
        }
        if (null !== $this->knowledgeConfig) {
            $this->knowledgeConfig->validate();
        }
        if (\is_array($this->phoneTagConfig)) {
            Model::validateArray($this->phoneTagConfig);
        }
        if (null !== $this->summaryConfig) {
            $this->summaryConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentCallConfig) {
            $res['AgentCallConfig'] = null !== $this->agentCallConfig ? $this->agentCallConfig->toArray($noStream) : $this->agentCallConfig;
        }

        if (null !== $this->agentDemandConfig) {
            $res['AgentDemandConfig'] = null !== $this->agentDemandConfig ? $this->agentDemandConfig->toArray($noStream) : $this->agentDemandConfig;
        }

        if (null !== $this->agentDesc) {
            $res['AgentDesc'] = $this->agentDesc;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentMode) {
            $res['AgentMode'] = $this->agentMode;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->branchDeployStatus) {
            $res['BranchDeployStatus'] = $this->branchDeployStatus;
        }

        if (null !== $this->branchDesc) {
            $res['BranchDesc'] = $this->branchDesc;
        }

        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->knowledgeConfig) {
            $res['KnowledgeConfig'] = null !== $this->knowledgeConfig ? $this->knowledgeConfig->toArray($noStream) : $this->knowledgeConfig;
        }

        if (null !== $this->phoneTagConfig) {
            if (\is_array($this->phoneTagConfig)) {
                $res['PhoneTagConfig'] = [];
                $n1 = 0;
                foreach ($this->phoneTagConfig as $item1) {
                    $res['PhoneTagConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->summaryConfig) {
            $res['SummaryConfig'] = null !== $this->summaryConfig ? $this->summaryConfig->toArray($noStream) : $this->summaryConfig;
        }

        if (null !== $this->versionDesc) {
            $res['VersionDesc'] = $this->versionDesc;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        if (null !== $this->versionPublishStatus) {
            $res['VersionPublishStatus'] = $this->versionPublishStatus;
        }

        if (null !== $this->versionPublishTime) {
            $res['VersionPublishTime'] = $this->versionPublishTime;
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
        if (isset($map['AgentCallConfig'])) {
            $model->agentCallConfig = agentCallConfig::fromMap($map['AgentCallConfig']);
        }

        if (isset($map['AgentDemandConfig'])) {
            $model->agentDemandConfig = agentDemandConfig::fromMap($map['AgentDemandConfig']);
        }

        if (isset($map['AgentDesc'])) {
            $model->agentDesc = $map['AgentDesc'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentMode'])) {
            $model->agentMode = $map['AgentMode'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['BranchDeployStatus'])) {
            $model->branchDeployStatus = $map['BranchDeployStatus'];
        }

        if (isset($map['BranchDesc'])) {
            $model->branchDesc = $map['BranchDesc'];
        }

        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['KnowledgeConfig'])) {
            $model->knowledgeConfig = knowledgeConfig::fromMap($map['KnowledgeConfig']);
        }

        if (isset($map['PhoneTagConfig'])) {
            if (!empty($map['PhoneTagConfig'])) {
                $model->phoneTagConfig = [];
                $n1 = 0;
                foreach ($map['PhoneTagConfig'] as $item1) {
                    $model->phoneTagConfig[$n1] = phoneTagConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['SummaryConfig'])) {
            $model->summaryConfig = summaryConfig::fromMap($map['SummaryConfig']);
        }

        if (isset($map['VersionDesc'])) {
            $model->versionDesc = $map['VersionDesc'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        if (isset($map['VersionPublishStatus'])) {
            $model->versionPublishStatus = $map['VersionPublishStatus'];
        }

        if (isset($map['VersionPublishTime'])) {
            $model->versionPublishTime = $map['VersionPublishTime'];
        }

        return $model;
    }
}
