<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class UpdateDeploymentRequest extends Model
{
    /**
     * @var bool
     */
    public $autoApproval;

    /**
     * @var string
     */
    public $deploymentConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $stageAction;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'autoApproval' => 'AutoApproval',
        'deploymentConfig' => 'DeploymentConfig',
        'description' => 'Description',
        'stageAction' => 'StageAction',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoApproval) {
            $res['AutoApproval'] = $this->autoApproval;
        }

        if (null !== $this->deploymentConfig) {
            $res['DeploymentConfig'] = $this->deploymentConfig;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->stageAction) {
            $res['StageAction'] = $this->stageAction;
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
        if (isset($map['AutoApproval'])) {
            $model->autoApproval = $map['AutoApproval'];
        }

        if (isset($map['DeploymentConfig'])) {
            $model->deploymentConfig = $map['DeploymentConfig'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['StageAction'])) {
            $model->stageAction = $map['StageAction'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
