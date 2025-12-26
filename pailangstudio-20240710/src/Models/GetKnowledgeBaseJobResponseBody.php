<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponseBody\ecsSpecs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponseBody\embeddingConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponseBody\knowledgeBaseJobResult;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponseBody\pipelineRunInfo;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseJobResponseBody\userVpc;

class GetKnowledgeBaseJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ecsSpecs[]
     */
    public $ecsSpecs;

    /**
     * @var embeddingConfig
     */
    public $embeddingConfig;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $jobAction;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeBaseJobId;

    /**
     * @var knowledgeBaseJobResult
     */
    public $knowledgeBaseJobResult;

    /**
     * @var int
     */
    public $maxRunningTimeInSeconds;

    /**
     * @var pipelineRunInfo
     */
    public $pipelineRunInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var userVpc
     */
    public $userVpc;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'creator' => 'Creator',
        'description' => 'Description',
        'ecsSpecs' => 'EcsSpecs',
        'embeddingConfig' => 'EmbeddingConfig',
        'errorMessage' => 'ErrorMessage',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'jobAction' => 'JobAction',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeBaseJobId' => 'KnowledgeBaseJobId',
        'knowledgeBaseJobResult' => 'KnowledgeBaseJobResult',
        'maxRunningTimeInSeconds' => 'MaxRunningTimeInSeconds',
        'pipelineRunInfo' => 'PipelineRunInfo',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
        'userVpc' => 'UserVpc',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->ecsSpecs)) {
            Model::validateArray($this->ecsSpecs);
        }
        if (null !== $this->embeddingConfig) {
            $this->embeddingConfig->validate();
        }
        if (null !== $this->knowledgeBaseJobResult) {
            $this->knowledgeBaseJobResult->validate();
        }
        if (null !== $this->pipelineRunInfo) {
            $this->pipelineRunInfo->validate();
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ecsSpecs) {
            if (\is_array($this->ecsSpecs)) {
                $res['EcsSpecs'] = [];
                $n1 = 0;
                foreach ($this->ecsSpecs as $item1) {
                    $res['EcsSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->embeddingConfig) {
            $res['EmbeddingConfig'] = null !== $this->embeddingConfig ? $this->embeddingConfig->toArray($noStream) : $this->embeddingConfig;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->jobAction) {
            $res['JobAction'] = $this->jobAction;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeBaseJobId) {
            $res['KnowledgeBaseJobId'] = $this->knowledgeBaseJobId;
        }

        if (null !== $this->knowledgeBaseJobResult) {
            $res['KnowledgeBaseJobResult'] = null !== $this->knowledgeBaseJobResult ? $this->knowledgeBaseJobResult->toArray($noStream) : $this->knowledgeBaseJobResult;
        }

        if (null !== $this->maxRunningTimeInSeconds) {
            $res['MaxRunningTimeInSeconds'] = $this->maxRunningTimeInSeconds;
        }

        if (null !== $this->pipelineRunInfo) {
            $res['PipelineRunInfo'] = null !== $this->pipelineRunInfo ? $this->pipelineRunInfo->toArray($noStream) : $this->pipelineRunInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EcsSpecs'])) {
            if (!empty($map['EcsSpecs'])) {
                $model->ecsSpecs = [];
                $n1 = 0;
                foreach ($map['EcsSpecs'] as $item1) {
                    $model->ecsSpecs[$n1] = ecsSpecs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EmbeddingConfig'])) {
            $model->embeddingConfig = embeddingConfig::fromMap($map['EmbeddingConfig']);
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['JobAction'])) {
            $model->jobAction = $map['JobAction'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['KnowledgeBaseJobId'])) {
            $model->knowledgeBaseJobId = $map['KnowledgeBaseJobId'];
        }

        if (isset($map['KnowledgeBaseJobResult'])) {
            $model->knowledgeBaseJobResult = knowledgeBaseJobResult::fromMap($map['KnowledgeBaseJobResult']);
        }

        if (isset($map['MaxRunningTimeInSeconds'])) {
            $model->maxRunningTimeInSeconds = $map['MaxRunningTimeInSeconds'];
        }

        if (isset($map['PipelineRunInfo'])) {
            $model->pipelineRunInfo = pipelineRunInfo::fromMap($map['PipelineRunInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
