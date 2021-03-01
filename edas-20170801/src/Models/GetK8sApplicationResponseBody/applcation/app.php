<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\cmdArgs;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\envList;
use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @var int
     */
    public $instancesBeforeScaling;

    /**
     * @var string
     */
    public $deployType;

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
    public $instances;

    /**
     * @var cmdArgs
     */
    public $cmdArgs;

    /**
     * @var string
     */
    public $cmd;

    /**
     * @var int
     */
    public $buildpackId;

    /**
     * @var string
     */
    public $tomcatVersion;

    /**
     * @var string
     */
    public $csClusterId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var envList
     */
    public $envList;
    protected $_name = [
        'instancesBeforeScaling' => 'InstancesBeforeScaling',
        'deployType'             => 'DeployType',
        'applicationName'        => 'ApplicationName',
        'applicationType'        => 'ApplicationType',
        'instances'              => 'Instances',
        'cmdArgs'                => 'CmdArgs',
        'cmd'                    => 'Cmd',
        'buildpackId'            => 'BuildpackId',
        'tomcatVersion'          => 'TomcatVersion',
        'csClusterId'            => 'CsClusterId',
        'appId'                  => 'AppId',
        'edasContainerVersion'   => 'EdasContainerVersion',
        'clusterId'              => 'ClusterId',
        'envList'                => 'EnvList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancesBeforeScaling) {
            $res['InstancesBeforeScaling'] = $this->instancesBeforeScaling;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->cmdArgs) {
            $res['CmdArgs'] = null !== $this->cmdArgs ? $this->cmdArgs->toMap() : null;
        }
        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }
        if (null !== $this->buildpackId) {
            $res['BuildpackId'] = $this->buildpackId;
        }
        if (null !== $this->tomcatVersion) {
            $res['TomcatVersion'] = $this->tomcatVersion;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->edasContainerVersion) {
            $res['EdasContainerVersion'] = $this->edasContainerVersion;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->envList) {
            $res['EnvList'] = null !== $this->envList ? $this->envList->toMap() : null;
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
        if (isset($map['InstancesBeforeScaling'])) {
            $model->instancesBeforeScaling = $map['InstancesBeforeScaling'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['CmdArgs'])) {
            $model->cmdArgs = cmdArgs::fromMap($map['CmdArgs']);
        }
        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }
        if (isset($map['BuildpackId'])) {
            $model->buildpackId = $map['BuildpackId'];
        }
        if (isset($map['TomcatVersion'])) {
            $model->tomcatVersion = $map['TomcatVersion'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EdasContainerVersion'])) {
            $model->edasContainerVersion = $map['EdasContainerVersion'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EnvList'])) {
            $model->envList = envList::fromMap($map['EnvList']);
        }

        return $model;
    }
}
