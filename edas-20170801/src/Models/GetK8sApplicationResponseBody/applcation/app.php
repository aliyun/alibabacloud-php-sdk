<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\cmdArgs;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\envList;
use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var int
     */
    public $buildpackId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $cmd;

    /**
     * @var cmdArgs
     */
    public $cmdArgs;

    /**
     * @var string
     */
    public $csClusterId;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $developType;

    /**
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var envList
     */
    public $envList;

    /**
     * @var int
     */
    public $instances;

    /**
     * @var int
     */
    public $instancesBeforeScaling;

    /**
     * @var string
     */
    public $k8sNamespace;

    /**
     * @var int
     */
    public $limitCpuM;

    /**
     * @var int
     */
    public $limitMem;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $requestCpuM;

    /**
     * @var int
     */
    public $requestMem;

    /**
     * @var string
     */
    public $tomcatVersion;
    protected $_name = [
        'appId'                  => 'AppId',
        'applicationName'        => 'ApplicationName',
        'applicationType'        => 'ApplicationType',
        'buildpackId'            => 'BuildpackId',
        'clusterId'              => 'ClusterId',
        'cmd'                    => 'Cmd',
        'cmdArgs'                => 'CmdArgs',
        'csClusterId'            => 'CsClusterId',
        'deployType'             => 'DeployType',
        'developType'            => 'DevelopType',
        'edasContainerVersion'   => 'EdasContainerVersion',
        'envList'                => 'EnvList',
        'instances'              => 'Instances',
        'instancesBeforeScaling' => 'InstancesBeforeScaling',
        'k8sNamespace'           => 'K8sNamespace',
        'limitCpuM'              => 'LimitCpuM',
        'limitMem'               => 'LimitMem',
        'regionId'               => 'RegionId',
        'requestCpuM'            => 'RequestCpuM',
        'requestMem'             => 'RequestMem',
        'tomcatVersion'          => 'TomcatVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->buildpackId) {
            $res['BuildpackId'] = $this->buildpackId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }
        if (null !== $this->cmdArgs) {
            $res['CmdArgs'] = null !== $this->cmdArgs ? $this->cmdArgs->toMap() : null;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->developType) {
            $res['DevelopType'] = $this->developType;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->envList) {
            $res['EnvList'] = null !== $this->envList ? $this->envList->toMap() : null;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->instancesBeforeScaling) {
            $res['InstancesBeforeScaling'] = $this->instancesBeforeScaling;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->limitCpuM) {
            $res['LimitCpuM'] = $this->limitCpuM;
        }
        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestCpuM) {
            $res['RequestCpuM'] = $this->requestCpuM;
        }
        if (null !== $this->requestMem) {
            $res['RequestMem'] = $this->requestMem;
        }
        if (null !== $this->tomcatVersion) {
            $res['TomcatVersion'] = $this->tomcatVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return app
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['BuildpackId'])) {
            $model->buildpackId = $map['BuildpackId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }
        if (isset($map['CmdArgs'])) {
            $model->cmdArgs = cmdArgs::fromMap($map['CmdArgs']);
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DevelopType'])) {
            $model->developType = $map['DevelopType'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['EnvList'])) {
            $model->envList = envList::fromMap($map['EnvList']);
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['InstancesBeforeScaling'])) {
            $model->instancesBeforeScaling = $map['InstancesBeforeScaling'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['LimitCpuM'])) {
            $model->limitCpuM = $map['LimitCpuM'];
        }
        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestCpuM'])) {
            $model->requestCpuM = $map['RequestCpuM'];
        }
        if (isset($map['RequestMem'])) {
            $model->requestMem = $map['RequestMem'];
        }
        if (isset($map['TomcatVersion'])) {
            $model->tomcatVersion = $map['TomcatVersion'];
        }

        return $model;
    }
}
