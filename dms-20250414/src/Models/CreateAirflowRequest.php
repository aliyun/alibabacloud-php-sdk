<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class CreateAirflowRequest extends Model
{
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
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossPath;

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
    public $securityGroupId;

    /**
     * @var string
     */
    public $startupFile;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $workerServerlessReplicas;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'airflowName' => 'AirflowName',
        'appSpec' => 'AppSpec',
        'clientToken' => 'ClientToken',
        'dagsDir' => 'DagsDir',
        'description' => 'Description',
        'ossBucketName' => 'OssBucketName',
        'ossPath' => 'OssPath',
        'pluginsDir' => 'PluginsDir',
        'requirementFile' => 'RequirementFile',
        'securityGroupId' => 'SecurityGroupId',
        'startupFile' => 'StartupFile',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'workerServerlessReplicas' => 'WorkerServerlessReplicas',
        'workspaceId' => 'WorkspaceId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        if (null !== $this->pluginsDir) {
            $res['PluginsDir'] = $this->pluginsDir;
        }

        if (null !== $this->requirementFile) {
            $res['RequirementFile'] = $this->requirementFile;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->startupFile) {
            $res['StartupFile'] = $this->startupFile;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->workerServerlessReplicas) {
            $res['WorkerServerlessReplicas'] = $this->workerServerlessReplicas;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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

        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }

        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        if (isset($map['PluginsDir'])) {
            $model->pluginsDir = $map['PluginsDir'];
        }

        if (isset($map['RequirementFile'])) {
            $model->requirementFile = $map['RequirementFile'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['StartupFile'])) {
            $model->startupFile = $map['StartupFile'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WorkerServerlessReplicas'])) {
            $model->workerServerlessReplicas = $map['WorkerServerlessReplicas'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
