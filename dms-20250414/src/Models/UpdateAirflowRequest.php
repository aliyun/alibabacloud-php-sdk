<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class UpdateAirflowRequest extends Model
{
    /**
     * @var string
     */
    public $airflowId;

    /**
     * @var string
     */
    public $airflowName;

    /**
     * @var string
     */
    public $appSpec;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dagsDir;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $pluginsDir;

    /**
     * @var string
     */
    public $requirementFile;

    /**
     * @var string
     */
    public $startupFile;

    /**
     * @var int
     */
    public $workerServerlessReplicas;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'airflowId' => 'AirflowId',
        'airflowName' => 'AirflowName',
        'appSpec' => 'AppSpec',
        'clientToken' => 'ClientToken',
        'dagsDir' => 'DagsDir',
        'description' => 'Description',
        'pluginsDir' => 'PluginsDir',
        'requirementFile' => 'RequirementFile',
        'startupFile' => 'StartupFile',
        'workerServerlessReplicas' => 'WorkerServerlessReplicas',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->airflowId) {
            $res['AirflowId'] = $this->airflowId;
        }

        if (null !== $this->airflowName) {
            $res['AirflowName'] = $this->airflowName;
        }

        if (null !== $this->appSpec) {
            $res['AppSpec'] = $this->appSpec;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dagsDir) {
            $res['DagsDir'] = $this->dagsDir;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->pluginsDir) {
            $res['PluginsDir'] = $this->pluginsDir;
        }

        if (null !== $this->requirementFile) {
            $res['RequirementFile'] = $this->requirementFile;
        }

        if (null !== $this->startupFile) {
            $res['StartupFile'] = $this->startupFile;
        }

        if (null !== $this->workerServerlessReplicas) {
            $res['WorkerServerlessReplicas'] = $this->workerServerlessReplicas;
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
        if (isset($map['AirflowId'])) {
            $model->airflowId = $map['AirflowId'];
        }

        if (isset($map['AirflowName'])) {
            $model->airflowName = $map['AirflowName'];
        }

        if (isset($map['AppSpec'])) {
            $model->appSpec = $map['AppSpec'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DagsDir'])) {
            $model->dagsDir = $map['DagsDir'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PluginsDir'])) {
            $model->pluginsDir = $map['PluginsDir'];
        }

        if (isset($map['RequirementFile'])) {
            $model->requirementFile = $map['RequirementFile'];
        }

        if (isset($map['StartupFile'])) {
            $model->startupFile = $map['StartupFile'];
        }

        if (isset($map['WorkerServerlessReplicas'])) {
            $model->workerServerlessReplicas = $map['WorkerServerlessReplicas'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
