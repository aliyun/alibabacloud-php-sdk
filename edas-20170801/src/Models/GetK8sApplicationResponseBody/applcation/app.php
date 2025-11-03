<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\cmdArgs;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\envList;

class app extends Model
{
    /**
     * @var string
     */
    public $annotations;

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
     * @var bool
     */
    public $enableEmptyPushReject;

    /**
     * @var bool
     */
    public $enableLosslessRule;

    /**
     * @var envList
     */
    public $envList;

    /**
     * @var string
     */
    public $featureAnnotations;

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
     * @var string
     */
    public $labels;

    /**
     * @var int
     */
    public $limitCpuM;

    /**
     * @var string
     */
    public $limitEphemeralStorage;

    /**
     * @var int
     */
    public $limitMem;

    /**
     * @var bool
     */
    public $losslessRuleAligned;

    /**
     * @var int
     */
    public $losslessRuleDelayTime;

    /**
     * @var int
     */
    public $losslessRuleFuncType;

    /**
     * @var bool
     */
    public $losslessRuleRelated;

    /**
     * @var int
     */
    public $losslessRuleWarmupTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $requestCpuM;

    /**
     * @var string
     */
    public $requestEphemeralStorage;

    /**
     * @var int
     */
    public $requestMem;

    /**
     * @var string
     */
    public $securityContext;

    /**
     * @var string
     */
    public $slbInfo;

    /**
     * @var string
     */
    public $tomcatVersion;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'annotations' => 'Annotations',
        'appId' => 'AppId',
        'applicationName' => 'ApplicationName',
        'applicationType' => 'ApplicationType',
        'buildpackId' => 'BuildpackId',
        'clusterId' => 'ClusterId',
        'cmd' => 'Cmd',
        'cmdArgs' => 'CmdArgs',
        'csClusterId' => 'CsClusterId',
        'deployType' => 'DeployType',
        'developType' => 'DevelopType',
        'edasContainerVersion' => 'EdasContainerVersion',
        'enableEmptyPushReject' => 'EnableEmptyPushReject',
        'enableLosslessRule' => 'EnableLosslessRule',
        'envList' => 'EnvList',
        'featureAnnotations' => 'FeatureAnnotations',
        'instances' => 'Instances',
        'instancesBeforeScaling' => 'InstancesBeforeScaling',
        'k8sNamespace' => 'K8sNamespace',
        'labels' => 'Labels',
        'limitCpuM' => 'LimitCpuM',
        'limitEphemeralStorage' => 'LimitEphemeralStorage',
        'limitMem' => 'LimitMem',
        'losslessRuleAligned' => 'LosslessRuleAligned',
        'losslessRuleDelayTime' => 'LosslessRuleDelayTime',
        'losslessRuleFuncType' => 'LosslessRuleFuncType',
        'losslessRuleRelated' => 'LosslessRuleRelated',
        'losslessRuleWarmupTime' => 'LosslessRuleWarmupTime',
        'regionId' => 'RegionId',
        'requestCpuM' => 'RequestCpuM',
        'requestEphemeralStorage' => 'RequestEphemeralStorage',
        'requestMem' => 'RequestMem',
        'securityContext' => 'SecurityContext',
        'slbInfo' => 'SlbInfo',
        'tomcatVersion' => 'TomcatVersion',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
        if (null !== $this->cmdArgs) {
            $this->cmdArgs->validate();
        }
        if (null !== $this->envList) {
            $this->envList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }

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
            $res['CmdArgs'] = null !== $this->cmdArgs ? $this->cmdArgs->toArray($noStream) : $this->cmdArgs;
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

        if (null !== $this->enableEmptyPushReject) {
            $res['EnableEmptyPushReject'] = $this->enableEmptyPushReject;
        }

        if (null !== $this->enableLosslessRule) {
            $res['EnableLosslessRule'] = $this->enableLosslessRule;
        }

        if (null !== $this->envList) {
            $res['EnvList'] = null !== $this->envList ? $this->envList->toArray($noStream) : $this->envList;
        }

        if (null !== $this->featureAnnotations) {
            $res['FeatureAnnotations'] = $this->featureAnnotations;
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

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->limitCpuM) {
            $res['LimitCpuM'] = $this->limitCpuM;
        }

        if (null !== $this->limitEphemeralStorage) {
            $res['LimitEphemeralStorage'] = $this->limitEphemeralStorage;
        }

        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }

        if (null !== $this->losslessRuleAligned) {
            $res['LosslessRuleAligned'] = $this->losslessRuleAligned;
        }

        if (null !== $this->losslessRuleDelayTime) {
            $res['LosslessRuleDelayTime'] = $this->losslessRuleDelayTime;
        }

        if (null !== $this->losslessRuleFuncType) {
            $res['LosslessRuleFuncType'] = $this->losslessRuleFuncType;
        }

        if (null !== $this->losslessRuleRelated) {
            $res['LosslessRuleRelated'] = $this->losslessRuleRelated;
        }

        if (null !== $this->losslessRuleWarmupTime) {
            $res['LosslessRuleWarmupTime'] = $this->losslessRuleWarmupTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestCpuM) {
            $res['RequestCpuM'] = $this->requestCpuM;
        }

        if (null !== $this->requestEphemeralStorage) {
            $res['RequestEphemeralStorage'] = $this->requestEphemeralStorage;
        }

        if (null !== $this->requestMem) {
            $res['RequestMem'] = $this->requestMem;
        }

        if (null !== $this->securityContext) {
            $res['SecurityContext'] = $this->securityContext;
        }

        if (null !== $this->slbInfo) {
            $res['SlbInfo'] = $this->slbInfo;
        }

        if (null !== $this->tomcatVersion) {
            $res['TomcatVersion'] = $this->tomcatVersion;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }

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

        if (isset($map['EnableEmptyPushReject'])) {
            $model->enableEmptyPushReject = $map['EnableEmptyPushReject'];
        }

        if (isset($map['EnableLosslessRule'])) {
            $model->enableLosslessRule = $map['EnableLosslessRule'];
        }

        if (isset($map['EnvList'])) {
            $model->envList = envList::fromMap($map['EnvList']);
        }

        if (isset($map['FeatureAnnotations'])) {
            $model->featureAnnotations = $map['FeatureAnnotations'];
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

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['LimitCpuM'])) {
            $model->limitCpuM = $map['LimitCpuM'];
        }

        if (isset($map['LimitEphemeralStorage'])) {
            $model->limitEphemeralStorage = $map['LimitEphemeralStorage'];
        }

        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }

        if (isset($map['LosslessRuleAligned'])) {
            $model->losslessRuleAligned = $map['LosslessRuleAligned'];
        }

        if (isset($map['LosslessRuleDelayTime'])) {
            $model->losslessRuleDelayTime = $map['LosslessRuleDelayTime'];
        }

        if (isset($map['LosslessRuleFuncType'])) {
            $model->losslessRuleFuncType = $map['LosslessRuleFuncType'];
        }

        if (isset($map['LosslessRuleRelated'])) {
            $model->losslessRuleRelated = $map['LosslessRuleRelated'];
        }

        if (isset($map['LosslessRuleWarmupTime'])) {
            $model->losslessRuleWarmupTime = $map['LosslessRuleWarmupTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestCpuM'])) {
            $model->requestCpuM = $map['RequestCpuM'];
        }

        if (isset($map['RequestEphemeralStorage'])) {
            $model->requestEphemeralStorage = $map['RequestEphemeralStorage'];
        }

        if (isset($map['RequestMem'])) {
            $model->requestMem = $map['RequestMem'];
        }

        if (isset($map['SecurityContext'])) {
            $model->securityContext = $map['SecurityContext'];
        }

        if (isset($map['SlbInfo'])) {
            $model->slbInfo = $map['SlbInfo'];
        }

        if (isset($map['TomcatVersion'])) {
            $model->tomcatVersion = $map['TomcatVersion'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
