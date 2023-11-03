<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectEventResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The severity of alerts. Valid values:
     *
     *   0: does not generate alerts
     *   1: sends notifications
     *   2: suspicious
     *   3: high-risk
     *
     * @example 1
     *
     * @var int
     */
    public $alertLevel;

    /**
     * @description The event command line.
     *
     * @example ["touch","/usr/local/aaaa"]
     *
     * @var string
     */
    public $cmdLine;

    /**
     * @description The path to the file.
     *
     * @example /usr/local
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The permissions to run the process.
     *
     * @example rwxr-xr-x
     *
     * @var string
     */
    public $filePermission;

    /**
     * @description The timestamp at which the event was first detected.
     *
     * @example 1694576692000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description The time when the event was handled.
     *
     * @example 1694576692000
     *
     * @var int
     */
    public $handleTime;

    /**
     * @description The ID of the event.
     *
     * @example 55037
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the instance.
     *
     * @example i-wz92q7m5hsbgfhdss***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the associated instance.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the associated instance.
     *
     * @example 10.42.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The time when the event last occurred.
     *
     * @example 1694576692000
     *
     * @var int
     */
    public $latestTime;

    /**
     * @description The operation that the process performed on the file.
     *
     * @example DELETE
     *
     * @var string
     */
    public $operation;

    /**
     * @description The path to the process.
     *
     * @example /bin/bash33
     *
     * @var string
     */
    public $procPath;

    /**
     * @description The process ID of the event.
     *
     * @example 3453
     *
     * @var string
     */
    public $processId;

    /**
     * @description The remarks.
     *
     * @example ["test"]
     *
     * @var string
     */
    public $remark;

    /**
     * @description The name of the rule.
     *
     * @example test-000
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the event. Valid values:
     *
     *   0: not handled
     *   1: handled
     *   2: added to the whitelist
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The UUID of the asset.
     *
     * @example 49f1360f-62c8-4b48-a24c-5cc317656419
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertLevel'     => 'AlertLevel',
        'cmdLine'        => 'CmdLine',
        'filePath'       => 'FilePath',
        'filePermission' => 'FilePermission',
        'firstTime'      => 'FirstTime',
        'handleTime'     => 'HandleTime',
        'id'             => 'Id',
        'instanceName'   => 'InstanceName',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'latestTime'     => 'LatestTime',
        'operation'      => 'Operation',
        'procPath'       => 'ProcPath',
        'processId'      => 'ProcessId',
        'remark'         => 'Remark',
        'ruleName'       => 'RuleName',
        'status'         => 'Status',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertLevel) {
            $res['AlertLevel'] = $this->alertLevel;
        }
        if (null !== $this->cmdLine) {
            $res['CmdLine'] = $this->cmdLine;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->filePermission) {
            $res['FilePermission'] = $this->filePermission;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->handleTime) {
            $res['HandleTime'] = $this->handleTime;
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
        if (null !== $this->latestTime) {
            $res['LatestTime'] = $this->latestTime;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->procPath) {
            $res['ProcPath'] = $this->procPath;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertLevel'])) {
            $model->alertLevel = $map['AlertLevel'];
        }
        if (isset($map['CmdLine'])) {
            $model->cmdLine = $map['CmdLine'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['FilePermission'])) {
            $model->filePermission = $map['FilePermission'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['HandleTime'])) {
            $model->handleTime = $map['HandleTime'];
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
        if (isset($map['LatestTime'])) {
            $model->latestTime = $map['LatestTime'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ProcPath'])) {
            $model->procPath = $map['ProcPath'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
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
