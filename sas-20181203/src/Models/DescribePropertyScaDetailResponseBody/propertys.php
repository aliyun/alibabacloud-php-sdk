<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @description The type of the middleware, database, or web service. Valid values:
     *
     *   **system_service**: system service
     *   **software_library**: software library
     *   **docker_component**: container component
     *   **database**: database
     *   **web_container**: web container
     *   **jar**: JAR package
     *   **web_framework**: web framework
     *
     * @example software_library
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The display name of the type of the middleware, database, or web service . Valid values:
     *
     *   System service
     *   Software library
     *   Container component
     *   Database
     *   Web container
     *   JAR package
     *   Web framework
     *
     * @example System Service
     *
     * @var string
     */
    public $bizTypeDispaly;

    /**
     * @description The command line of the process.
     *
     * @example /sbin/dhclient -H iz2zeflhhbtk8gtxzt087az -1 -q -lf /var/lib/dhclient/dhclient--eth0.lease -pf /var/run/dhclient-eth0.pid eth0
     *
     * @var string
     */
    public $cmdline;

    /**
     * @description The path to the configuration file.
     *
     * @example /etc/my.cnf
     *
     * @var string
     */
    public $configPath;

    /**
     * @description The name of the container.
     *
     * @example 5-rce_web_1
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The latest collection timestamp, which indicates the last timestamp when Security Center collected the information about the middleware, database, or web service. Unit: milliseconds.
     *
     * @example 1597987834000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The name of the image.
     *
     * @example registry-vpc.cn-beijing.aliyuncs.com/acs/aliyun-ingress-controller****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the server on which the middleware, database, or web service is run.
     *
     * @example i-2zeclqj7ti****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server on which the middleware, database, or web service is run.
     *
     * @example Test01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server on which the middleware, database, or web service is run.
     *
     * @example 47.42.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server on which the middleware, database, or web service is run.
     *
     * @example 192.210.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The public IP address of the server on which the middleware, database, or web service is run.
     *
     * @example 47.42.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP address that the process monitors.
     *
     * @example 0.0.XX.XX
     *
     * @var string
     */
    public $listenIp;

    /**
     * @description The protocol of the traffic on which the process listens. Valid values:
     *
     *   **UDP**
     *   **TCP**
     *
     * @example UDP
     *
     * @var string
     */
    public $listenProtocol;

    /**
     * @description The listening status of the process. Valid values:
     *
     *   **NONE**: not listening
     *   **LISTEN**: listening
     *
     * @example NONE
     *
     * @var string
     */
    public $listenStatus;

    /**
     * @description The name of the middleware, database, or web service.
     *
     * @example openssl
     *
     * @var string
     */
    public $name;

    /**
     * @description The path of the middleware, database, or web service.
     *
     * @example /usr/lib64/libssl.so.1.0.2k
     *
     * @var string
     */
    public $path;

    /**
     * @description The PID.
     *
     * @example 756
     *
     * @var string
     */
    public $pid;

    /**
     * @description The name of the Kubernetes pod.
     *
     * @example myapp-pod
     *
     * @var string
     */
    public $podName;

    /**
     * @description The port of the middleware, database, or web service.
     *
     * @example 68
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the parent process.
     *
     * @example 1
     *
     * @var string
     */
    public $ppid;

    /**
     * @description The timestamp when the process starts. Unit: milliseconds.
     *
     * @example 1596539788
     *
     * @var int
     */
    public $processStarted;

    /**
     * @description The name of the user who runs the process.
     *
     * @example root
     *
     * @var string
     */
    public $processUser;

    /**
     * @description The version verification information about the middleware, database, or web service.
     *
     * @example /usr/lib64/libssl.so.1.0.2k
     *
     * @var string
     */
    public $proof;

    /**
     * @description The version of the runtime environment.
     *
     * >  The value of this parameter can be the Java Development Kit (JDK) version of the runtime environment for a Java process.
     * @example 1.8.0_144
     *
     * @var string
     */
    public $runtimeEnvVersion;

    /**
     * @description The type of the middleware, database, or web service.
     *
     * @example library
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server on which the middleware, database, or web service is run.
     *
     * @example uuid-02ebabe7-1c19-a****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The version of the middleware, database, or web service.
     *
     * @example 1.0.2k
     *
     * @var string
     */
    public $version;

    /**
     * @description The web directory.
     *
     * @example /usr/share/nginx/html
     *
     * @var string
     */
    public $webPath;
    protected $_name = [
        'bizType'           => 'BizType',
        'bizTypeDispaly'    => 'BizTypeDispaly',
        'cmdline'           => 'Cmdline',
        'configPath'        => 'ConfigPath',
        'containerName'     => 'ContainerName',
        'createTimestamp'   => 'CreateTimestamp',
        'imageName'         => 'ImageName',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'ip'                => 'Ip',
        'listenIp'          => 'ListenIp',
        'listenProtocol'    => 'ListenProtocol',
        'listenStatus'      => 'ListenStatus',
        'name'              => 'Name',
        'path'              => 'Path',
        'pid'               => 'Pid',
        'podName'           => 'PodName',
        'port'              => 'Port',
        'ppid'              => 'Ppid',
        'processStarted'    => 'ProcessStarted',
        'processUser'       => 'ProcessUser',
        'proof'             => 'Proof',
        'runtimeEnvVersion' => 'RuntimeEnvVersion',
        'type'              => 'Type',
        'uuid'              => 'Uuid',
        'version'           => 'Version',
        'webPath'           => 'WebPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizTypeDispaly) {
            $res['BizTypeDispaly'] = $this->bizTypeDispaly;
        }
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->configPath) {
            $res['ConfigPath'] = $this->configPath;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->listenIp) {
            $res['ListenIp'] = $this->listenIp;
        }
        if (null !== $this->listenProtocol) {
            $res['ListenProtocol'] = $this->listenProtocol;
        }
        if (null !== $this->listenStatus) {
            $res['ListenStatus'] = $this->listenStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ppid) {
            $res['Ppid'] = $this->ppid;
        }
        if (null !== $this->processStarted) {
            $res['ProcessStarted'] = $this->processStarted;
        }
        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
        }
        if (null !== $this->proof) {
            $res['Proof'] = $this->proof;
        }
        if (null !== $this->runtimeEnvVersion) {
            $res['RuntimeEnvVersion'] = $this->runtimeEnvVersion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->webPath) {
            $res['WebPath'] = $this->webPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizTypeDispaly'])) {
            $model->bizTypeDispaly = $map['BizTypeDispaly'];
        }
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['ConfigPath'])) {
            $model->configPath = $map['ConfigPath'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['ListenIp'])) {
            $model->listenIp = $map['ListenIp'];
        }
        if (isset($map['ListenProtocol'])) {
            $model->listenProtocol = $map['ListenProtocol'];
        }
        if (isset($map['ListenStatus'])) {
            $model->listenStatus = $map['ListenStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Ppid'])) {
            $model->ppid = $map['Ppid'];
        }
        if (isset($map['ProcessStarted'])) {
            $model->processStarted = $map['ProcessStarted'];
        }
        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }
        if (isset($map['Proof'])) {
            $model->proof = $map['Proof'];
        }
        if (isset($map['RuntimeEnvVersion'])) {
            $model->runtimeEnvVersion = $map['RuntimeEnvVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WebPath'])) {
            $model->webPath = $map['WebPath'];
        }

        return $model;
    }
}
