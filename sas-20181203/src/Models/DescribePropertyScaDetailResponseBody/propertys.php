<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyScaDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $bizTypeDispaly;

    /**
     * @var int
     */
    public $processStarted;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $configPath;

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
    public $cmdline;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $listenIp;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $instanceName;

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
    public $create;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $processUser;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $webPath;

    /**
     * @var string
     */
    public $ppid;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $listenProtocol;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $proof;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'type'            => 'Type',
        'bizTypeDispaly'  => 'BizTypeDispaly',
        'processStarted'  => 'ProcessStarted',
        'internetIp'      => 'InternetIp',
        'configPath'      => 'ConfigPath',
        'pid'             => 'Pid',
        'port'            => 'Port',
        'cmdline'         => 'Cmdline',
        'bizType'         => 'BizType',
        'listenIp'        => 'ListenIp',
        'version'         => 'Version',
        'instanceName'    => 'InstanceName',
        'listenStatus'    => 'ListenStatus',
        'name'            => 'Name',
        'create'          => 'Create',
        'ip'              => 'Ip',
        'processUser'     => 'ProcessUser',
        'instanceId'      => 'InstanceId',
        'webPath'         => 'WebPath',
        'ppid'            => 'Ppid',
        'intranetIp'      => 'IntranetIp',
        'uuid'            => 'Uuid',
        'listenProtocol'  => 'ListenProtocol',
        'imageName'       => 'ImageName',
        'path'            => 'Path',
        'containerName'   => 'ContainerName',
        'proof'           => 'Proof',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->bizTypeDispaly) {
            $res['BizTypeDispaly'] = $this->bizTypeDispaly;
        }
        if (null !== $this->processStarted) {
            $res['ProcessStarted'] = $this->processStarted;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->configPath) {
            $res['ConfigPath'] = $this->configPath;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->listenIp) {
            $res['ListenIp'] = $this->listenIp;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->listenStatus) {
            $res['ListenStatus'] = $this->listenStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->webPath) {
            $res['WebPath'] = $this->webPath;
        }
        if (null !== $this->ppid) {
            $res['Ppid'] = $this->ppid;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->listenProtocol) {
            $res['ListenProtocol'] = $this->listenProtocol;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->proof) {
            $res['Proof'] = $this->proof;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['BizTypeDispaly'])) {
            $model->bizTypeDispaly = $map['BizTypeDispaly'];
        }
        if (isset($map['ProcessStarted'])) {
            $model->processStarted = $map['ProcessStarted'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['ConfigPath'])) {
            $model->configPath = $map['ConfigPath'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ListenIp'])) {
            $model->listenIp = $map['ListenIp'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ListenStatus'])) {
            $model->listenStatus = $map['ListenStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['WebPath'])) {
            $model->webPath = $map['WebPath'];
        }
        if (isset($map['Ppid'])) {
            $model->ppid = $map['Ppid'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['ListenProtocol'])) {
            $model->listenProtocol = $map['ListenProtocol'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['Proof'])) {
            $model->proof = $map['Proof'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
