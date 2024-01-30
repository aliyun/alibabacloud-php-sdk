<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class StartK8sAppPrecheckRequest extends Model
{
    /**
     * @description The annotation of an application pod.
     *
     * @example {"annotation-name-1":"annotation-value-1","annotation-name-2":"annotation-value-2"}
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The ID of the application.
     *
     * @example af58edcf-f7eb-****-****-db4e425f****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application. The name must start with a letter, and can contain digits, letters, and hyphens (-). It can be up to 36 characters in length.
     *
     * @example testapp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the cluster.
     *
     * @example c37aec2a-bcca-4ec1-****-****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the application component. You can call the ListComponents operation to query application components. This parameter must be specified when the application runs in Apache Tomcat or in a standard Java application runtime environment. The Apache Tomcat application runtime environment is applicable to Dubbo applications that are deployed by using WAR packages. A standard Java application runtime environment is applicable to Spring Boot or Spring Cloud applications that are deployed by using JAR packages.
     *
     * Valid values for regular application component IDs:
     *
     *   4: Apache Tomcat 7.0.91
     *   5: OpenJDK 1.8.x
     *   6: OpenJDK 1.7.x
     *   7: Apache Tomcat 8.5.42
     *
     * This parameter is available only for Java SDK 2.57.3 or later, or Python SDK 2.57.3 or later. Assume that you use an SDK that is not provided by Enterprise Distributed Application Service (EDAS), such as aliyun-python-sdk-core, aliyun-java-sdk-core, and Alibaba Cloud CLI. In this case, you can directly specify this parameter.
     * @example 7
     *
     * @var string
     */
    public $componentIds;

    /**
     * @description The configuration for mounting a Kubernetes ConfigMap or Secret to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   name: the name of the Kubernetes ConfigMap or Secret.
     *   type: the type of the API object that you want to mount. You can mount a Kubernetes ConfigMap or Secret.
     *   mountPath: the mount path. The mount path must be an absolute path that starts with a forward slash (/).
     *
     * @example [{"name":"nginx-config","type":"ConfigMap","mountPath":"/etc/nginx"},{"name":"tls-secret","type":"secret","mountPath":"/etc/ssh"}]
     *
     * @var string
     */
    public $configMountDescs;

    /**
     * @description The configuration for mounting a Kubernetes emptyDir volume to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   mountPath: The mount path in the container. This parameter is required.
     *   readOnly: (Optional) The mount mode. The value true indicates the read-only mode. The value false indicates the read and write mode. Default value: false.
     *   subPathExpr: (Optional) The regular expression that is used to match the subdirectory.
     *
     * @example [{"mountPath":"/app-log","subPathExpr":"$(POD_IP)"},{"readOnly":true,"mountPath":"/etc/nginx"}]
     *
     * @var string
     */
    public $emptyDirs;

    /**
     * @description The Kubernetes environment variables that are configured in EnvFrom mode. A ConfigMap or Secret is mounted to a directory. Each key corresponds to a file in the directory, and the content of the file is the value of the key.
     *
     * The following parameters are included in the configuration of the EnvFroms parameter:
     *
     *   configMapRef: the ConfigMap that is referenced. The following parameter is included:
     *
     * name: the name of the ConfigMap.
     *
     *   secretRef: the Secret that is referenced. The following parameter is included:
     *
     * name: the name of the Secret.
     * @example [{"name":"appname","valueFrom":{"configMapKeyRef":{"name":"appconf","key":"name"}}}]
     *
     * @var string
     */
    public $envFroms;

    /**
     * @description The environment variables that are used to deploy the application. The value must be a JSON array. Valid values: regular environment variables, Kubernetes ConfigMap environment variables, and Kubernetes Secret environment variables. Specify regular environment variables in the following format:
     *
     * > If you want to cancel this configuration, set this parameter to an empty JSON array, which is in the format of "\[]".
     * @example [{"name":"x1","value":"y1"},{"name":"x2","valueFrom":{"configMapKeyRef":{"name":"my-config","key":"y2"}}},{"name":"x3","valueFrom":{"secretKeyRef":{"name":"my-secret","key":"y3"}}}]
     *
     * @var string
     */
    public $envs;

    /**
     * @description The URL of the image.
     *
     * @example registry.cn-hangzhou.aliyuncs.com/mw/testapp:latest
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The configuration of Java startup parameters for a Java application. These startup parameters involve the memory, application, garbage collection (GC) policy, tools, service registration and discovery, and custom configurations. Proper parameter settings help reduce the GC overheads, shorten the server response time, and improve the throughput. Set this parameter to a JSON string. In the example, original indicates the configuration value, and startup indicates a startup parameter. The system automatically concatenates all startup values as the settings of Java startup parameters for the application. To delete this configuration, leave the parameter value empty by entering `""` or `"{}"`. The following parameters are included in the configuration:
     *
     *   InitialHeapSize: the initial size of the heap memory.
     *   MaxHeapSize: the maximum size of the heap memory.
     *   CustomParams: the custom parameters, such as JVM -D parameters.
     *   Other parameters: You can view the JSON structure submitted by the frontend.
     *
     * @example {"InitialHeapSize":{"original":512,"startup":"-Xms512m"},"MaxHeapSize":{"original":1024,"startup":"-Xmx1024m"}}
     *
     * @var string
     */
    public $javaStartUpConfig;

    /**
     * @description The label of an application pod.
     *
     * @example {"label-name-1":"label-value-1","label-name-2":"label-value-2"}
     *
     * @var string
     */
    public $labels;

    /**
     * @description The maximum size of space required by ephemeral storage. Unit: GB. The value 0 indicates that no limit is set on the ephemeral storage space.
     *
     * @example 4
     *
     * @var int
     */
    public $limitEphemeralStorage;

    /**
     * @description The maximum size of memory allowed for each application instance when the application is running. Unit: MB. The value of LimitMem must be greater than or equal to that of RequestsMem.
     *
     * @example 4096
     *
     * @var int
     */
    public $limitMem;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is running. Unit: millicores. The value 0 indicates that no limit is set on CPU cores.
     *
     * @example 1000
     *
     * @var int
     */
    public $limitmCpu;

    /**
     * @description The configurations that are used when the host files are mounted to the container on which the application is running. Example: `\[{"type":"","nodePath":"/localfiles","mountPath":"/app/files"},{"type":"Directory","nodePath":"/mnt","mountPath":"/app/storage"}\]`. Description:
     *
     *   `nodePath`: the host path.
     *   `mountPath`: the path in the container.
     *   `type`: the mounting type.
     *
     * @example [{"type":"","nodePath":"/localfiles","mountPath":"/app/files"},{"type":"Directory","nodePath":"/mnt","mountPath":"/app/storage"}]
     *
     * @var string
     */
    public $localVolume;

    /**
     * @description The namespace of the Kubernetes cluster. This parameter specifies the Kubernetes namespace in which your application is deployed. By default, the default namespace is used.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The URL of the deployment package.
     *
     * @example https://e***.oss-cn-beijing.aliyuncs.com/s***-1.0-SNAPSHOT-spring-boot.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The configuration for mounting a Kubernetes PersistentVolumeClaim (PVC) to a directory in an elastic container instance. The following parameters are included in the configuration:
     *
     *   pvcName: the name of the PVC. Make sure that the volume exists and is in the Bound state.
     *
     *   mountPaths: the directory to which you want to mount the PVC. You can configure multiple directories. You can set the following two parameters for each mount directory:
     *
     *   mountPath: the mount path. The mount path must be an absolute path that starts with a forward slash (/).
     *   readOnly: the mount mode. The value true indicates the read-only mode. The value false indicates the read and write mode. Default value: false.
     *
     * @example [{"pvcName":"nas-pvc-1","mountPaths":[{"mountPath":"/usr/share/nginx/data"},{"mountPath":"/usr/share/nginx/html","readOnly":true}]}]
     *
     * @var string
     */
    public $pvcMountDescs;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of application instances.
     *
     * @example 2
     *
     * @var int
     */
    public $replicas;

    /**
     * @description The minimum size of space required by ephemeral storage. Unit: GB. The value 0 indicates that no limit is set on the ephemeral storage space.
     *
     * @example 2
     *
     * @var int
     */
    public $requestsEphemeralStorage;

    /**
     * @description The maximum size of memory allowed for each application instance when the application is created. Unit: MB. The value 0 indicates that no limit is set on the memory size. The value of RequestsMem cannot be greater than that of LimitMem.
     *
     * @example 1024
     *
     * @var int
     */
    public $requestsMem;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is created. Unit: millicores.
     *
     * @example 500
     *
     * @var int
     */
    public $requestsmCpu;
    protected $_name = [
        'annotations'              => 'Annotations',
        'appId'                    => 'AppId',
        'appName'                  => 'AppName',
        'clusterId'                => 'ClusterId',
        'componentIds'             => 'ComponentIds',
        'configMountDescs'         => 'ConfigMountDescs',
        'emptyDirs'                => 'EmptyDirs',
        'envFroms'                 => 'EnvFroms',
        'envs'                     => 'Envs',
        'imageUrl'                 => 'ImageUrl',
        'javaStartUpConfig'        => 'JavaStartUpConfig',
        'labels'                   => 'Labels',
        'limitEphemeralStorage'    => 'LimitEphemeralStorage',
        'limitMem'                 => 'LimitMem',
        'limitmCpu'                => 'LimitmCpu',
        'localVolume'              => 'LocalVolume',
        'namespace'                => 'Namespace',
        'packageUrl'               => 'PackageUrl',
        'pvcMountDescs'            => 'PvcMountDescs',
        'regionId'                 => 'RegionId',
        'replicas'                 => 'Replicas',
        'requestsEphemeralStorage' => 'RequestsEphemeralStorage',
        'requestsMem'              => 'RequestsMem',
        'requestsmCpu'             => 'RequestsmCpu',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = $this->componentIds;
        }
        if (null !== $this->configMountDescs) {
            $res['ConfigMountDescs'] = $this->configMountDescs;
        }
        if (null !== $this->emptyDirs) {
            $res['EmptyDirs'] = $this->emptyDirs;
        }
        if (null !== $this->envFroms) {
            $res['EnvFroms'] = $this->envFroms;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->javaStartUpConfig) {
            $res['JavaStartUpConfig'] = $this->javaStartUpConfig;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->limitEphemeralStorage) {
            $res['LimitEphemeralStorage'] = $this->limitEphemeralStorage;
        }
        if (null !== $this->limitMem) {
            $res['LimitMem'] = $this->limitMem;
        }
        if (null !== $this->limitmCpu) {
            $res['LimitmCpu'] = $this->limitmCpu;
        }
        if (null !== $this->localVolume) {
            $res['LocalVolume'] = $this->localVolume;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->pvcMountDescs) {
            $res['PvcMountDescs'] = $this->pvcMountDescs;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }
        if (null !== $this->requestsEphemeralStorage) {
            $res['RequestsEphemeralStorage'] = $this->requestsEphemeralStorage;
        }
        if (null !== $this->requestsMem) {
            $res['RequestsMem'] = $this->requestsMem;
        }
        if (null !== $this->requestsmCpu) {
            $res['RequestsmCpu'] = $this->requestsmCpu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartK8sAppPrecheckRequest
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = $map['ComponentIds'];
        }
        if (isset($map['ConfigMountDescs'])) {
            $model->configMountDescs = $map['ConfigMountDescs'];
        }
        if (isset($map['EmptyDirs'])) {
            $model->emptyDirs = $map['EmptyDirs'];
        }
        if (isset($map['EnvFroms'])) {
            $model->envFroms = $map['EnvFroms'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['JavaStartUpConfig'])) {
            $model->javaStartUpConfig = $map['JavaStartUpConfig'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LimitEphemeralStorage'])) {
            $model->limitEphemeralStorage = $map['LimitEphemeralStorage'];
        }
        if (isset($map['LimitMem'])) {
            $model->limitMem = $map['LimitMem'];
        }
        if (isset($map['LimitmCpu'])) {
            $model->limitmCpu = $map['LimitmCpu'];
        }
        if (isset($map['LocalVolume'])) {
            $model->localVolume = $map['LocalVolume'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PvcMountDescs'])) {
            $model->pvcMountDescs = $map['PvcMountDescs'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }
        if (isset($map['RequestsEphemeralStorage'])) {
            $model->requestsEphemeralStorage = $map['RequestsEphemeralStorage'];
        }
        if (isset($map['RequestsMem'])) {
            $model->requestsMem = $map['RequestsMem'];
        }
        if (isset($map['RequestsmCpu'])) {
            $model->requestsmCpu = $map['RequestsmCpu'];
        }

        return $model;
    }
}
