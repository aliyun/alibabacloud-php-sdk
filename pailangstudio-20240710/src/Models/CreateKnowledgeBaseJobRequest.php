<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseJobRequest\ecsSpecs;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseJobRequest\embeddingConfig;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseJobRequest\userVpc;

class CreateKnowledgeBaseJobRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

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
    public $jobAction;

    /**
     * @var int
     */
    public $maxRunningTimeInSeconds;

    /**
     * @var string
     */
    public $resourceId;

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
        'description' => 'Description',
        'ecsSpecs' => 'EcsSpecs',
        'embeddingConfig' => 'EmbeddingConfig',
        'jobAction' => 'JobAction',
        'maxRunningTimeInSeconds' => 'MaxRunningTimeInSeconds',
        'resourceId' => 'ResourceId',
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

        if (null !== $this->jobAction) {
            $res['JobAction'] = $this->jobAction;
        }

        if (null !== $this->maxRunningTimeInSeconds) {
            $res['MaxRunningTimeInSeconds'] = $this->maxRunningTimeInSeconds;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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

        if (isset($map['JobAction'])) {
            $model->jobAction = $map['JobAction'];
        }

        if (isset($map['MaxRunningTimeInSeconds'])) {
            $model->maxRunningTimeInSeconds = $map['MaxRunningTimeInSeconds'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
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
