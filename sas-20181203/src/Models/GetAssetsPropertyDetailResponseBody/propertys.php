<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @description The name of the container.
     *
     * @example 5-rce_web_1
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The timestamp of the last fingerprint collection. Unit: milliseconds.
     *
     * @example 1649149566000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The domain name of the website.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example localhost
     *
     * @var string
     */
    public $domain;

    /**
     * @description The path to the kernel module file.
     *
     * > This parameter is returned only when **Biz** is set to **lkm**.
     * @example /lib/modules/4****
     *
     * @var string
     */
    public $filepath;

    /**
     * @description The name of the image.
     *
     * @example registry-vpc.cn-beijing.aliyuncs.com/acs/aliyun-ingress-controller****
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the server.
     *
     * @example i-hp35tftuh52wbp1g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example hc-host-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 47.42.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 100.104.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP address of the server.
     *
     * @example 47.42.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The listening protocol that the website uses.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example tcp
     *
     * @var string
     */
    public $listenProtocol;

    /**
     * @description The name of the module.
     *
     * > This parameter is returned only when **Biz** is set to **lkm**.
     * @example alihids
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The path. The value of this parameter varies based on the value of **Biz**.
     *
     *   If **Biz** is set to **web_server**, the value of this parameter indicates the path to the website root directory.
     *   If **Biz** is set to **autorun**, the value of this parameter indicates the path to the startup item.
     *
     * @example /lib/systemd/system****
     *
     * @var string
     */
    public $path;

    /**
     * @description The permissions on the root directory of the website.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example 755
     *
     * @var string
     */
    public $pathMode;

    /**
     * @description The process ID (PID) of the process that runs the website service.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example 813
     *
     * @var string
     */
    public $pid;

    /**
     * @description The port of the website.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The timestamp generated when the process was started. Unit: milliseconds.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example 1671186801000
     *
     * @var int
     */
    public $processStarted;

    /**
     * @description The ID of the region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the website.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example nginx
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The size of the kernel module.
     *
     * > This parameter is returned only when **Biz** is set to **lkm**.
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @description The number of times that the kernel module is referenced.
     *
     * > This parameter is returned only when **Biz** is set to **lkm**.
     * @example 0
     *
     * @var int
     */
    public $usedByCount;

    /**
     * @description The user who started the process of the website.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
     * @example root
     *
     * @var string
     */
    public $user;

    /**
     * @description The UUID of the server.
     *
     * @example 162eb349-c2d9-4f8b-805c-75b43d4c****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The path to the root directory of the website.
     *
     * > This parameter is returned only when **Biz** is set to **web_server**.
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
