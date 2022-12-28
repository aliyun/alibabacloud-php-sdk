<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @example 5-rce_web_1
     *
     * @var string
     */
    public $containerName;

    /**
     * @example 1649149566000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example localhost
     *
     * @var string
     */
    public $domain;

    /**
     * @example /lib/modules/4****
     *
     * @var string
     */
    public $filepath;

    /**
     * @example registry-vpc.cn-beijing.aliyuncs.com/acs/aliyun-ingress-controller****
     *
     * @var string
     */
    public $imageName;

    /**
     * @example i-hp35tftuh52wbp1g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example hc-host-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 47.42.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 100.104.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 47.42.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @example tcp
     *
     * @var string
     */
    public $listenProtocol;

    /**
     * @example alihids
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example /lib/systemd/system****
     *
     * @var string
     */
    public $path;

    /**
     * @example 755
     *
     * @var string
     */
    public $pathMode;

    /**
     * @example 813
     *
     * @var string
     */
    public $pid;

    /**
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @example 1671186801000
     *
     * @var int
     */
    public $processStarted;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example nginx
     *
     * @var string
     */
    public $serverType;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 0
     *
     * @var int
     */
    public $usedByCount;

    /**
     * @example root
     *
     * @var string
     */
    public $user;

    /**
     * @example 162eb349-c2d9-4f8b-805c-75b43d4c****
     *
     * @var string
     */
    public $uuid;

    /**
     * @example /usr/share/nginx/html
     *
     * @var string
     */
    public $webPath;
    protected $_name = [
        'containerName'   => 'ContainerName',
        'createTimestamp' => 'CreateTimestamp',
        'domain'          => 'Domain',
        'filepath'        => 'Filepath',
        'imageName'       => 'ImageName',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'ip'              => 'Ip',
        'listenProtocol'  => 'ListenProtocol',
        'moduleName'      => 'ModuleName',
        'path'            => 'Path',
        'pathMode'        => 'PathMode',
        'pid'             => 'Pid',
        'port'            => 'Port',
        'processStarted'  => 'ProcessStarted',
        'regionId'        => 'RegionId',
        'serverType'      => 'ServerType',
        'size'            => 'Size',
        'usedByCount'     => 'UsedByCount',
        'user'            => 'User',
        'uuid'            => 'Uuid',
        'webPath'         => 'WebPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->filepath) {
            $res['Filepath'] = $this->filepath;
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
        if (null !== $this->listenProtocol) {
            $res['ListenProtocol'] = $this->listenProtocol;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathMode) {
            $res['PathMode'] = $this->pathMode;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->processStarted) {
            $res['ProcessStarted'] = $this->processStarted;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->usedByCount) {
            $res['UsedByCount'] = $this->usedByCount;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Filepath'])) {
            $model->filepath = $map['Filepath'];
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
        if (isset($map['ListenProtocol'])) {
            $model->listenProtocol = $map['ListenProtocol'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathMode'])) {
            $model->pathMode = $map['PathMode'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProcessStarted'])) {
            $model->processStarted = $map['ProcessStarted'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['UsedByCount'])) {
            $model->usedByCount = $map['UsedByCount'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['WebPath'])) {
            $model->webPath = $map['WebPath'];
        }

        return $model;
    }
}
