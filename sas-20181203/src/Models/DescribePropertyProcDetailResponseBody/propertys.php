<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcDetailResponseBody;

use AlibabaCloud\Dara\Model;

class propertys extends Model
{
    /**
     * @var string
     */
    public $cmdline;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var string
     */
    public $euidName;
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
     * @var int
     */
    public $isPackage;
    /**
     * @var string
     */
    public $md5;
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
    public $pname;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var int
     */
    public $startTimeDt;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $user;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
