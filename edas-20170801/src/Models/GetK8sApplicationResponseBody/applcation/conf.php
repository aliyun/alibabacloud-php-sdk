<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\Tea\Model;

class conf extends Model
{
    /**
     * @description The affinity configuration of the pod.
     *
     * @example "{\"nodeAffinity\":{\"requiredDuringSchedulingIgnoredDuringExecution\":{\"nodeSelectorTerms\":[{\"matchExpressions\":[{\"key\":\"beta.kubernetes.io/arch\",\"operator\":\"NotIn\",\"values\":[\"arm64\",\"arm32\"]}]}]},\"preferredDuringSchedulingIgnoredDuringExecution\":[{\"weight\":5,\"preference\":{\"matchExpressions\":[{\"key\":\"kubernetes.io/os\",\"operator\":\"In\",\"values\":[\"linux\"]}]}}]},\"podAffinity\":{\"requiredDuringSchedulingIgnoredDuringExecution\":[{\"labelSelector\":{\"matchExpressions\":[{\"key\":\"edas.oam.acname\",\"operator\":\"NotIn\",\"values\":[\"edas-test-app\"]}]},\"namespaces\":[\"default\"],\"topologyKey\":\"kubernetes.io/hostname\"}]},\"podAntiAffinity\":{\"preferredDuringSchedulingIgnoredDuringExecution\":[{\"weight\":15,\"podAffinityTerm\":{\"labelSelector\":{\"matchExpressions\":[{\"key\":\"edas.oam.acname\",\"operator\":\"In\",\"values\":[\"edas-test-app-2\"]}]},\"namespaces\":[\"default\"],\"topologyKey\":\"failure-domain.beta.kubernetes.io/zone\"}}]}}"
     *
     * @var string
     */
    public $affinity;

    /**
     * @description Indicates whether the application is connected to Application High Availability Service (AHAS).
     *
     * @example true
     *
     * @var bool
     */
    public $ahasEnabled;

    /**
     * @description Indicates whether the application instances are deployed across nodes.
     *
     *   Value `true` indicates that the application instances are deployed across nodes.
     *   Other values indicate that the application instances are not deployed across nodes.
     *
     * @example true
     *
     * @var string
     */
    public $deployAcrossNodes;

    /**
     * @description Indicates whether the application instances are deployed across zones.
     *
     *   Value `true` indicates that the application instances are deployed across zones.
     *   Other values indicate that the application instances are not deployed across zones.
     *
     * @example true
     *
     * @var string
     */
    public $deployAcrossZones;

    /**
     * @description The startup parameters for a JAR application. This parameter is deprecated.
     *
     * @example -lh
     *
     * @var string
     */
    public $jarStartArgs;

    /**
     * @description The startup options for a JAR application. This parameter is deprecated.
     *
     * @example -h
     *
     * @var string
     */
    public $jarStartOptions;

    /**
     * @description The startup command.
     *
     * @example ls
     *
     * @var string
     */
    public $k8sCmd;

    /**
     * @description The parameters of the startup command.
     *
     * @example -lh
     *
     * @var string
     */
    public $k8sCmdArgs;

    /**
     * @description The information about the local storage.
     *
     * @example [{"type":"","nodePath":"/mnt/","mountPath":"/mnt/"}]
     *
     * @var string
     */
    public $k8sLocalvolumeInfo;

    /**
     * @description The information about the Apsara File Storage NAS (NAS) storage.
     *
     * @example [{"nasPath":"/mnt/","mountPath":"/mnt/"}]
     *
     * @var string
     */
    public $k8sNasInfo;

    /**
     * @description The information about the storage.
     *
     * @example "{\"hostPaths\":\"[]\",\"emptyDirs\":\"[]\"}"
     *
     * @var string
     */
    public $k8sVolumeInfo;

    /**
     * @description The information about the liveness check on the container.
     *
     * @example {"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"tcpSocket":{"host":"", "port":8080}}
     *
     * @var string
     */
    public $liveness;

    /**
     * @description The script executed after the container is started.
     *
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The script executed before the container is stopped.
     *
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The information about the readiness check on the container.
     *
     * @example {"failureThreshold": 3,"initialDelaySeconds": 5,"successThreshold": 1,"timeoutSeconds": 1,"httpGet": {"path": "/consumer","port": 8080,"scheme": "HTTP","httpHeaders": \[{"name": "test","value": "testvalue"}\]}}
     *
     * @var string
     */
    public $readiness;

    /**
     * @description The type of the container runtime. This parameter is applicable only to clusters that use sandboxed containers.
     *
     * @example runc
     *
     * @var string
     */
    public $runtimeClassName;

    /**
     * @description The scheduling tolerance configuration of the pod.
     *
     * @example "[{\"key\":\"edas-taint-key2\",\"operator\":\"Exists\",\"effect\":\"NoExecute\",\"tolerationSeconds\":50},{\"key\":\"edas-taint-key\",\"operator\":\"Equal\",\"value\":\"edas-taint-value\",\"effect\":\"PreferNoSchedule\"}]"
     *
     * @var string
     */
    public $tolerations;

    /**
     * @description The URL of the base image. If you use a custom Java Development Kit (JDK) runtime, you must specify this parameter.
     *
     * @example openjdk:8u302
     *
     * @var string
     */
    public $userBaseImageUrl;
    protected $_name = [
        'affinity'           => 'Affinity',
        'ahasEnabled'        => 'AhasEnabled',
        'deployAcrossNodes'  => 'DeployAcrossNodes',
        'deployAcrossZones'  => 'DeployAcrossZones',
        'jarStartArgs'       => 'JarStartArgs',
        'jarStartOptions'    => 'JarStartOptions',
        'k8sCmd'             => 'K8sCmd',
        'k8sCmdArgs'         => 'K8sCmdArgs',
        'k8sLocalvolumeInfo' => 'K8sLocalvolumeInfo',
        'k8sNasInfo'         => 'K8sNasInfo',
        'k8sVolumeInfo'      => 'K8sVolumeInfo',
        'liveness'           => 'Liveness',
        'postStart'          => 'PostStart',
        'preStop'            => 'PreStop',
        'readiness'          => 'Readiness',
        'runtimeClassName'   => 'RuntimeClassName',
        'tolerations'        => 'Tolerations',
        'userBaseImageUrl'   => 'UserBaseImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->ahasEnabled) {
            $res['AhasEnabled'] = $this->ahasEnabled;
        }
        if (null !== $this->deployAcrossNodes) {
            $res['DeployAcrossNodes'] = $this->deployAcrossNodes;
        }
        if (null !== $this->deployAcrossZones) {
            $res['DeployAcrossZones'] = $this->deployAcrossZones;
        }
        if (null !== $this->jarStartArgs) {
            $res['JarStartArgs'] = $this->jarStartArgs;
        }
        if (null !== $this->jarStartOptions) {
            $res['JarStartOptions'] = $this->jarStartOptions;
        }
        if (null !== $this->k8sCmd) {
            $res['K8sCmd'] = $this->k8sCmd;
        }
        if (null !== $this->k8sCmdArgs) {
            $res['K8sCmdArgs'] = $this->k8sCmdArgs;
        }
        if (null !== $this->k8sLocalvolumeInfo) {
            $res['K8sLocalvolumeInfo'] = $this->k8sLocalvolumeInfo;
        }
        if (null !== $this->k8sNasInfo) {
            $res['K8sNasInfo'] = $this->k8sNasInfo;
        }
        if (null !== $this->k8sVolumeInfo) {
            $res['K8sVolumeInfo'] = $this->k8sVolumeInfo;
        }
        if (null !== $this->liveness) {
            $res['Liveness'] = $this->liveness;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->readiness) {
            $res['Readiness'] = $this->readiness;
        }
        if (null !== $this->runtimeClassName) {
            $res['RuntimeClassName'] = $this->runtimeClassName;
        }
        if (null !== $this->tolerations) {
            $res['Tolerations'] = $this->tolerations;
        }
        if (null !== $this->userBaseImageUrl) {
            $res['UserBaseImageUrl'] = $this->userBaseImageUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['AhasEnabled'])) {
            $model->ahasEnabled = $map['AhasEnabled'];
        }
        if (isset($map['DeployAcrossNodes'])) {
            $model->deployAcrossNodes = $map['DeployAcrossNodes'];
        }
        if (isset($map['DeployAcrossZones'])) {
            $model->deployAcrossZones = $map['DeployAcrossZones'];
        }
        if (isset($map['JarStartArgs'])) {
            $model->jarStartArgs = $map['JarStartArgs'];
        }
        if (isset($map['JarStartOptions'])) {
            $model->jarStartOptions = $map['JarStartOptions'];
        }
        if (isset($map['K8sCmd'])) {
            $model->k8sCmd = $map['K8sCmd'];
        }
        if (isset($map['K8sCmdArgs'])) {
            $model->k8sCmdArgs = $map['K8sCmdArgs'];
        }
        if (isset($map['K8sLocalvolumeInfo'])) {
            $model->k8sLocalvolumeInfo = $map['K8sLocalvolumeInfo'];
        }
        if (isset($map['K8sNasInfo'])) {
            $model->k8sNasInfo = $map['K8sNasInfo'];
        }
        if (isset($map['K8sVolumeInfo'])) {
            $model->k8sVolumeInfo = $map['K8sVolumeInfo'];
        }
        if (isset($map['Liveness'])) {
            $model->liveness = $map['Liveness'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['Readiness'])) {
            $model->readiness = $map['Readiness'];
        }
        if (isset($map['RuntimeClassName'])) {
            $model->runtimeClassName = $map['RuntimeClassName'];
        }
        if (isset($map['Tolerations'])) {
            $model->tolerations = $map['Tolerations'];
        }
        if (isset($map['UserBaseImageUrl'])) {
            $model->userBaseImageUrl = $map['UserBaseImageUrl'];
        }

        return $model;
    }
}
