<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetAirflowResponseBody;

use AlibabaCloud\Dara\Model;

class root extends Model
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
    public $appType;

    /**
     * @var string[]
     */
    public $customAirflowCfg;

    /**
     * @var string
     */
    public $dagsDir;

    /**
     * @var string
     */
    public $deployErrorMsg;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreated;

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
    public $regionId;

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
    public $status;

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
        'airflowId' => 'AirflowId',
        'airflowName' => 'AirflowName',
        'appSpec' => 'AppSpec',
        'appType' => 'AppType',
        'customAirflowCfg' => 'CustomAirflowCfg',
        'dagsDir' => 'DagsDir',
        'deployErrorMsg' => 'DeployErrorMsg',
        'description' => 'Description',
        'gmtCreated' => 'GmtCreated',
        'ossBucketName' => 'OssBucketName',
        'ossPath' => 'OssPath',
        'pluginsDir' => 'PluginsDir',
        'regionId' => 'RegionId',
        'requirementFile' => 'RequirementFile',
        'securityGroupId' => 'SecurityGroupId',
        'startupFile' => 'StartupFile',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'workerServerlessReplicas' => 'WorkerServerlessReplicas',
        'workspaceId' => 'WorkspaceId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->customAirflowCfg)) {
            Model::validateArray($this->customAirflowCfg);
        }
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

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->customAirflowCfg) {
            if (\is_array($this->customAirflowCfg)) {
                $res['CustomAirflowCfg'] = [];
                $n1 = 0;
                foreach ($this->customAirflowCfg as $item1) {
                    $res['CustomAirflowCfg'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dagsDir) {
            $res['DagsDir'] = $this->dagsDir;
        }

        if (null !== $this->deployErrorMsg) {
            $res['DeployErrorMsg'] = $this->deployErrorMsg;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AirflowId'])) {
            $model->airflowId = $map['AirflowId'];
        }

        if (isset($map['AirflowName'])) {
            $model->airflowName = $map['AirflowName'];
        }

        if (isset($map['AppSpec'])) {
            $model->appSpec = $map['AppSpec'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['CustomAirflowCfg'])) {
            if (!empty($map['CustomAirflowCfg'])) {
                $model->customAirflowCfg = [];
                $n1 = 0;
                foreach ($map['CustomAirflowCfg'] as $item1) {
                    $model->customAirflowCfg[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DagsDir'])) {
            $model->dagsDir = $map['DagsDir'];
        }

        if (isset($map['DeployErrorMsg'])) {
            $model->deployErrorMsg = $map['DeployErrorMsg'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
