<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetStreamLogContentRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentInstanceId;

    /**
     * @var string
     */
    public $logName;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $taskmanagerId;
    protected $_name = [
        'deploymentInstanceId' => 'DeploymentInstanceId',
        'logName' => 'LogName',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
        'projectId' => 'ProjectId',
        'taskmanagerId' => 'TaskmanagerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentInstanceId) {
            $res['DeploymentInstanceId'] = $this->deploymentInstanceId;
        }

        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->taskmanagerId) {
            $res['TaskmanagerId'] = $this->taskmanagerId;
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
        if (isset($map['DeploymentInstanceId'])) {
            $model->deploymentInstanceId = $map['DeploymentInstanceId'];
        }

        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TaskmanagerId'])) {
            $model->taskmanagerId = $map['TaskmanagerId'];
        }

        return $model;
    }
}
