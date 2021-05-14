<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcDetailResponseBody;

use AlibabaCloud\Tea\Model;

class propertys extends Model
{
    /**
     * @var string
     */
    public $create;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $cmdline;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $euidName;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $pname;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'create'          => 'Create',
        'internetIp'      => 'InternetIp',
        'pid'             => 'Pid',
        'user'            => 'User',
        'instanceId'      => 'InstanceId',
        'cmdline'         => 'Cmdline',
        'intranetIp'      => 'IntranetIp',
        'euidName'        => 'EuidName',
        'uuid'            => 'Uuid',
        'startTime'       => 'StartTime',
        'pname'           => 'Pname',
        'instanceName'    => 'InstanceName',
        'path'            => 'Path',
        'md5'             => 'Md5',
        'name'            => 'Name',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->euidName) {
            $res['EuidName'] = $this->euidName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->pname) {
            $res['Pname'] = $this->pname;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['EuidName'])) {
            $model->euidName = $map['EuidName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Pname'])) {
            $model->pname = $map['Pname'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
