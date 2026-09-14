<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCrossProjectDeploymentEnvironmentsResponseBody\data;

use AlibabaCloud\Dara\Model;

class deploymentEnvironments extends Model
{
    /**
     * @var int
     */
    public $deploymentEnvironmentId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sourceProjectId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $targetProjectId;

    /**
     * @var string
     */
    public $targetProjectName;
    protected $_name = [
        'deploymentEnvironmentId' => 'DeploymentEnvironmentId',
        'name' => 'Name',
        'sourceProjectId' => 'SourceProjectId',
        'status' => 'Status',
        'targetProjectId' => 'TargetProjectId',
        'targetProjectName' => 'TargetProjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentEnvironmentId) {
            $res['DeploymentEnvironmentId'] = $this->deploymentEnvironmentId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sourceProjectId) {
            $res['SourceProjectId'] = $this->sourceProjectId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetProjectId) {
            $res['TargetProjectId'] = $this->targetProjectId;
        }

        if (null !== $this->targetProjectName) {
            $res['TargetProjectName'] = $this->targetProjectName;
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
        if (isset($map['DeploymentEnvironmentId'])) {
            $model->deploymentEnvironmentId = $map['DeploymentEnvironmentId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SourceProjectId'])) {
            $model->sourceProjectId = $map['SourceProjectId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetProjectId'])) {
            $model->targetProjectId = $map['TargetProjectId'];
        }

        if (isset($map['TargetProjectName'])) {
            $model->targetProjectName = $map['TargetProjectName'];
        }

        return $model;
    }
}
