<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizTypeDispaly;

    /**
     * @var string
     */
    public $cmdline;

    /**
     * @var string
     */
    public $configPath;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $listenIp;

    /**
     * @var string
     */
    public $listenProtocol;

    /**
     * @var string
     */
    public $listenStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $ppid;

    /**
     * @var int
     */
    public $processStarted;

    /**
     * @var string
     */
    public $processUser;

    /**
     * @var string
     */
    public $proof;

    /**
     * @var string
     */
    public $runtimeEnvVersion;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $version;

    /**
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
