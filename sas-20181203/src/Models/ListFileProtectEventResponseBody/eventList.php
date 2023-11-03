<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListFileProtectEventResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @description The severity of the alert. Valid values:
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
     * @description The command line of the event.
     *
     * @example ["touch","/test/aaaa"]
     *
     * @var string
     */
    public $cmdLine;

    /**
     * @description The path to the file.
     *
     * @example /etc/pam.d/su
     *
     * @var string
     */
    public $filePath;

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
     * @example 161757
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the server.
     *
     * @example kyy-admin-01
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 121.40.211.194
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset.
     *
     * @example 172.22.5.36
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
     * @description The operation performed by the process on the file.
     *
     * @example DELETE
     *
     * @var string
     */
    public $operation;

    /**
     * @description The path to the process.
     *
     * @example /usr/bin/sshpass
     *
     * @var string
     */
    public $procPath;

    /**
     * @description The permissions required to start the process.
     *
     * @example rwxr-xr-x
     *
     * @var string
     */
    public $procPermission;

    /**
     * @description The process ID (PID) of the event process.
     *
     * @example 52636
     *
     * @var string
     */
    public $processId;

    /**
     * @description The remarks.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The name of the rule.
     *
     * @example test-rule-1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the event. Valid values:
     *
     *   0: unhandled
     *   1: handled
     *   2: added to the whitelist
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The UUID of the server that is associated with the process.
     *
     * @example 94b44720-d982-4d20-a4e1-80a1a57b5a8e
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertLevel'     => 'AlertLevel',
        'cmdLine'        => 'CmdLine',
        'filePath'       => 'FilePath',
        'handleTime'     => 'HandleTime',
        'id'             => 'Id',
        'instanceName'   => 'InstanceName',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'latestTime'     => 'LatestTime',
        'operation'      => 'Operation',
        'procPath'       => 'ProcPath',
        'procPermission' => 'ProcPermission',
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
        if (null !== $this->procPermission) {
            $res['ProcPermission'] = $this->procPermission;
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
     * @return eventList
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
        if (isset($map['ProcPermission'])) {
            $model->procPermission = $map['ProcPermission'];
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
