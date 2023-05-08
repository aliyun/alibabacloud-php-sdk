<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @description The startup parameter of the process.
     *
     * @example ./8888
     *
     * @var string
     */
    public $cmdline;

    /**
     * @description root
     *
     * @example 1565686951000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The time when the process starts.
     *
     * @example root
     *
     * @var string
     */
    public $euidName;

    /**
     * @description The user who runs the process.
     *
     * @example i-hp35tftuh52wbp1g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The pagination information.
     *
     * @example hc-host-****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the process.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The timestamp when the process starts. Unit: milliseconds.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The name of the server that is associated with the process.
     *
     * @example 1
     *
     * @var int
     */
    public $isPackage;

    /**
     * @description 1649587453000
     *
     * @example 842644ea3d88bd7f7e14c1c089ef****
     *
     * @var string
     */
    public $md5;

    /**
     * @description Specifies whether fuzzy search by process name is supported. If you want to use fuzzy search, set the parameter to 1. If you set the parameter to a different value or leave the parameter empty, fuzzy search is not supported.
     *
     * @example agetty
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the server that is associated with the process.
     *
     * @example /root/Oracle/Middleware/***\/8888
     *
     * @var string
     */
    public $path;

    /**
     * @description The timestamp when the process ends. Unit: milliseconds.
     *
     * @example 12826
     *
     * @var string
     */
    public $pid;

    /**
     * @description 1
     *
     * @example start***.s
     *
     * @var string
     */
    public $pname;

    /**
     * @description The name of the parent process to which the process belongs.
     *
     * @example 2019-08-07 10:09:05
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The MD5 hash value of the process file.
     *
     * @example 1648783107000
     *
     * @var int
     */
    public $startTimeDt;

    /**
     * @description The UUID of the server.
     *
     * @example sleeping
     *
     * @var string
     */
    public $state;

    /**
     * @description The user who runs the process.
     *
     * @example root
     *
     * @var string
     */
    public $user;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example 162eb349-c2d9-4f8b-805c-75b43d4c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'cmdline'         => 'Cmdline',
        'createTimestamp' => 'CreateTimestamp',
        'euidName'        => 'EuidName',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'isPackage'       => 'IsPackage',
        'md5'             => 'Md5',
        'name'            => 'Name',
        'path'            => 'Path',
        'pid'             => 'Pid',
        'pname'           => 'Pname',
        'startTime'       => 'StartTime',
        'startTimeDt'     => 'StartTimeDt',
        'state'           => 'State',
        'user'            => 'User',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->euidName) {
            $res['EuidName'] = $this->euidName;
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
        if (null !== $this->isPackage) {
            $res['IsPackage'] = $this->isPackage;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
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
        if (null !== $this->pname) {
            $res['Pname'] = $this->pname;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startTimeDt) {
            $res['StartTimeDt'] = $this->startTimeDt;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EuidName'])) {
            $model->euidName = $map['EuidName'];
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
        if (isset($map['IsPackage'])) {
            $model->isPackage = $map['IsPackage'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
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
        if (isset($map['Pname'])) {
            $model->pname = $map['Pname'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartTimeDt'])) {
            $model->startTimeDt = $map['StartTimeDt'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
