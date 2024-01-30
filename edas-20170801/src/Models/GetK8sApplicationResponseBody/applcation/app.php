<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\cmdArgs;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\envList;
use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @description The annotation of an application pod.
     *
     * @example {"test-annokey":"test-annovalue"}
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 00ee517d-dd7d-4d4e-****-****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example test
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The type of the application.
     *
     * @example War
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The build package number of Enterprise Distributed Application Service (EDAS) Container.
     *
     * @example 57
     *
     * @var int
     */
    public $buildpackId;

    /**
     * @description The ID of the cluster.
     *
     * @example c37aec2a-bcca-4ec1-****-****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The startup command.
     *
     * @example ls
     *
     * @var string
     */
    public $cmd;

    /**
     * @description The list of commands.
     *
     * @var cmdArgs
     */
    public $cmdArgs;

    /**
     * @description The ID of the cluster to which the container belongs.
     *
     * @example c383bc813c1974e****451b50c0c8****
     *
     * @var string
     */
    public $csClusterId;

    /**
     * @description The deployment type of the application. Example: Image.
     *
     * @example Image
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The application type. Valid values:
     *
     *   General: native Java application
     *   Pandora: Pandora application
     *   Multilingual: multilingual application
     *
     * @example General
     *
     * @var string
     */
    public $developType;

    /**
     * @description The version of EDAS Container.
     *
     * @example 3.60.0
     *
     * @var string
     */
    public $edasContainerVersion;

    /**
     * @description Indicates whether the Empty List Protection feature is enabled for the application.
     *
     * @example true
     *
     * @var bool
     */
    public $enableEmptyPushReject;

    /**
     * @description Indicates whether the Graceful Release feature is enabled for the application.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLosslessRule;

    /**
     * @description The list of environment variables.
     *
     * @var envList
     */
    public $envList;

    /**
     * @description The feature annotations. Possible values:
     *
     *   base.combination.edas: enables EDAS integrated management solution.
     *   base.combination.arms: enables ARMS monitoring.
     *   base.combination.mse: enables MSE microservices governance.
     *   base.combination.none: enables lifecycle management.
     *
     * @example base.combination.edas
     *
     * @var string
     */
    public $featureAnnotations;

    /**
     * @description The number of application instances.
     *
     * @example 4
     *
     * @var int
     */
    public $instances;

    /**
     * @description The number of application instances before the last auto scaling operation.
     *
     * @example 10
     *
     * @var int
     */
    public $instancesBeforeScaling;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $k8sNamespace;

    /**
     * @description The label of an application pod.
     *
     * @example {"test-labelkey":"test-labelvalue"}
     *
     * @var string
     */
    public $labels;

    /**
     * @description The maximum number of CPU cores allowed. Unit: millicores. 1,000 millicores equal one CPU core.
     *
     * @example 1000
     *
     * @var int
     */
    public $limitCpuM;

    /**
     * @description The maximum size of space required by ephemeral storage. Unit: GB. Value 0 indicates that no limit is set on the space size.
     *
     * @example 4
     *
     * @var string
     */
    public $limitEphemeralStorage;

    /**
     * @description The maximum size of the memory allowed. Unit: MiB.
     *
     * @example 1024
     *
     * @var int
     */
    public $limitMem;

    /**
     * @description Indicates whether the Graceful Rolling Release and Configure Complete Service Registration before Readiness Probing feature is enabled for the application.
     *
     * @example true
     *
     * @var bool
     */
    public $losslessRuleAligned;

    /**
     * @description The delay of service registration. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $losslessRuleDelayTime;

    /**
     * @description The number of prefetching curves.
     *
     * @example 2
     *
     * @var int
     */
    public $losslessRuleFuncType;

    /**
     * @description Indicates whether the Graceful Rolling Release and Configure Complete Service Prefetching before Readiness Probing feature is enabled for the application.
     *
     * @example true
     *
     * @var bool
     */
    public $losslessRuleRelated;

    /**
     * @description The service prefetching duration. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $losslessRuleWarmupTime;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of requested CPU cores. Unit: millicores. 1,000 millicores equal one CPU core.
     *
     * @example 1000
     *
     * @var int
     */
    public $requestCpuM;

    /**
     * @description The size of space reserved for ephemeral storage resources. Unit: GB. Value 0 indicates that no limit is set on the space size.
     *
     * @example 2
     *
     * @var string
     */
    public $requestEphemeralStorage;

    /**
     * @description The size of the reserved memory. Unit: MiB.
     *
     * @example 1024
     *
     * @var int
     */
    public $requestMem;

    /**
     * @description The configuration information about the Server Load Balancer (SLB).
     *
     * @example [
     * "externalTrafficPolicy": "Local",
     * "ip": "192.168.254.***",
     * "targetPort": 18081,
     * "vServerGroupName": "k8s/31414/intranet-testapp/default/cc90e0c9508a44667bdae2e83d3******"
     * "serviceType": "LoadBalancer",
     * "slbId": "lb-bp1ikoh3nrpgqsm******",
     * ]
     * @var string
     */
    public $slbInfo;

    /**
     * @description The version of Apache Tomcat.
     *
     * @example 8.5.55
     *
     * @var string
     */
    public $tomcatVersion;

    /**
     * @description The workload type. Valid values: Deployment and StatefulSet. If you do not specify this parameter, Deployment is used.
     *
     * @example Deployment
     *
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'annotations'             => 'Annotations',
        'appId'                   => 'AppId',
        'applicationName'         => 'ApplicationName',
        'applicationType'         => 'ApplicationType',
        'buildpackId'             => 'BuildpackId',
        'clusterId'               => 'ClusterId',
        'cmd'                     => 'Cmd',
        'cmdArgs'                 => 'CmdArgs',
        'csClusterId'             => 'CsClusterId',
        'deployType'              => 'DeployType',
        'developType'             => 'DevelopType',
        'edasContainerVersion'    => 'EdasContainerVersion',
        'enableEmptyPushReject'   => 'EnableEmptyPushReject',
        'enableLosslessRule'      => 'EnableLosslessRule',
        'envList'                 => 'EnvList',
        'featureAnnotations'      => 'FeatureAnnotations',
        'instances'               => 'Instances',
        'instancesBeforeScaling'  => 'InstancesBeforeScaling',
        'k8sNamespace'            => 'K8sNamespace',
        'labels'                  => 'Labels',
        'limitCpuM'               => 'LimitCpuM',
        'limitEphemeralStorage'   => 'LimitEphemeralStorage',
        'limitMem'                => 'LimitMem',
        'losslessRuleAligned'     => 'LosslessRuleAligned',
        'losslessRuleDelayTime'   => 'LosslessRuleDelayTime',
        'losslessRuleFuncType'    => 'LosslessRuleFuncType',
        'losslessRuleRelated'     => 'LosslessRuleRelated',
        'losslessRuleWarmupTime'  => 'LosslessRuleWarmupTime',
        'regionId'                => 'RegionId',
        'requestCpuM'             => 'RequestCpuM',
        'requestEphemeralStorage' => 'RequestEphemeralStorage',
        'requestMem'              => 'RequestMem',
        'slbInfo'                 => 'SlbInfo',
        'tomcatVersion'           => 'TomcatVersion',
        'workloadType'            => 'WorkloadType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->enableEmptyPushReject) {
            $res['EnableEmptyPushReject'] = $this->enableEmptyPushReject;
        }
        if (null !== $this->enableLosslessRule) {
            $res['EnableLosslessRule'] = $this->enableLosslessRule;
        }
        if (null !== $this->envList) {
            $res['EnvList'] = null !== $this->envList ? $this->envList->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return app
     */
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
