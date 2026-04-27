<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUnknownThreatDetectEventResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cmdChain;

    /**
     * @var string
     */
    public $cmdline;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var string
     */
    public $hashKey;

    /**
     * @var string
     */
    public $id;

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
    public $lastTime;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $parentCmdline;

    /**
     * @var string
     */
    public $parentPid;

    /**
     * @var string
     */
    public $parentProcessPath;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $processPath;

    /**
     * @var string
     */
    public $sha256;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'cmdChain' => 'CmdChain',
        'cmdline' => 'Cmdline',
        'count' => 'Count',
        'firstTime' => 'FirstTime',
        'hashKey' => 'HashKey',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'lastTime' => 'LastTime',
        'md5' => 'Md5',
        'parentCmdline' => 'ParentCmdline',
        'parentPid' => 'ParentPid',
        'parentProcessPath' => 'ParentProcessPath',
        'pid' => 'Pid',
        'processPath' => 'ProcessPath',
        'sha256' => 'Sha256',
        'status' => 'Status',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmdChain) {
            $res['CmdChain'] = $this->cmdChain;
        }

        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->parentCmdline) {
            $res['ParentCmdline'] = $this->parentCmdline;
        }

        if (null !== $this->parentPid) {
            $res['ParentPid'] = $this->parentPid;
        }

        if (null !== $this->parentProcessPath) {
            $res['ParentProcessPath'] = $this->parentProcessPath;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->processPath) {
            $res['ProcessPath'] = $this->processPath;
        }

        if (null !== $this->sha256) {
            $res['Sha256'] = $this->sha256;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CmdChain'])) {
            $model->cmdChain = $map['CmdChain'];
        }

        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['ParentCmdline'])) {
            $model->parentCmdline = $map['ParentCmdline'];
        }

        if (isset($map['ParentPid'])) {
            $model->parentPid = $map['ParentPid'];
        }

        if (isset($map['ParentProcessPath'])) {
            $model->parentProcessPath = $map['ParentProcessPath'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['ProcessPath'])) {
            $model->processPath = $map['ProcessPath'];
        }

        if (isset($map['Sha256'])) {
            $model->sha256 = $map['Sha256'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
